@extends('page.root')
@section('title', 'portfolio')
@section('layout')
    @php
        use Illuminate\Support\Str;
    @endphp
    <section>
        <div>

            <div class="w-11/12 mx-auto ">
                <p
                    class="animate__animated animate__fadeInLeft text-2xl md:text-5xl 2xl:text-7xl text-center py-20 text-transparent bg-clip-text bg-gradient-to-r from-[#39989a] via-[#7f8121] to-[#26085b] box">
                    WE CREATE DYNAMIC, INTERACTIVE AND USER-FRIENDLY SOLUTIONS FOR OUR GLOBAL CLIENTELE</p>

            </div>

            <div class="py-12 ">
                <p
                    class="animate__animated animate__fadeInLeft text-6xl text-center roboto text-transparent bg-clip-text bg-gradient-to-r from-[#72e497f5] to-[#9c531cf5]">
                    OUR WORK
                </p>

            </div>
            {{-- card section --}}
            <div class="w-11/12 mx-auto space-y-12">


                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-white"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-white"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-[#0a53b9]"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-white"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-white"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-white"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="rounded-lg  bg-[#F0F0F0]">
                    <div class="flex items-center py-3 mb-2 justify-center   border-2  shadow-lg border-white/20">
                        <p class="md:text-5xl ">UEIMS:</p>
                        <p class="md:text-3xl">UNICORN EDUCATIONAL INSTITUTE MANAGEMENT SYSTEM</p>
                    </div>
                    <div class="flex justify-center items-center flex-col md:flex-row w-11/12 mx-auto gap-2 py-8">
                        <div>
                            <img class="w-60" src="{{ asset('asset/logo/ueims-logo.png') }}" alt=""
                                srcset="">
                        </div>
                        <div>
                            <p class=" text-2xl roboto">
                                {{ Str::limit('Unicorn Education Management System is a comprehensive educational software solution, streamlining administrative tasks, enhancing communication, and improving learning outcomes. With user-friendly interfaces and robust features, it empowers educators, students, and parents for a more efficient educational experience.', 307, '...') }}
                                <span class="font-bold hover:text-white"><a href="">READ MORE</a></span></p>
                        </div>
                    </div>
                </div>

            </div>
            {{-- card section --}}

            <section>
                <div class=" ">
                    <p class="md:text-6xl text-center mt-32 font shadow-[0px_4px_10px_rgba(255,0,0,0.7) "> POPULAR TOOLS
                        THAT
                        WE USE</p>
                    <hr class="h-[1px] bg-black  my-5 w-11/12 mx-auto">

                    <div class=" w-11/12 mx-auto">
                        <div class="  lg:w-9/12 mx-auto flex flex-col md:flex-row md:flex-wrap justify-evenly gap-3 ">
                            {{-- card tools we use --}}
                            <div
                                class="bg-[#F0F0F0]  md:bg-[#F0F0F0] md:w-3/12    border-2 rounded-lg md:hover:shadow-lg  border-white/20 transition-shadow duration-500 ">
                                <div class=" space-y-7 px-3 py-3">


                                    <img class="w-20" src="{{ asset('asset/logo/bootstrap.png') }}" alt="bootstrap"
                                        srcset="">
                                    <p class="font-bold ">BOOTSTRAP V5.2.3</p>
                                    <p>Powered by Bootstrap most latest version v5.2.3</p>
                                </div>

                            </div>
                            <div
                                class="bg-[#F0F0F0]  md:bg-[#F0F0F0] md:w-3/12    border-2 rounded-lg md:hover:shadow-lg  border-white/20 transition-shadow duration-500 ">
                                <div class=" space-y-7 px-3 py-3">


                                    <img class="w-20" src="{{ asset('asset/logo/bootstrap.png') }}" alt="bootstrap"
                                        srcset="">
                                    <p class="font-bold ">BOOTSTRAP V5.2.3</p>
                                    <p>Powered by Bootstrap most latest version v5.2.3</p>
                                </div>

                            </div>
                            <div
                                class="bg-[#F0F0F0]  md:bg-[#F0F0F0] md:w-3/12    border-2 rounded-lg md:hover:shadow-lg  border-white/20 transition-shadow duration-500 ">
                                <div class=" space-y-7 px-3 py-3">


                                    <img class="w-20" src="{{ asset('asset/logo/bootstrap.png') }}" alt="bootstrap"
                                        srcset="">
                                    <p class="font-bold ">BOOTSTRAP V5.2.3</p>
                                    <p>Powered by Bootstrap most latest version v5.2.3</p>
                                </div>

                            </div>
                            <div
                                class="bg-[#F0F0F0]  md:bg-[#F0F0F0] md:w-3/12    border-2 rounded-lg md:hover:shadow-lg  border-white/20 transition-shadow duration-500 ">
                                <div class=" space-y-7 px-3 py-3">


                                    <img class="w-20" src="{{ asset('asset/logo/bootstrap.png') }}" alt="bootstrap"
                                        srcset="">
                                    <p class="font-bold ">BOOTSTRAP V5.2.3</p>
                                    <p>Powered by Bootstrap most latest version v5.2.3</p>
                                </div>

                            </div>
                            <div
                                class="bg-[#F0F0F0]  md:bg-[#F0F0F0] md:w-3/12    border-2 rounded-lg md:hover:shadow-lg  border-white/20 transition-shadow duration-500 ">
                                <div class=" space-y-7 px-3 py-3">


                                    <img class="w-20" src="{{ asset('asset/logo/bootstrap.png') }}" alt="bootstrap"
                                        srcset="">
                                    <p class="font-bold ">BOOTSTRAP V5.2.3</p>
                                    <p>Powered by Bootstrap most latest version v5.2.3</p>
                                </div>

                            </div>
                            <div
                                class="bg-[#F0F0F0]  md:bg-[#F0F0F0] md:w-3/12    border-2 rounded-lg md:hover:shadow-lg  border-white/20 transition-shadow duration-500 ">
                                <div class=" space-y-7 px-3 py-3">


                                    <img class="w-20" src="{{ asset('asset/logo/bootstrap.png') }}" alt="bootstrap"
                                        srcset="">
                                    <p class="font-bold ">BOOTSTRAP V5.2.3</p>
                                    <p>Powered by Bootstrap most latest version v5.2.3</p>
                                </div>

                            </div>



                            {{-- card tools we use --}}
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </section>

@endsection
