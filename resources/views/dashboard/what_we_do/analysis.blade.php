@extends('dashboard.dashboard')

@section('dashboard')
    <section>
        <div class=" main-div">
            <div class="form-div">
                <form id="analysis_section" method="POST" action="" enctype="multipart/form-data">
                    @csrf

                    <div> <label for="logo">Logo</label> <br>
                        <input id="logo" type="file" accept="image/*" placeholder="input image" name="logo"
                            class="form-control " />
                        {{-- @error('images')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <br> <br>
                    <div> <label  for="title">title</label> <br>
                        <input id="title" type="text" placeholder="Input title" name="title"
                            value="{{ old('title') }}" class="form-control" />
                        {{-- @error('title')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror --}}
                    </div> <br> <br>
                    <div> <label  for="description">Description</label> <br>
                        <input id="description" type="text" placeholder="Input Description" name="description"
                            value="{{ old('description') }}" class="form-control" />

                        {{-- @error('description')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror --}}
                    </div> <br>


                    <button type="submit" class="btn btn-primary w-100">submit analysis</button>



                </form>
{{--
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
                @endif --}}

            </div>

            <div class="dynamic-div">

                @foreach ($analysess as $analyses)

                <div style="width: 60% ;margin-left:auto; margin-right:auto" class="card" style="width: 100%;">
                    <img style="width:80%; height:30vh; margin-left: auto; margin-right:auto;" class="card-img-top"
                        src="{{asset($analyses->logo)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$analyses->title}}</h5>
                        <p class="card-text">{{$analyses->description}}</p>
                    </div>

                    <div class="card-body" style=" display:flex; justify-content:space-between ; font-size:25px;">
                        <a class="btn btn-secondary" style="text-decoration:none;" href="" class="card-link">Update</a>


                        <form method="POST" action="">
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
    <script src="{{ asset('asset/script_file/analysis.js') }}"></script>
@endsection
