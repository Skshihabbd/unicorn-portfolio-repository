<?php

namespace App\Http\Controllers;

use App\Models\Ai_1_section;
use App\Models\Ai_2_section;
use App\Models\Ai_3_section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtificialIntelligence extends Controller
{
    //section-1---------------------------------------------------
    public function ai_section_1_get_data()
    {
        $allData = Ai_1_section::all();
        return view('dashboard.ServiceRoute.service_sub_route_folder.AI_sub_route.section_1.ai_section_1_post_route', [
            'allDatas' => $allData
        ]);
    }

    public function ai_section_1_single_data(String $id)
    {
        $SingleData = Ai_1_section::find($id);
        return view("dashboard.ServiceRoute.service_sub_route_folder.AI_sub_route.section_1.ai_section_1_update_route", [
            'SingleData' => $SingleData
        ]);
    }
    //post
    public function ai_section_1_post_data(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpeg|max:500',
            'title' => "required|string|min:10",
            'description' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }

        $title = $request->input('title');
        $description = $request->input('description');


        $data = Ai_1_section::first();


      try{
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move(public_path('uploads_ai_section_1'), $fileName);
            if ($data && $data->image) {
                unlink(public_path($data->image));
            }

            if (!$data) {
                $returnDatapost = Ai_1_section::create([
                    'image' => 'uploads_ai_section_1/' . $fileName,
                    'title' => $title,
                    'description' => $description


                ]);
                return response()->json(['message' => 'Item created successfully']);
            } else {
                $data->update([
                    'image' => 'uploads_ai_section_1/' . $fileName,
                    'title' => $title,
                    'description' => $description
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
    public function ai_section_1_update_data(Request $request, String $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:png,jpeg|max:500',

            'title' => "required|string|min:10",
            'description' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }


        try {

            $getValue = Ai_1_section::find($id);
            $fileNameOld = $getValue->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $fileName = time() . "." . $file->getClientOriginalExtension();

                $file->move(public_path('uploads_ai_section_1'), $fileName);
                unlink(public_path($fileNameOld));

                $title = $request->input('title');
                $description = $request->input('description');

                $getValue->update([
                    "image" => 'uploads_ai_section_1/' . $fileName,

                    "title" => $title,
                    "description" => $description,

                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Data updated successfully!',
                    'redirect_url' => route('ai_section_1_get_data')
                ]);
            }
            else {
                $title = $request->input('title');
                $description = $request->input('description');

                $getValue->update([
                    "image" =>  $fileNameOld,

                    "title" => $title,
                    "description" => $description,

                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Data updated successfully!',
                    'redirect_url' => route('ai_section_1_get_data')
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
    public function ai_section_1_delete_data(String $id)
    {
        $data = Ai_1_section::first();
        if ($data && $data->image) {
            unlink(public_path($data->image));
            Ai_1_section::destroy($id);
        }


        return redirect()->route('ai_section_1_get_data');
    }

    //section-1---------------------------------------------------

































    //section-2---------------------------------------------------------------
    public function ai_section_2_get_data()
    {
        $allData = Ai_2_section::all();
        return view('dashboard.ServiceRoute.service_sub_route_folder.AI_sub_route.section_2.ai_section_2_post_route', [
            'allDatas' => $allData
        ]);
    }

    //get-single-data

    public function ai_section_2_single_data(String $id)
    {
        $SingleData = Ai_2_section::find($id);
        return view("dashboard.ServiceRoute.service_sub_route_folder.AI_sub_route.section_2.ai_section_2_update_route", [
            'SingleData' => $SingleData
        ]);
    }

//post
    public function ai_section_2_post_data(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpeg|max:500',
            'title' => "required|string|min:10",
            'description' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }

        $title = $request->input('title');
        $description = $request->input('description');


        try{
            $data = Ai_2_section::first();


        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move(public_path('uploads_ai_section_2'), $fileName);
            if ($data && $data->image) {
                unlink(public_path($data->image));
            }

            if (!$data) {
                $returnDatapost = Ai_2_section::create([
                    'image' => 'uploads_ai_section_2/' . $fileName,
                    'title' => $title,
                    'description' => $description


                ]);
                return response()->json(['message' => 'Item created successfully']);
            } else {
                $data->update([
                    'image' => 'uploads_ai_section_2/' . $fileName,
                    'title' => $title,
                    'description' => $description
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
public function ai_section_2_update_data(Request $request, String $id)
{
    $validator = Validator::make($request->all(), [
        'image' => 'image|mimes:png,jpeg|max:500',

        'title' => "required|string|min:10",
        'description' => "required|string|min:10",

    ]);


    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422); // Send 422 response
    }


    try {

        $getValue = Ai_2_section::find($id);
        $fileNameOld = $getValue->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move(public_path('uploads_ai_section_2'), $fileName);
            unlink(public_path($fileNameOld));

            $title = $request->input('title');
            $description = $request->input('description');

            $getValue->update([
                "image" => 'uploads_ai_section_2/' . $fileName,

                "title" => $title,
                "description" => $description,

            ]);
            return response()->json([
                'success' => true,
                'message' => 'Data updated successfully!',
                'redirect_url' => route('ai_section_2_get_data')
            ]);
        }
        else {
            $title = $request->input('title');
            $description = $request->input('description');

            $getValue->update([
                "image" =>  $fileNameOld,

                "title" => $title,
                "description" => $description,

            ]);
            return response()->json([
                'success' => true,
                'message' => 'Data updated successfully!',
                'redirect_url' => route('ai_section_2_get_data')
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
    public function ai_section_2_delete_data(String $id)
    {
        $data = Ai_2_section::first();
        if ($data && $data->image) {
            unlink(public_path($data->image));
            Ai_2_section::destroy($id);
        }

        return redirect()->route('ai_section_2_get_data');
    }

    //section-2---------------------------------------------------------------






















































    //section-3---------------------------------------------------------------

    public function ai_section_3_get_data()
    {
        $dataAll = Ai_3_section::all();

        return view('dashboard.ServiceRoute.service_sub_route_folder.AI_sub_route.section_3.ai_section_3_post_route', ['allDatas' => $dataAll]);
    }

    //get-single-data

    public function ai_section_3_single_data(String $id)
    {
        $OurWorkSingleData = Ai_3_section::find($id);
        return view("dashboard.ServiceRoute.service_sub_route_folder.AI_sub_route.section_3.ai_section_3_update_route", [
            'OurWorkSingleData' => $OurWorkSingleData
        ]);
    }
    // post
    public function ai_section_3_post_data(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpeg|max:500',

            'title' => "required|string|min:10",
            'description' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }



        try {
            $image = $request->file('image');

            $title = $request->input('title');
            $description = $request->input('description');


            $filename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads_ai_section_3'), $filename);

            $data = Ai_3_section::create([
                "image" => 'uploads_ai_section_3/' . $filename,

                "title" => $title,
                "description" => $description,

            ]);
            return response()->json(["message" => "data send successfully", "data" => $data], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'somethings went wrong',
                'databaseerror' => $e->getMessage()
            ], 500);
        }
    }

    //update
    public function ai_section_3_update_data(Request $request, String $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpeg|max:500',

            'title' => "required|string|min:10",
            'description' => "required|string|min:10",

        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }


        try {

            $getValue = Ai_3_section::find($id);
            $fileNameOld = $getValue->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $fileName = time() . "." . $file->getClientOriginalExtension();

                $file->move(public_path('uploads_ai_section_3'), $fileName);
                unlink(public_path($fileNameOld));
            }



            $title = $request->input('title');
            $description = $request->input('description');

            $getValue->update([
                "image" => 'uploads_ai_section_3/' . $fileName,

                "title" => $title,
                "description" => $description,

            ]);
            return response()->json([
                'success' => true,
                'message' => 'Data updated successfully!',
                'redirect_url' => route('ai_section_3_get_data')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'somethings went wrong',
                'databaseerror' => $e->getMessage()
            ], 500);
        }
    }

    public function ai_section_3_delete_data(String $id)
    {

        $data = Ai_3_section::find($id);
        if ($data && $data->image) {
            unlink(public_path($data->image));
            Ai_3_section::destroy($id);
        }

        return redirect()->route('ai_section_3_get_data');
    }
    //section-3---------------------------------------------------------------








    public  function artificialIntelligence_data_get()
    {
        $section_1_data = Ai_1_section::all();
        $section_2_data = Ai_2_section::all();
        $section_3_data = Ai_3_section::all();

        return view('service_pages.ai', [
            'section_1_datas' => $section_1_data,
            'section_2_datas' => $section_2_data,
            'section_3_datas' => $section_3_data
        ]);
    }
}
