@extends('dashboard.dashboard')
@section('dashboard')
    <section>
        <div class=" main-div">
            <div class="form-div">
                <form id="ourwork" method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    <div> <label for="username">Image</label> <br>
                        <input id="image" type="file" required accept="image/*" placeholder="input image" name="image"
                            class="form-control " /> <br>
                            <small class="error-message" style="color:red; " id="error-image"></small>

                    </div>
                    <br> <br>
                    <div> <label class="" for="heading">Heading</label> <br>
                        <input id="heading" type="text" required placeholder="Input heading" name="heading"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-heading"></small>

                    </div> <br> <br>
                    <div> <label class="" for="">title</label> <br>
                        <input id="title" type="text" required placeholder="Input title" name="title"
                            class="form-control" /> <br>
                            <small class="error-message" style="color:red; " id="error-title"></small>

                    </div> <br> <br>
                    <div> <label class="" for="description">Description</label> <br>


                   <textarea  name="description"  class="form-control"  required id="" cols="30" rows="10"></textarea> <br>
                   <small class="error-message" style="color:red; " id="error-description"></small>
                    </div> <br>

                    <div>


                        <label class="" for="explaination">Explaination</label> <br>

                        <textarea class="form-control" id="explaination" required name="area" style=" height:30vh;">      Input Explaination
                  </textarea> <br>
                  <small  class="error-message" style="color:red; " id="error-explaination"></small>

                  <br>
                  <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
                  <script type="text/javascript">
                      bkLib.onDomLoaded(function() {
                          new nicEditor().panelInstance('explaination');
                      });
                  </script>
                    </div>


                    <button class="btn btn-primary w-100">submit</button>



                </form>



            </div>


            {{-- dynamic div --}}

            <div class="dynamic-div">
                @foreach ($OurWorkAllDatas as $OurWorkAllData )

                <div style="width: 60% ;margin-left:auto; margin-right:auto" class="card" style="width: 100%;">
                    <img style="width:80%; height:30vh; margin-left: auto; margin-right:auto;" class="card-img-top"
                        src="{{asset($OurWorkAllData->logo)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">{!! $OurWorkAllData->explaination !!}</p>
                    </div>

                    <div class="card-body" style=" display:flex; justify-content:space-between ; font-size:25px;">
                        <a class="btn btn-secondary" style="text-decoration:none;" href="{{route('single_data_our_work',["id"=>$OurWorkAllData->id])}}"
                            class="card-link">Update</a>


                       <form method="POST" action="{{route('single_data_our_work_deletes',['id'=>$OurWorkAllData->id])}}">
                        @csrf
                        @method('DELETE')
                        <button   class="btn btn-primary" type="submit">delete</button>
                       </form>
                    </div>
                </div>

                @endforeach


            </div>





        </div>


    </section>
@endsection

@section('script')
<script src="{{asset("asset/script_file/portfolio_page_script/ourwork.js")}}"></script>
@endsection
