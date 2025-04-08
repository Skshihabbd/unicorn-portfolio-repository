@extends('dashboard.dashboard')

@section('dashboard')
    <div style="width: 100%;" class="form-div">
        <form id="home_how_we_work_update" method="POST" action="" enctype="multipart/form-data">
            @csrf

            <div> <label for="username">Image</label> <br>
                <input id="image" type="file" accept="image/*" placeholder="input image" name="image"
                    class="form-control " /> <br>
                <small class="error-message" style="color:red; " id="error-image"></small>

            </div>
            <br> <br>

            <div> <label class="" for="">title</label> <br>
                <input id="title" type="text" value="{{$SingleData->title}}" required placeholder="Input title" name="title"
                    class="form-control" /> <br>
                <small class="error-message" style="color:red; " id="error-title"></small>

            </div> <br> <br>

            <div> <label class="" for="id">id</label> <br>
                <input id="id" type="text" readonly value="{{$SingleData->id}}"   name="id"
                    class="form-control" />


            </div> <br> <br>


            <div>


                <label class="" for="description">description</label> <br>

                <textarea class="form-control" id="description" required name="description" style=" height:30vh;">{{$SingleData->description}}
      </textarea> <br>
                <small class="error-message" style="color:red; " id="error-description"></small>

                <br>

            </div>

            <button class="btn btn-primary w-100">update</button>



        </form>
    </div>
@endsection

@section('script')
<script src="{{asset('asset/script_file/Home-section-js-file/how_we_work_section/Home_section_how_we_work_update.js')}}"></script>
@endsection
