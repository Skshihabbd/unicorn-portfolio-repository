







@extends('dashboard.dashboard')

@section('dashboard')
    <div style="width: 100%;" class="form-div">
        <form method="POST" action="" enctype="multipart/from-data">
            @method('PUT')
            @csrf

            <div class=""> <label for="username">Image</label> <br>
                <input id="username" type="file" accept="image/*" name="images" class="form-control " />
            </div>
            <br> <br>
            <div class=""> <label class="" for="username">Title</label> <br>
                <input id="username" type="text" value="" name="title" class="form-control" />
            </div> <br> <br>
            <div class=""> <label class="" for="username">Description</label> <br>
                <input id="username" type="text" value="" name="description" class="form-control" />
            </div> <br> <br>


            <button class="btn btn-success" type="submit">update</button>



        </form>
    </div>
@endsection
@section('script')
    <script src="{{ asset('asset/script_file/analysis.js') }}"></script>
@endsection
