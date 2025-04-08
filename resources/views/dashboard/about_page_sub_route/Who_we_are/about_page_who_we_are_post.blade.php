@extends('dashboard.dashboard')
@section('dashboard')
    <section>
        <div class=" main-div">
            <div class="form-div">
                <form id="about_page_who_we_are_post" method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    <div> <label for="username">Image</label> <br>
                        <input id="image" type="file" accept="image/*" placeholder="input image" name="image"
                            class="form-control " /> <br>
                            <small class="error-message" style="color:red; " id="error-image"></small>

                    </div>
                    <br> <br>
                    <div> <label class="" for="">title_1</label> <br>
                        <input id="title_1" type="text" placeholder="Input title" name="title_1"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-title_1"></small>


                    </div> <br> <br>
                    <div> <label class="" for="">title_2</label> <br>
                        <input id="title_2" type="text" placeholder="Input title" name="title_2"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-title_2"></small>


                    </div> <br> <br>
                    <div> <label class="" for="">title_3</label> <br>
                        <input id="title" type="text" placeholder="Input title" name="title_3"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-title_3"></small>


                    </div> <br> <br>
                    <div> <label class="" for="">title_4</label> <br>
                        <input id="title" type="text" placeholder="Input title" name="title_4"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-title_4"></small>


                    </div> <br> <br>
                    <div> <label class="" for="">Description_1</label> <br>
                        <textarea id="description" type="text" placeholder="Input Description" name="description_1"
                            class="form-control" ></textarea> <br>
                            <small class="error-message" style="color:red; " id="error-description_1"></small>


                    </div> <br> <br>
                    <div> <label class="" for="">Description_2</label> <br>
                        <textarea id="description" type="text" placeholder="Input Description" name="description_2"
                            class="form-control" ></textarea> <br>
                            <small class="error-message" style="color:red; " id="error-description_2"></small>


                    </div> <br>




                    <button class="btn btn-primary w-100">submit</button>



                </form>



            </div>

            <div class="dynamic-div">

              @foreach ($allDatas as $allData )
              <div style="width: 60% ;margin-left:auto; margin-right:auto" class="card" style="width: 100%;">
                <img style="width:80%; height:30vh; margin-left: auto; margin-right:auto;" class="card-img-top"
                    src="{{asset($allData->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$allData->title_1}}</h5>
                    <p class="card-text">{{$allData->description_1}}</p>
                </div>

                <div class="card-body" style=" display:flex; justify-content:space-between ; font-size:25px;">
                    <a class="btn btn-secondary" style="text-decoration:none;" href="{{route('about_page_who_we_are_single_data',['id'=>$allData->id])}}"
                    class="card-link">Update</a>
                    <form method="POST" action="{{route('about_page_who_we_are_delete_data',['id'=>$allData->id])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">delete</button>
                       </form>

                </div>
            </div>
              @endforeach


            </div>





        </div>


    </section>
@endsection

@section('script')
    <script
        src="{{ asset('asset/script_file/about_page_js_file/who_we_are_post_section.js') }}">
    </script>
@endsection
