<?php

namespace App\Http\Controllers;

use App\Models\About_who_we_are;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class About_Controller extends Controller
{
    // about_page_who_we_are_section_crud_operation

//get_route
    public function about_page_who_we_are_get_data()
    {
        $allData = About_who_we_are::all();
        return view('dashboard.about_page_sub_route.Who_we_are.about_page_who_we_are_post', [
            'allDatas' => $allData
        ]);
    }

    public function about_page_who_we_are_single_data(String $id)
    {
        $SingleData = About_who_we_are::find($id);
        return view("dashboard.about_page_sub_route.Who_we_are.about_page_who_we_are_update", [
            'SingleData' => $SingleData
        ]);
    }
    //post
    public function about_page_who_we_are_post_data(Request $request)
    {

// dd($request);

        $validator = Validator::make($request->all(), [
           'image' => 'required|image|mimes:png,jpeg|max:500',

            'title_1' => "required|string|min:10",
            'title_2' => "required|string|min:10",
            'title_3' => "required|string|min:10",
            'title_4' => "required|string|min:10",
            'description_1' => "required|string|min:10",
            'description_2' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }

        $title_1 = $request->input('title_1');
                $title_2 = $request->input('title_2');
                $title_3 = $request->input('title_3');
                $title_4 = $request->input('title_4');
                $description_1 = $request->input('description_1');
                $description_2 = $request->input('description_2');


        $data = About_who_we_are::first();


      try{
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move(public_path('uploads_about_page_who_we_are'), $fileName);
            if ($data && $data->image) {
                unlink(public_path($data->image));
            }

            if (!$data) {
                $returnDatapost = About_who_we_are::create([
                    'image' => 'uploads_about_page_who_we_are/' . $fileName,
                    "title_1" => $title_1,
                    "title_2" => $title_2,
                    "title_3" => $title_3,
                    "title_4" => $title_4,
                    "description_1" => $description_1,
                    "description_2" => $description_2,



                ]);
                return response()->json(['message' => 'Item created successfully']);
            } else {
                $data->update([
                    'image' => 'uploads_about_page_who_we_are/' . $fileName,
                    "title_1" => $title_1,
                    "title_2" => $title_2,
                    "title_3" => $title_3,
                    "title_4" => $title_4,
                    "description_1" => $description_1,
                    "description_2" => $description_2,

                ]);

                return response()->json(['message' => 'Item updated successfully']);
            }
        }
      }
      catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'somethings went wrong',
            'databaseerror' => $e->getMessage()
        ], 500);
    }
    }


    //update
    public function about_page_who_we_are_update_data(Request $request, String $id)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:png,jpeg|max:500',

            'title_1' => "required|string|min:10",
            'title_2' => "required|string|min:10",
            'title_3' => "required|string|min:10",
            'title_4' => "required|string|min:10",
            'description_1' => "required|string|min:10",
            'description_2' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }


        $title_1 = $request->input('title_1');
        $title_2 = $request->input('title_2');
        $title_3 = $request->input('title_3');
        $title_4 = $request->input('title_4');
        $description_1 = $request->input('description_1');
        $description_2 = $request->input('description_2');

        try {

            $getValue = About_who_we_are::find($id);
            $fileNameOld = $getValue->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $fileName = time() . "." . $file->getClientOriginalExtension();

                $file->move(public_path('uploads_about_page_who_we_are'), $fileName);
                unlink(public_path($fileNameOld));



                $getValue->update([
                    "image" => 'uploads_about_page_who_we_are/' . $fileName,

                    "title_1" => $title_1,
                    "title_2" => $title_2,
                    "title_3" => $title_3,
                    "title_4" => $title_4,
                    "description_1" => $description_1,
                    "description_2" => $description_2,

                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Data updated successfully!',
                    'redirect_url' => route('about_page_who_we_are_get_data')
                ]);
            }
            else {

                $getValue->update([
                    "image" =>  $fileNameOld,
                    "title_1" => $title_1,
                    "title_2" => $title_2,
                    "title_3" => $title_3,
                    "title_4" => $title_4,
                    "description_1" => $description_1,
                    "description_2" => $description_2,


                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Data updated successfully!',
                    'redirect_url' => route('about_page_who_we_are_get_data')
                ]);
            }
        }
        catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'somethings went wrong',
                'databaseerror' => $e->getMessage()
            ], 500);
        }
    }


    //delete
    public function about_page_who_we_are_delete_data(String $id)
    {
        $data = About_who_we_are::first();
        if ($data && $data->image) {
            unlink(public_path($data->image));
            About_who_we_are::destroy($id);
        }



        return redirect()->route('about_page_who_we_are_get_data');
    }





    // about_page_who_we_are_section_crud_operation




















    //about page get all data
    public function about_page_get(){

            return view('page.about');
    }


}
