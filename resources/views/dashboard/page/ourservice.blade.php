@extends('dashboard.dashboard')

@section('dashboard')
    <section>
        <div class=" main-div">
            <div class="form-div">
                <form id="ourservice" method="POST" action="{{ route('storeourservice') }}" enctype="multipart/form-data">
                    @csrf

                    <div> <label for="username">Image</label> <br>
                        <input id="image" type="file" accept="image/*" placeholder="input image" name="images"
                            class="form-control " />
                        @error('images')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <br> <br>
                    <div> <label class="" for="">title</label> <br>
                        <input id="title" type="text" placeholder="Input title" name="title"
                            value="{{ old('title') }}" class="form-control" />
                        @error('title')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div> <br> <br>
                    <div> <label class="" for="">Description</label> <br>
                        <input id="description" type="text" placeholder="Input Description" name="description"
                            value="{{ old('description') }}" class="form-control" />

                        @error('description')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div> <br>


                    <button class="btn btn-primary w-100">submit</button>



                </form>

                @if (session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: '{{ session('success') }}',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    </script>
                @endif

            </div>

            <div class="dynamic-div">

                @foreach ($OurServiceAllDatas as $OurServiceAllData)
                    <div style="width: 60% ;margin-left:auto; margin-right:auto" class="card" style="width: 100%;">
                        <img style="width:80%; height:30vh; margin-left: auto; margin-right:auto;" class="card-img-top"
                            src="{{ asset($OurServiceAllData->images) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $OurServiceAllData->title }}</h5>
                            <p class="card-text">{{ $OurServiceAllData->description }}</p>
                        </div>

                        <div class="card-body" style=" display:flex; justify-content:space-between ; font-size:25px;">
                            <a class="btn btn-secondary" style="text-decoration:none;" href="{{route('ourserviceupdatesinglevalue',['id'=>$OurServiceAllData->id])}}" class="card-link">Update</a>


                            <form method="POST" action="{{ route('ourservicedeletesingle', ['id' => $OurServiceAllData->id]) }}">
                                @method('DELETE')
                                @csrf


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
    <script src="{{ asset('asset/script_file/ourservice.js') }}"></script>
@endsection
