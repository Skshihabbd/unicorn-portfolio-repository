@extends('dashboard.dashboard')

@section('dashboard')
    <div style="width: 100%;" class="form-div">
        <form id="about_page_who_we_are_update" method="POST" action="" enctype="multipart/form-data">
            @csrf

            <div> <label for="username">Image</label> <br>
                <input id="image" type="file" accept="image/*" placeholder="input image" name="image"
                    class="form-control " /> <br>
                <small class="error-message" style="color:red; " id="error-image"></small>

            </div>
            <br> <br>

            <div> <label class="" for="">title_1</label> <br>
                <input id="title_1" type="text" value="{{$SingleData->title_1}}"  placeholder="Input title" name="title_1"
                    class="form-control" /> <br>
                <small class="error-message" style="color:red; " id="error-title_1"></small>

            </div> <br> <br>
            <div> <label class="" for="">title_2</label> <br>
                <input id="title_2" type="text" value="{{$SingleData->title_2}}"  placeholder="Input title" name="title_2"
                    class="form-control" /> <br>
                <small class="error-message" style="color:red; " id="error-title_2"></small>

            </div> <br> <br>
            <div> <label class="" for="">title_3</label> <br>
                <input id="title_3" type="text" value="{{$SingleData->title_3}}"  placeholder="Input title" name="title_3"
                    class="form-control" /> <br>
                <small class="error-message" style="color:red; " id="error-title_3"></small>

            </div> <br> <br>
            <div> <label class="" for="">title_4</label> <br>
                <input id="title_4" type="text" value="{{$SingleData->title_4}}"  placeholder="Input title" name="title_4"
                    class="form-control" /> <br>
                <small class="error-message" style="color:red; " id="error-title_4"></small>

            </div> <br> <br>

            <div> <label class="" for="id">id</label> <br>
                <input id="id" type="text" readonly value="{{$SingleData->id}}"   name="id"
                    class="form-control" />


            </div> <br> <br>


            <div>


                <label class="" for="description">description_1</label> <br>

                <textarea class="form-control" id="description_1"  name="description_1" style=" height:30vh;">{{$SingleData->description_1}}
      </textarea> <br>
                <small class="error-message" style="color:red; " id="error-description_1"></small>

                <br>

            </div>
            <div>


                <label class="" for="description">description_2</label> <br>

                <textarea class="form-control" id="description_2"  name="description_2" style=" height:30vh;">{{$SingleData->description_2}}
      </textarea> <br>
                <small class="error-message" style="color:red; " id="error-description_2"></small>

                <br>

            </div>

            <button class="btn btn-primary w-100">update</button>



        </form>
    </div>
@endsection

@section('script')
<script src="{{asset('asset/script_file/about_page_js_file/who_we_are_update_section.js')}}"></script>
@endsection
