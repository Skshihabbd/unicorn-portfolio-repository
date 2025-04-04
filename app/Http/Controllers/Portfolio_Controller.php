<?php

namespace App\Http\Controllers;

use App\Models\portfolioourwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Portfolio_Controller extends Controller
{
    public function get_our_work()
    {

        $OurWorkAllData = portfolioourwork::all();


        return view("dashboard.Portfolio_sub_route_folder.Our_work.OurWorkPostRoute", [
            'OurWorkAllDatas' => $OurWorkAllData
        ]);
    }


    public function post_our_work(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpeg|max:500',
            'heading' => "required|string|min:10",
            'title' => "required|string|min:10",
            'description' => "required|string|min:10",
            "explaination" => "required|string|min:20",
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }



        try {
            $logo = $request->file('image');
            $heading = $request->input('heading');
            $title = $request->input('title');
            $description = $request->input('description');
            $explaination = $request->input('explaination');

            $filename = time() . "." . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads_portfolio_ourwork_logo'), $filename);

            $data = portfolioourwork::create([
                "logo" => 'uploads_portfolio_ourwork_logo/' . $filename,
                "heading" => $heading,
                "title" => $title,
                "description" => $description,
                "explaination" => $explaination,
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

    public function get_single_data_our_work(String $id)
    {
        $OurWorkSingleData = portfolioourwork::find($id);
        return view("dashboard.Portfolio_sub_route_folder.Our_work.OurWorkUpdateRoute", [
            'OurWorkSingleData' => $OurWorkSingleData
        ]);
    }

    public function single_data_our_work_update(Request $request, String $id)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:png,jpeg|max:500',
            'heading' => "required|string|min:10",
            'title' => "required|string|min:10",
            'description' => "required|string|min:10",
            "explaination" => "required|string|min:20",
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Send 422 response
        }


        try {

            $getValue = portfolioourwork::find($id);
            $fileNameOld = $getValue->logo;
            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $fileName = time() . "." . $file->getClientOriginalExtension();

                $file->move(public_path('uploads_portfolio_ourwork_logo'), $fileName);
                unlink(public_path($fileNameOld));
            }


            $heading = $request->input('heading');
            $title = $request->input('title');
            $description = $request->input('description');
            $explaination = $request->input('explaination');

            $getValue->update([
                "logo" => 'uploads_portfolio_ourwork_logo/' . $fileName,
                "heading" => $heading,
                "title" => $title,
                "description" => $description,
                "explaination" => $explaination,
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Data updated successfully!',
                'redirect_url' => route('our_work')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'somethings went wrong',
                'databaseerror' => $e->getMessage()
            ], 500);
        }
    }

    public function single_data_our_work_delete(String $id){
        portfolioourwork::destroy($id);
        
        return redirect()->route('our_work');
    }
}
