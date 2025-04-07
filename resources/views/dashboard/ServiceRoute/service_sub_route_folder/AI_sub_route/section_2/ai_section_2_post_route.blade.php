
@extends('dashboard.dashboard')
@section('dashboard')
<section>
    <div class=" main-div">
        <div class="form-div">
            <form id="ai_section_2_post" method="POST" action="" enctype="multipart/form-data">
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


                <div >
                    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
                    <script type="text/javascript">
                        bkLib.onDomLoaded(function() {
                            nicEditors.allTextAreas()
                        });
                    </script>

                    <label class="" for="description">description</label> <br>
                    <textarea id="description" name="area" style="width:100%; height:30vh;">      Input description
              </textarea><br>
              <small class="error-message" style="color:red; " id="error-description"></small>

                </div>


                <button class="btn btn-primary w-100">submit</button>



            </form>



        </div>

        <div class="dynamic-div">

            @foreach ($allDatas as $allData )
            <div style="width: 60% ;margin-left:auto; margin-right:auto" class="card" style="width: 100%;">
              <img style="width:80%; height:30vh; margin-left: auto; margin-right:auto;" class="card-img-top"
                  src="{{asset($allData->image)}}" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">{{$allData->title}}</h5>
                  <p class="card-text">{!!$allData->description!!}</p>
              </div>

              <div class="card-body" style=" display:flex; justify-content:space-between ; font-size:25px;">
                <a class="btn btn-secondary" style="text-decoration:none;" href="{{route('ai_section_2_single_data',['id'=>$allData->id])}}"
                    class="card-link">Update</a>
                <form method="POST" action="{{route('ai_section_2_delete_data',['id'=>$allData->id])}}">
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
<script src="{{asset('asset/script_file/servicemain_folder_js_file/service_subfolder_js_file/Ai_folder_js_file/section_2_js_file/section_2_ai_post.js')}}"></script>
@endsection
