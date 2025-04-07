@extends('dashboard.dashboard')

@section('dashboard')
    <div style="width: 100%;" class="form-div">
        <form id="ai_section_3_update" method="POST" action="" enctype="multipart/form-data">
            @csrf

            <div> <label for="username">Image</label> <br>
                <input id="image" type="file" required accept="image/*" placeholder="input image" name="image"
                    class="form-control " /> <br>
                <small class="error-message" style="color:red; " id="error-image"></small>

            </div>
            <br> <br>

            <div> <label class="" for="">title</label> <br>
                <input id="title" type="text" value="{{$OurWorkSingleData->title}}" required placeholder="Input title" name="title"
                    class="form-control" /> <br>
                <small class="error-message" style="color:red; " id="error-title"></small>

            </div> <br> <br>

            <div> <label class="" for="id">id</label> <br>
                <input id="id" type="text" readonly value="{{$OurWorkSingleData->id}}"   name="id"
                    class="form-control" />


            </div> <br> <br>


            <div>


                <label class="" for="description">description</label> <br>

                <textarea class="form-control" id="description" required name="description" style=" height:30vh;">{{$OurWorkSingleData->description}}
      </textarea> <br>
                <small class="error-message" style="color:red; " id="error-description"></small>

                <br>
                <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
                <script type="text/javascript">
                    bkLib.onDomLoaded(function() {
                        new nicEditor().panelInstance('description');
                    });
                </script>
            </div>

            <button class="btn btn-primary w-100">update</button>



        </form>
    </div>
@endsection

@section('script')
<script src="{{asset('asset/script_file/servicemain_folder_js_file/service_subfolder_js_file/Ai_folder_js_file/section_3_js_file/section_3ai_update.js')}}"></script>
@endsection
