@extends('dashboard.dashboard')
@section('dashboard')
    <section>
        <div class=" main-div">
            <div class="form-div">
                <form id="service-category-post" method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    <div> <label for="username">Image</label> <br>
                        <input id="image" type="file" accept="image/*" placeholder="input image" name="image"
                            class="form-control " /> <br>
                            <small class="error-message" style="color:red; " id="error-image"></small>

                    </div>
                    <br> <br>
                    <div> <label class="" for="">title</label> <br>
                        <input id="title" type="text" placeholder="Input title" name="title"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-title"></small>

                    </div> <br> <br>
                    <div> <label class="" for="">Description</label> <br>
                        <input id="description" type="text" placeholder="Input Description" name="description"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-description"></small>

                    </div> <br>




                    <button class="btn btn-primary w-100">submit</button>



                </form>



            </div>

            <div class="dynamic-div">

             @foreach ( $service_category_all_datas_get as  $service_category_all_data_get )
             <div style="width: 60% ;margin-left:auto; margin-right:auto" class="card" style="width: 100%;">
                <img style="width:80%; height:30vh; margin-left: auto; margin-right:auto;" class="card-img-top"
                    src="{{asset($service_category_all_data_get->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$service_category_all_data_get->title}}</h5>
                    <p class="card-text">{{$service_category_all_data_get->description}}</p>
                </div>

                <div class="card-body" style=" display:flex; justify-content:space-between ; font-size:25px;">
                    <a class="btn btn-secondary" style="text-decoration:none;" href=""
                        class="card-link">Update</a>


                    <button class="btn btn-primary" type="submit">delete</button>
                </div>
            </div>
             @endforeach


            </div>





        </div>


    </section>
@endsection

@section('script')
<script src="{{asset('asset/script_file/servicemain_folder_js_file/servicecategorypost.js')}}"></script>
@endsection
