@extends('page.root')
@section('title', 'service')
@section('layout')
    {{-- what we do section --}}
    <section class="mb-16">
        <div class="w-10/12 mx-auto">
            <p class="text-6xl text-center py-12 font-bold ">Innovative <span class="text-[#0B4392]">Software</span> Solutions For Growth And Efficiency</p>
        </div>
    </section>
    <section>

        <div class="bg-[#0B4392]">
            <p class="text-white text-6xl w-9/12 text-center mx-auto pt-28">Transforming Your Dream Software Visions Into
                Reality</p>

            <div class="w-2/12 mx-auto py-16">
                <button
                    class="flex items-center  justify-center group text-white border-[2px] border-white py-4 px-10 rounded-full bg-[#119EB6] hover:bg-white hover:text-black hover:border-[#0B4392]">Get
                    In Touch <i
                        class="fa-solid fa-arrow-right text-xl -rotate-45 group-hover:rotate-0 group-hover:pl-1 transition-transform ease-in-out duration-500 "></i></button>
            </div>
            <div class=" w-11/12 mx-auto pt-6 pb-36 flex justify-between gap-10">
                <div class="w-6/12 space-y-6">
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                    <button
                        class="bg-[#119EB6] w-full rounded-2xl py-5 grid grid-cols-3 focus:bg-white focus:text-black"><span
                            class="col-span-1 text-lg font-bold">Web Design</span></button>
                </div>
                <div class=" w-full ">
                    <img class="h-[80vh] rounded-xl w-10/12" src="{{ asset('asset/pexels-souvenirpixels-414612.jpg') }}"
                        alt="" srcset="">

                    <p class="text-5xl text-white my-3">Web Design</p>
                    <p class="text-white text-xl">taking useful information out of your data and putting it in a visual
                        format to help you make better decisions.</p>
                </div>
            </div>
        </div>

    </section>

    {{-- Our software Development Services Process --}}
    <section class="my-16">
        <div>
            <p class="text-6xl w-8/12 mx-auto text-center">Our Software Development Services Process</p>

            <div class="w-11/12  mx-auto py-10  flex flex-wrap justify-between  lg:flex-row gap-y-5 ">
                <div
                    class="w-[31%]  border-[1px] group/div rounded-xl hover:text-white transition duration-1000 hover:bg-[#1295B5]">
                    <div class=" py-4 pl-6">
                        <div class="space-y-2 pb-6">
                            <p class="text-5xl text-[#EAEBED]">01</p>
                            <p class="text-2xl text-[#0B4392] group-hover/div:text-white w-8/12 font-semibold"> Client
                                Requirement Gathering </p>
                            <p class="text-lg"> we Understand the client's business goals, expectations, and requirements.we
                                Understand the client's business goals, expectations, and requirements.</p>
                        </div>
                        <button
                            class="flex items-center  justify-center group text-white border-[1px] border-white py-4 px-10 rounded-full bg-[#119EB6] hover:bg-white hover:text-black hover:border-[#0B4392]">Read
                            More <i
                                class="fa-solid fa-arrow-right text-xl -rotate-45 group-hover:rotate-0 group-hover:pl-1 transition-transform ease-in-out duration-500 "></i></button>
                    </div>
                </div>
                <div
                    class="w-[31%] border-[1px] group/div rounded-xl hover:text-white hover:bg-[#1295B5] transition duration-1000 ">
                    <div class=" py-4 pl-6">
                        <div class="space-y-2 pb-6">
                            <p class="text-5xl text-[#EAEBED]">01</p>
                            <p class="text-2xl text-[#0B4392] group-hover/div:text-white w-8/12 font-semibold"> Client
                                Requirement Gathering </p>
                            <p class="text-lg"> we Understand the client's business goals, expectations, and requirements.we
                                Understand the client's business goals, expectations, and requirements.</p>
                        </div>
                        <button
                            class="flex items-center  justify-center group text-white border-[1px] border-white py-4 px-10 rounded-full bg-[#119EB6] hover:bg-white hover:text-black hover:border-[#0B4392]">Read
                            More <i
                                class="fa-solid fa-arrow-right text-xl -rotate-45 group-hover:rotate-0 group-hover:pl-1 transition-transform ease-in-out duration-500 "></i></button>
                    </div>
                </div>
                <div
                    class="w-[31%] border-[1px] group/div rounded-xl hover:text-white transition duration-1000 hover:bg-[#1295B5]">
                    <div class=" py-4 pl-6">
                        <div class="space-y-2 pb-6">
                            <p class="text-5xl text-[#EAEBED]">01</p>
                            <p class="text-2xl text-[#0B4392] group-hover/div:text-white w-8/12 font-semibold"> Client
                                Requirement Gathering </p>
                            <p class="text-lg"> we Understand the client's business goals, expectations, and requirements.we
                                Understand the client's business goals, expectations, and requirements.</p>
                        </div>
                        <button
                            class="flex items-center  justify-center group text-white border-[1px] border-white py-4 px-10 rounded-full bg-[#119EB6] hover:bg-white hover:text-black hover:border-[#0B4392]">Read
                            More <i
                                class="fa-solid fa-arrow-right text-xl -rotate-45 group-hover:rotate-0 group-hover:pl-1 transition-transform ease-in-out duration-500 "></i></button>
                    </div>
                </div>
                <div
                    class="w-[31%] border-[1px] group/div rounded-xl hover:text-white transition duration-1000 hover:bg-[#1295B5]">
                    <div class=" py-4 pl-6">
                        <div class="space-y-2 pb-6">
                            <p class="text-5xl text-[#EAEBED]">01</p>
                            <p class="text-2xl text-[#0B4392] group-hover/div:text-white w-8/12 font-semibold"> Client
                                Requirement Gathering </p>
                            <p class="text-lg"> we Understand the client's business goals, expectations, and requirements.we
                                Understand the client's business goals, expectations, and requirements.</p>
                        </div>
                        <button
                            class="flex items-center  justify-center group text-white border-[1px] border-white py-4 px-10 rounded-full bg-[#119EB6] hover:bg-white hover:text-black hover:border-[#0B4392]">Read
                            More <i
                                class="fa-solid fa-arrow-right text-xl -rotate-45 group-hover:rotate-0 group-hover:pl-1 transition-transform ease-in-out duration-500 "></i></button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Our Software Development Company Tech-Stack --}}
    <section class="">
        <div class="bg-[#0B4392] pt-24">
            <p class="text-6xl text-center w-10/12 mx-auto text-white pb-10">Our Software Development Company Tech-Stack</p>

            <p class="text-[#FFFFF2] text-xl w-11/12 mx-auto text-center pb-10">We provide you with leading software
                development services, leveraging a reliable and efficient tech stack. Helping you disrupt the market with
                standards-compliant, scalable, and modern software solutions that make you grow.</p>

            <div class="py-16 w-11/12 mx-auto flex justify-between">
                <button class="  text-white border-[1px] border-white py-4 px-20 rounded-full focus:bg-[#1AA7BA] ">Design
                </button>
                <button class="  text-white border-[1px] border-white py-4 px-20 rounded-full focus:bg-[#1AA7BA] ">Fronend
                </button>
                <button class="  text-white border-[1px] border-white py-4 px-20 rounded-full focus:bg-[#1AA7BA] ">Backend
                </button>
                <button class="text-white border-[1px] border-white py-4 px-20 rounded-full focus:bg-[#1AA7BA] ">Database
                </button>
            </div>
            {{-- text-stack-icon --}}
            <div class="py-16">
                <div class="w-9/12 mx-auto flex gap-10 flex-row justify-between flex-wrap  ">
                    <div class="p-8 bg-white w-2/12  rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt="" srcset="">
                        <p>angular js</p>
                    </div>
                    <div class="p-8 bg-white w-2/12 rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt="" srcset="">
                        <p>angular js</p>
                    </div>
                    <div class="p-8 bg-white w-2/12 rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt="" srcset="">
                        <p>angular js</p>
                    </div>
                    <div class="p-8 bg-white w-2/12 rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt="" srcset="">
                        <p>angular js</p>
                    </div>
                    <div class="p-8 bg-white w-2/12 rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt="" srcset="">
                        <p>angular js</p>
                    </div>
                    <div class="p-8 bg-white w-2/12 rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt=""
                            srcset="">
                        <p>angular js</p>
                    </div>
                    <div class="p-8 bg-white w-2/12 rounded-xl flex flex-col justify-center items-center">
                        <img class="w-20" src="{{ asset('asset/logo/angular js.png') }}" alt=""
                            srcset="">
                        <p>angular js</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Industries We Serve --}}
    <section>

        <div class="mt-20 bg-[#F0F0F0] pt-10">
            <p class="text-6xl text-center text-[#686e76]">INDUSTRIES WE SERVE</p>
            <div class="py-20  ">
                <img class="w-11/12 h-[90vh] mx-auto rounded-xl "
                    src="{{ asset('asset/section image/pos-software.jpg') }}" alt="" srcset="">
            </div>
            <div class="w-11/12 mx-auto flex flex-wrap justify-between gap-3 pt-10 pb-24">
                <div
                    class="w-3/12 py-6 pl-3 hover:bg-[#1295B5] hover:text-white border-[1px] border-[#1295B5] transition duration-1000 ease-in-out rounded-3xl">
                    <img class="w-3/12" src="{{ asset('asset/logo/svg.png') }}" alt="" srcset="">
                    <p class="text-xl font-semibold  ">Health-Care And Hospitality </p>
                </div>
                <div
                    class="w-3/12 py-6 pl-3 hover:bg-[#1295B5] hover:text-white border-[1px] border-[#1295B5] transition duration-1000 ease-in-out rounded-3xl">
                    <img class="w-3/12" src="{{ asset('asset/logo/svg.png') }}" alt="" srcset="">
                    <p class="text-xl font-semibold  ">Health-Care And Hospitality </p>
                </div>
                <div
                    class="w-3/12 py-6 pl-3 hover:bg-[#1295B5] hover:text-white border-[1px] border-[#1295B5] transition duration-1000 ease-in-out rounded-3xl">
                    <img class="w-3/12" src="{{ asset('asset/logo/svg.png') }}" alt="" srcset="">
                    <p class="text-xl font-semibold  ">Health-Care And Hospitality </p>
                </div>
                <div
                    class="w-3/12 py-6 pl-3 hover:bg-[#1295B5] hover:text-white border-[1px] border-[#1295B5] transition duration-1000 ease-in-out rounded-3xl">
                    <img class="w-3/12" src="{{ asset('asset/logo/svg.png') }}" alt="" srcset="">
                    <p class="text-xl font-semibold  ">Health-Care And Hospitality </p>
                </div>
                <div
                    class="w-3/12 py-6 pl-3 hover:bg-[#1295B5] hover:text-white border-[1px] border-[#1295B5] transition duration-1000 ease-in-out rounded-3xl">
                    <img class="w-3/12" src="{{ asset('asset/logo/svg.png') }}" alt="" srcset="">
                    <p class="text-xl font-semibold  ">Health-Care And Hospitality </p>
                </div>
                <div
                    class="w-3/12 py-6 pl-3 hover:bg-[#1295B5] hover:text-white border-[1px] border-[#1295B5] transition duration-1000 ease-in-out rounded-3xl">
                    <img class="w-3/12" src="{{ asset('asset/logo/svg.png') }}" alt="" srcset="">
                    <p class="text-xl font-semibold  ">Health-Care And Hospitality </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Let Us Help You Disrupt The Market With Industry-Leading Technological Solutions --}}
    <section>
        <div class="bg-[#119EB6]  ">
            <p class="text-6xl w-10/12 mx-auto text-center py-16">Let Us Help You Disrupt The Market With <span
                    class="text-white">Industry-Leading</span> Technological Solutions</p>

            <div class="flex justify-center items-center  pb-20">
                <button
                    class="  text-white border-[1px] border-white py-4 px-20 rounded-full focus:bg-white focus:text-black text-xl "><i
                        class="fa-solid fa-arrow-up-right-from-square text-2xl mr-6"></i>Build Your Dream Software Now!
                </button>
            </div>
        </div>
    </section>
    {{-- list of our service  --}}
    <section>

        <div class="my-20">
            <p class="text-5xl font text-center py-16">LIST OF OUR SERVICE</p>
            <div class="w-10/12 mx-auto">

                <div>
                    <div class="space-y-3 ">

                        <details class="collapse collapse-arrow bg-base-100 border-base-300 border">
                            <summary class="collapse-title font-semibold">NETWORK SERVICES</summary>
                            <div class="collapse-content text-xl roboto">
                                In today’s digital era, a strong and secure network is the backbone of any business.we
                                specialize in providing cutting-edge Network Services to ensure seamless connectivity,
                                robust security, and efficient data management. Whether you are a startup or an established
                                enterprise, our tailored network solutions help you stay connected, productive, and secure.
                            </div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-100 border-base-300 border">
                            <summary class="collapse-title font-semibold">NETWORK SERVICES</summary>
                            <div class="collapse-content text-xl roboto">
                                In today’s digital era, a strong and secure network is the backbone of any business.we
                                specialize in providing cutting-edge Network Services to ensure seamless connectivity,
                                robust security, and efficient data management. Whether you are a startup or an established
                                enterprise, our tailored network solutions help you stay connected, productive, and secure.
                            </div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-100 border-base-300 border">
                            <summary class="collapse-title font-semibold">NETWORK SERVICES</summary>
                            <div class="collapse-content text-xl roboto">
                                In today’s digital era, a strong and secure network is the backbone of any business.we
                                specialize in providing cutting-edge Network Services to ensure seamless connectivity,
                                robust security, and efficient data management. Whether you are a startup or an established
                                enterprise, our tailored network solutions help you stay connected, productive, and secure.
                            </div>
                        </details>
                        <details class="collapse collapse-arrow bg-base-100 border-base-300 border">
                            <summary class="collapse-title font-semibold">NETWORK SERVICES</summary>
                            <div class="collapse-content text-xl roboto">
                                In today’s digital era, a strong and secure network is the backbone of any business.we
                                specialize in providing cutting-edge Network Services to ensure seamless connectivity,
                                robust security, and efficient data management. Whether you are a startup or an established
                                enterprise, our tailored network solutions help you stay connected, productive, and secure.
                            </div>
                        </details>


                    </div>
                </div>
            </div>
        </div>


    </section>




@endsection
