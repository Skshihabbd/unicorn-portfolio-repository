<?php

namespace App\Http\Controllers;


use App\Models\Home_analysis;
use App\Models\Home_chooseussection;
use App\Models\Home_how_we_work;
use App\Models\Home_ourservicesection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Home_Controller extends Controller
{
//--------------------------------------------------------------------------
    // ourservice_crud_operation_data_method




    public function home_ourservice_get_data()
    {
        $allData = Home_ourservicesection::all();
        return view("dashboard.Home_page_sub_route.Home_page_our_service_section.home_page_our_service_post", [
            'allDatas' => $allData
        ]);
    }

    public function home_ourservice_single_data(String $id)
    {
        $SingleData = Home_ourservicesection::find($id);
        return view("dashboard.Home_page_sub_route.Home_page_our_service_section.home_page_our_service_update", [
            'SingleData' => $SingleData
        ]);
    }


     // post
     public function home_ourservice_post_data(Request $request)
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
             $image->move(public_path('uploads_home_ourservice'), $filename);

             $data = Home_ourservicesection::create([
                 "image" => 'uploads_home_ourservice/' . $filename,

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
     public function home_ourservice_update_data(Request $request, String $id)
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

             $getValue = Home_ourservicesection::find($id);
             $fileNameOld = $getValue->image;
             if ($request->hasFile('image')) {
                 $file = $request->file('image');

                 $fileName = time() . "." . $file->getClientOriginalExtension();

                 $file->move(public_path('uploads_home_ourservice'), $fileName);
                 unlink(public_path($fileNameOld));

                 $title = $request->input('title');
                 $description = $request->input('description');

                 $getValue->update([
                     "image" => 'uploads_home_ourservice/' . $fileName,

                     "title" => $title,
                     "description" => $description,

                 ]);
                 return response()->json([
                     'success' => true,
                     'message' => 'Data updated successfully!',
                     'redirect_url' => route('home_ourservice_get_data')
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
                     'redirect_url' => route('home_ourservice_get_data')
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
     public function home_ourservice_delete_data(String $id)
     {
         $data = Home_ourservicesection::find($id);
         if ($data && $data->image) {
             unlink(public_path($data->image));
             Home_ourservicesection::destroy($id);
         }


         return redirect()->route('home_ourservice_get_data');
     }










    // ourservice_post_crud_operation_method
//------------------------------------------------------------------------
















    //---------------------------------------------------------------------------------------

    //analysis_section_crud_operation_controller


 public function home_analysis_get_data()
 {
     $allData = Home_analysis::all();
     return view("dashboard.Home_page_sub_route.Home_analysis_section.analysispost", [
         'allDatas' => $allData
     ]);
 }

 public function home_analysis_single_data(String $id)
 {
     $SingleData = Home_analysis::find($id);
     return view("dashboard.Home_page_sub_route.Home_analysis_section.analysis_update", [
         'SingleData' => $SingleData
     ]);
 }


  // post
  public function home_analysis_post_data(Request $request)
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
          $image->move(public_path('uploads_home_analysis'), $filename);

          $data = Home_analysis::create([
              "image" => 'uploads_home_analysis/' . $filename,

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
  public function home_analysis_update_data(Request $request, String $id)
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

          $getValue = Home_analysis::find($id);
          $fileNameOld = $getValue->image;
          if ($request->hasFile('image')) {
              $file = $request->file('image');

              $fileName = time() . "." . $file->getClientOriginalExtension();

              $file->move(public_path('uploads_home_analysis'), $fileName);
              unlink(public_path($fileNameOld));

              $title = $request->input('title');
              $description = $request->input('description');

              $getValue->update([
                  "image" => 'uploads_home_analysis/' . $fileName,

                  "title" => $title,
                  "description" => $description,

              ]);
              return response()->json([
                  'success' => true,
                  'message' => 'Data updated successfully!',
                  'redirect_url' => route('home_analysis_get_data')
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
                  'redirect_url' => route('home_analysis_get_data')
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
  public function home_analysis_delete_data(String $id)
  {
      $data = Home_analysis::find($id);
      if ($data && $data->image) {
          unlink(public_path($data->image));
          Home_analysis::destroy($id);
      }


      return redirect()->route('home_analysis_get_data');
  }


    //analysis_section_crud_operation_controller

















//------------------------------------------------------------------------------


//home-section-choose-us-section-crud-operation


public function home_choose_us_get_data()
 {
     $allData = Home_chooseussection::all();
     return view("dashboard.Home_page_sub_route.Home_page_choose_us_section.Home_page_choose_us_post", [
         'allDatas' => $allData
     ]);
 }

 public function home_choose_us_single_data(String $id)
 {
     $SingleData = Home_chooseussection::find($id);
     return view("dashboard.Home_page_sub_route.Home_page_choose_us_section.Home_page_choose_us_update", [
         'SingleData' => $SingleData
     ]);
 }


  // post
  public function home_choose_us_post_data(Request $request)
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
          $image->move(public_path('uploads_home_choose_us'), $filename);

          $data = Home_chooseussection::create([
              "image" => 'uploads_home_choose_us/' . $filename,

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
  public function home_choose_us_update_data(Request $request, String $id)
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

          $getValue = Home_chooseussection::find($id);
          $fileNameOld = $getValue->image;
          if ($request->hasFile('image')) {
              $file = $request->file('image');

              $fileName = time() . "." . $file->getClientOriginalExtension();

              $file->move(public_path('uploads_home_choose_us'), $fileName);
              unlink(public_path($fileNameOld));

              $title = $request->input('title');
              $description = $request->input('description');

              $getValue->update([
                  "image" => 'uploads_home_choose_us/' . $fileName,

                  "title" => $title,
                  "description" => $description,

              ]);
              return response()->json([
                  'success' => true,
                  'message' => 'Data updated successfully!',
                  'redirect_url' => route('home_choose_us_get_data')
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
                  'redirect_url' => route('home_choose_us_get_data')
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
  public function home_choose_us_delete_data(String $id)
  {
      $data = Home_chooseussection::find($id);
      if ($data && $data->image) {
          unlink(public_path($data->image));
          Home_chooseussection::destroy($id);
      }


      return redirect()->route('home_choose_us_get_data');
  }



//----------------------------------------------------------------------------

//home-section-how we work crud operation






public function home_how_we_work_get_data()
 {
     $allData = Home_how_we_work::all();
     return view("dashboard.Home_page_sub_route.home_page_how_we_work_section.Home_page_how_we_work_post", [
         'allDatas' => $allData
     ]);
 }

 public function home_how_we_work_single_data(String $id)
 {
     $SingleData = Home_how_we_work::find($id);
     return view("dashboard.Home_page_sub_route.home_page_how_we_work_section.Home_page_how_we_work_update", [
         'SingleData' => $SingleData
     ]);
 }


  // post
  public function home_how_we_work_post_data(Request $request)
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
          $image->move(public_path('uploads_home_how_we_work'), $filename);

          $data = Home_how_we_work::create([
              "image" => 'uploads_home_how_we_work/' . $filename,

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
  public function home_how_we_work_update_data(Request $request, String $id)
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

          $getValue = Home_how_we_work::find($id);
          $fileNameOld = $getValue->image;
          if ($request->hasFile('image')) {
              $file = $request->file('image');

              $fileName = time() . "." . $file->getClientOriginalExtension();

              $file->move(public_path('uploads_home_how_we_work'), $fileName);
              unlink(public_path($fileNameOld));

              $title = $request->input('title');
              $description = $request->input('description');

              $getValue->update([
                  "image" => 'uploads_home_how_we_work/' . $fileName,

                  "title" => $title,
                  "description" => $description,

              ]);
              return response()->json([
                  'success' => true,
                  'message' => 'Data updated successfully!',
                  'redirect_url' => route('home_how_we_work_get_data')
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
                  'redirect_url' => route('home_how_we_work_get_data')
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
  public function home_how_we_work_delete_data(String $id)
  {
      $data = Home_how_we_work::find($id);
      if ($data && $data->image) {
          unlink(public_path($data->image));
          Home_how_we_work::destroy($id);
      }


      return redirect()->route('home_how_we_work_get_data');
  }












//home-section-how we work crud operation



















//home-section-choose-us-section-crud-operation

//---------------------------------------------------------------------


    //home_page_main_route
    public  function AllHomeDataGet()
    {
        return view('page.home');
    }
}
