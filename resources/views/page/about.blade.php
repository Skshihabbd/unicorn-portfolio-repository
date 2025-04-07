@extends('page.root')
@section('title', 'about-us page')
@section('tailwind')
    @vite('resources/css/app.css')
@endsection
@section('layout')
    <section>
        <div class=" ">
            <h1 class="md:text-6xl  py-10 w-8/12 mx-auto text-center ">WE’VE BEEN WORKING ALL <br>
                <p class="mt-10">THESE <span class="text-[#4285F4] box">20+</span> YEARS.</p>
            </h1>

            <div class="w-10/12 mx-auto my-20">
                <p class="text-4xl text-center roboto py-2">Our slogan was:</p>
                <p class="box text-4xl text-center">MAKE IT WORK, MAKE IT RIGHT, MAKE IT FAST</p>
                <p class="text-center text-[#9F9F9F] text-xl my-5">UNICORN SOFTWARE & SOLUTIONS LTD. has established itself
                    as one of the most reliable software and IT
                    solutions companies in Bangladesh through its commitment and dedication towards quality, innovation and
                    customer satisfaction. At Unicorn, a group of hard working young talents driven by intelligence, taste
                    and patience transform needs and dreams into reality by their technical knowledge and expertise. We
                    believe that proper utilization of digitalization and information management may change the current
                    world towards positive directions. We have been working towards this goal since the start.</p>
            </div>
        </div>
    </section>
    {{-- who we are about us --}}
    <section>
        <div class="flex items-center w-12/12  ">
            <div class="bg-[#0B4392] h-[90vh] flex-none w-6/12 space-y-6">
                <p class="text-center text-4xl text-white pt-9">WHO WE ARE</p>
                <p class="text-3xl font-bold text-center text-white pb-10">Highly Tailored IT Design, Management & Support
                    Services.</p>

                <hr class="h-[.5px] bg-white ">
                <div class="flex justify-between gap-2 w-11/12 mx-auto pt-10">
                    <div class=" text-white">
                        <p class="text-2xl font-medium pb-2">Our Mission</p>
                        <p>Our mission is to become one of the top most quality companies in the software world by ensuring
                            quality and generating ideas.</p>



                    </div>
                    <div class="text-white">
                        <p class="text-2xl font-medium pb-2">Custom Code</p>
                        <p>Accelerate innovation with world-class tech teams. We help businesses elevate their value.</p>
                    </div>
                </div>


            </div>
            <div class="flex-1">
                <img class="h-[110vh] " src="{{ asset('asset/section image/about-us1.jpeg') }}" alt=""
                    srcset="">
            </div>

        </div>

    </section>

    {{-- project that we complete --}}
    <section>
        <div class="my-28  flex justify-around flex-wrap gap-4 px-6 w-10/12 mx-auto py-16">
            <div
                class="text-center bg-[#F8F9FA]  w-[30%] h-[40vh] flex justify-center items-center border-[1px] transition-transform hover:scale-125  duration-700">
                <div>
                    <p class="text-2xl font-semibold">
                        400+
                    </p>
                    <p class="text-xl pt-3">
                        automation project
                    </p>
                </div>
            </div>
            <div
                class="text-center bg-[#F8F9FA]  w-[30%] h-[40vh] flex justify-center items-center border-[1px] transition-transform hover:scale-125 duration-700">
                <div>
                    <p class="text-2xl font-semibold">
                        1200+
                    </p>
                    <p class="text-xl pt-3">
                        web + app
                    </p>
                </div>
            </div>
            <div
                class="text-center bg-[#F8F9FA]  w-[30%] h-[40vh] flex justify-center items-center border-[1px] transition-transform hover:scale-125 duration-700">
                <div>
                    <p class="text-2xl font-semibold">
                        1700+
                    </p>
                    <p class="text-xl pt-3">
                        complete clint support


                    </p>
                </div>
            </div>
            <div
                class="text-center bg-[#F8F9FA]  w-[30%] h-[40vh] flex justify-center items-center border-[1px] transition-transform hover:scale-125 duration-700">
                <div>
                    <p class="text-2xl font-semibold">
                        1600+
                    </p>
                    <p class="text-xl pt-3">
                        completed project
                    </p>
                </div>
            </div>



        </div>

    </section>
    {{-- ourculture section --}}
    <section>
        <div class="bg-[#0B4392] my-24 py-28">
            <p class="text-3xl text-white font-medium py-4 pl-3">Our Culture</p>
            <p class="text-2xl text-white pl-3 py-4">We are passionate, we are innovative, we are transforming the future of
                technology</p>
            <div class="flex justify-stretch items-center py-10 w-[97%] mx-auto">


                <div class="flex flex-wrap col-span-3 w-[75%]  gap-4">
                    <img class=" w-[40%] h-[40vh] rounded-xl" src="{{ asset('asset/section image/aboutus2.jpeg') }}"
                        alt="" srcset="">
                    <img class=" w-[55%] h-[40vh] rounded-xl" src="{{ asset('asset/section image/about-us1.jpeg') }}"
                        alt="" srcset="">
                    <img class=" w-[50%] h-[40vh] rounded-xl" src="{{ asset('asset/section image/aboutus2.jpeg') }}"
                        alt="" srcset="">
                    <img class=" w-[45%] h-[40vh] rounded-xl" src="{{ asset('asset/section image/about-us1.jpeg') }}"
                        alt="" srcset="">
                </div>
                <div class="w-[25%]  ">
                    <img class=" h-[85vh] rounded-xl col-span-1" src="{{ asset('asset/section image/about-us-4.jpeg') }}"
                        alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    {{-- ourculture section --}}

    {{-- ourpartnar --}}
    <section>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
            <!-- If you want pagination & navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>



    </section>
    {{-- ourpartnar --}}

@endsection
