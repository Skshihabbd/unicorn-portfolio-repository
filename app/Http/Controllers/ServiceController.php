<?php

namespace App\Http\Controllers;

use App\Models\Servicemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function service_category_get_data()
    {

        $service_category_all_data_get = Servicemodel::all();
        return view('dashboard.ServiceRoute.service_main_route_sub_folder.servicecategory.servicecategory', [
            'service_category_all_datas_get' => $service_category_all_data_get
        ]);
    }



    public function service_category_post_data(Request $request)
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
            ], 422);
        }

        try {
            $image = $request->file('image');

            $title = $request->input('title');
            $description = $request->input('description');


            $filename = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads_service_category_images'), $filename);

            $data = Servicemodel::create([
                "image" => 'uploads_service_category_images/' . $filename,

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

    public function service_page_all_data_get()
    {
        $service_category_all_data_get = Servicemodel::all();
        return view('page.service', ['service_category_all_datas_get' => $service_category_all_data_get]);
    }

    // public function service_category_single_data_get(String $id)
    // {


    //     // $data = Servicemodel::find($id);
    //     $data = Servicemodel::all();

    //     return response()->json([
    //         'data' => $data
    //     ]);
    // }
}
