<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use App\Models\Ourservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Home_Controller extends Controller
{

    // ourservice_crud_operation_data_method

    //post_method

    public function storeOurService(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'images' => 'required|image|mimes:png,jpeg|max:500',
            'title' => "required|string|min:10",
            "description" => "required|string|min:20"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };
        $file = $request->file('images');
        $title = $request->input('title');
        $description = $request->input('description');
        $fileName = time() . "." . $file->getClientOriginalExtension();

        $file->move(public_path('upload_our_service'), $fileName);


        $data = Ourservice::create([
            'images' => 'upload_our_service/' . $fileName,
            'title' => $title,
            'description' => $description
        ]);


        return redirect()->back()->with('success', 'Data saved successfully!');


    }

    // get_all_data

    public function getOurService()
    {
        $OurServiceAllData = Ourservice::all();



        return view('dashboard.page.ourservice', [
            'OurServiceAllDatas' => $OurServiceAllData
        ]);
    }
    // get_all_data


    //get_single_data
    public function GetSingleDataOurService(string $id)
    {
        $singleValue = Ourservice::find($id);

        return view('dashboard.page.ourserviceupdate', [
            'singlevalues' => $singleValue
        ]);
    }
    //get_single_data

    //delete_single_data
    public function DeleteSingleDataOurService(string $id)
    {
        // printf($id);
        Ourservice::destroy($id);

        return redirect()->route('ourservice');
    }
    //delete_single_data

    //update_our_service
    public function singleValueUpdate(Request $request, string $id)
    {

        $getValue = Ourservice::find($id);
        $fileName = $getValue->images;
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $fileName = time() . "." . $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $fileName);
            unlink(public_path($getValue->images));
        }

        $title = $request->input('title');
        $description = $request->input('description');

        $getValue->update([
            'images' => 'uploads/' . $fileName,
            'title' => $title,
            'description' => $description
        ]);
    }





    // ourservice_post_data_method

    //analysis_section_crud_operation_controller

    public function analysis_section_get_data()
    {
        $analysesData=Analysis::all();
        return view('dashboard.what_we_do.analysis',['analysess'=>$analysesData]);
    }

    public function analysis_section_data_post(Request $request)
    {

        $logo = $request->file('logo');
        $title = $request->input('title');
        $description = $request->input('description');

        $filename = time() . "." . $logo->getClientOriginalExtension();
        $logo->move(public_path('uploads_analysis_logo'), $filename);

        $data=Analysis::create([
            "logo"=>'uploads_analysis_logo/' . $filename,
            "title"=>$title,
            "description"=>$description
        ]);
         return response()->json(["message"=>"data send successfully","data"=>$data],201);
    }



    //analysis_section_crud_operation_controller


    public  function AllHomeDataGet()
    {
        return view('page.home');
    }
}
