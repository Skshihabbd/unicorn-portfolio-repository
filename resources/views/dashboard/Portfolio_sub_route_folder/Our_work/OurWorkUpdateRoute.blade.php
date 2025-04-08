







@extends('dashboard.dashboard')

@section('dashboard')

    <div style="width: 100%;" class="form-div">
        <form id="ourworkupdate" method="POST" action="" enctype="multipart/form-data">
            @csrf

            <div> <label for="username">Image</label> <br>
                <input id="image" type="file"  accept="image/*" placeholder="input image" name="image"
                    class="form-control " /> <br>
                    <small class="error-message" style="color:red; " id="error-image"></small>

            </div>
            <br> <br>
            <div> <label class="" for="heading">Heading</label> <br>
                <input id="heading" type="text" value="{{$OurWorkSingleData->heading}}"  placeholder="Input heading" name="heading"
                    class="form-control" /> <br>
                    <small class="error-message" style="color:red; " id="error-heading"></small>

            </div> <br> <br>
            <div> <label class="" for="">title</label> <br>
                <input id="title" type="text" value="{{$OurWorkSingleData->title}}"  placeholder="Input title" name="title"
                    class="form-control" /> <br>
                    <small class="error-message" style="color:red; " id="error-title"></small>

            </div> <br> <br>

            <div> <label class="" for="">id</label> <br>
                <input id="id" type="text" readonly value="{{$OurWorkSingleData->id}}"   name="id"
                    class="form-control" />


            </div> <br> <br>
            <div> <label class="" for="description">Description</label> <br>


           <textarea  name="description"   class="form-control"   id="" cols="30" rows="10">{{$OurWorkSingleData->description}}</textarea> <br>
           <small class="error-message" style="color:red; " id="error-description"></small>
            </div> <br>



            <div>

                <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
                <script type="text/javascript">
                    bkLib.onDomLoaded(function() {
                        new nicEditor().panelInstance('explaination');


                    });
                </script>
                <label class="" for="">Explaination</label> <br>

                <textarea class="form-control" id="explaination"  name="area" style=" height:30vh;">{{$OurWorkSingleData->explaination}}
          </textarea> <br>
          <small  class="error-message" style="color:red; " id="error-explaination"></small>



            </div>

            <button class="btn btn-primary w-100">update</button>



        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('asset/script_file/portfolio_page_script/ourworkupdate.js') }}"></script>
@endsection
