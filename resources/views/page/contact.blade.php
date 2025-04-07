@extends('page.root')
@section('title', 'contact')
@section('tailwind')
@vite('resources/css/app.css')
@endsection
@section('layout')

<section>
<div>

</div>
</section>
    <section>
        <div class="flex justify-between flex-col md:flex-row items-center w-11/12 mx-auto py-10">
            <div class=" md:w-6/12">
                <img class="" src="{{ asset('asset/contact.jpeg') }}" alt="" srcset="">
            </div>
           <form id="contact" action="" method="POST"    class=" md:w-5/12">
            @csrf
            <div class=" w-full bg-slate-400 p-12 rounded-lg">
                <div class="flex justify-start gap-5">
                    <div class="w-full"><label class="font-bold" for="">EMAIL</label><br>
                        <input id="email" type="email" name="email" placeholder="EMAIL" class=" w-full input input-success" />
                    </div>
                    <div class="w-full"> <label class="font-bold" for="">NAME</label> <br>
                        <input id="username" type="text" placeholder="NAME" name="username" class="input input-success w-full" />
                    </div>
                </div>
                <br>
                <div>
                    <label class="font-bold" for="">PHONE</label>
                    <input id="number" type="text" name="number" placeholder="PHONE" class="input input-success w-full" />
                </div> <br>
                <div>
                    <label class="font-bold" for="">MESSAGE</label> <br>
                    <textarea type="text" id="message" placeholder="MESSAGE" name="message" class="textarea textarea-success w-full"></textarea>

                </div> <br>
                <button class="btn  text-black w-full" type="submit">SEND MESSAGE</button>
            </div>


           </form>
        </div>
    </section>
@endsection
