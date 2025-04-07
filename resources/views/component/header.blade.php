@vite('resources/css/app.css')
{{-- This is the header part with navbar for large device --}}

<div class="z-10  sticky top-0 drop-shadow-sm border-b-[1px]  bg-white ">
    <div class="hidden lg:grid  grid-cols-3  w-11/12 mx-auto">
        <div class=" col-span-1 flex   items-center">
            <ul>
                <li>
                    <a class="bg-gradient-to-r from-green-600 to-yellow-500 text-transparent oswald bg-clip-text"
                        href="{{ route('home') }}"><img class="w-48 2xl:w-64"
                            src="{{ asset('asset/unicorn-removebg-preview.png') }}" alt="" srcset=""></a>
                </li>
            </ul>
        </div>

        <div class=" col-span-2 flex items-center ">
            <ul class="grid grid-cols-6 w-full text-lg">
                {{-- <li
                    class=" flex items-center justify-center py-5 transition-all duration-500 ease-in-out bg-transparent  hover:bg-[#F8F9FA] hover:text-black">
                    <a class=" font-medium " href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li> --}}
                <li
                    class=" flex items-center justify-center py-5 transition-all duration-500 ease-in-out bg-transparent  hover:bg-[#F8F9FA] hover:text-black">
                    <a class=" font-medium " href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li
                    class="flex items-center justify-center py-5 transition-all duration-500 ease-in-out bg-transparent hover:bg-[#F8F9FA] hover:text-black">
                    <a class="font-medium" href="{{ route('about') }}">
                        About Us
                    </a>
                </li>

                <li id="service"
                    class="relative group flex items-center justify-center py-5 transition-all duration-500 ease-in-out bg-transparent hover:bg-[#F8F9FA] hover:text-black">
                    <a class=" font-medium relative " href="{{ route('service') }}">
                        Service <span><img class="w-6 inline group-hover:rotate-90 transition-transform duration-500 "
                                src="{{ asset('asset/logo/next.png') }}" alt="" srcset="">

                        </span>

                        <ul id="serviceul"
                            class=" overflow-hidden  group-hover:h-96 rounded-xl  h-0  z-20 absolute top-16  text-base bg-[#F8F9FA] w-96 text-center transition-[height] duration-1000 ease-in-out grid grid-cols-1">

                            <a href="{{ route('network') }}"
                                class="relative col-start-1  py-4 px-4 text-black transition-all duration-500 ease-in-out
                       hover:text-white overflow-hidden
                       before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                       hover:before:w-full before:transition-all before:duration-1000">
                                NETWORK SERVICES
                            </a>

                            <a href="{{ route('testing') }}"
                                class="relative py-4 px-4 text-black transition-all duration-500 ease-in-out
                       hover:text-white overflow-hidden
                       before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                       hover:before:w-full before:transition-all before:duration-1000">
                                TESTING SERVICES
                            </a>
                            <a href="{{ route('buisness') }}"
                                class="relative py-4 px-4 text-black transition-all duration-500 ease-in-out
                   hover:text-white overflow-hidden
                   before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                   hover:before:w-full before:transition-all before:duration-1000">
                                BUSINESS EXCELLENCE
                            </a>

                            <a href="{{ route('integrated') }}"
                                class="relative py-4 px-4 text-black transition-all duration-500 ease-in-out
                   hover:text-white overflow-hidden
                   before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                   hover:before:w-full before:transition-all before:duration-1000">
                                INTEGRATED ENGINEERING
                            </a>
                            <a href="{{ route('intelligence') }}"
                                class="relative py-4 px-4 text-black transition-all duration-500 ease-in-out
                       hover:text-white overflow-hidden
                       before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                       hover:before:w-full before:transition-all before:duration-1000">
                                INTELLIGENT AUTOMATION
                            </a>

                            <a href="{{ route('ai') }}"
                                class="relative py-4 px-4 text-black transition-all duration-500 ease-in-out
                       hover:text-white overflow-hidden
                       before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                       hover:before:w-full before:transition-all before:duration-1000">
                                ARTIFICIAL INTELLIGENCE
                            </a>
                            <a href="{{ route('security') }}"
                                class="relative  py-4 px-4 text-black transition-all duration-500 ease-in-out
                       hover:text-white overflow-hidden
                       before:absolute before:inset-0 before:bg-[#14A2B7] before:w-0 before:z-[-1]
                       hover:before:w-full before:transition-all before:duration-1000">
                                CYBER SECURITY
                            </a>

                        </ul>


                    </a>

                </li>



                <li
                    class="flex items-center justify-center py-5px-8 transition-all duration-500 ease-in-out bg-transparent hover:bg-[#F8F9FA] hover:text-black">
                    <a class="font-medium" href="{{ route('portfolio') }}">
                        Portfolio
                    </a>
                </li>

                <li
                    class="flex items-center justify-center py-5 px-8 transition-all duration-700 ease-in-out bg-transparent hover:bg-[#F8F9FA] hover:text-black">
                    <a class="font-medium" href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

{{-- This is the header part with navbar for small device and medium device --}}
<div class=" lg:hidden flex justify-around py-4 z-40  sticky top-0 drop-shadow-lg  bg-white ">
    <div>
        <img class="w-48" src="{{ asset('asset/unicorn-removebg-preview.png') }}" alt="" srcset="">
    </div>
    <div class=" w-7 h-7">
        <button onclick="burgerMenu()" id="burger" class=""><i
                class="  fa-solid fa-bars text-2xl "></i></button>
        <button class="hidden " onclick="crossMenu()" id="cross"><img class="w-5"
                src="{{ asset('asset/logo/close.png') }}" alt="" srcset=""></button>
    </div>
</div>
<div id="menudiv"
    class="bg-[#1591B4]  h-svh fixed transition-transform duration-1000 ease-in-out -translate-x-full lg:hidden z-30  w-7/12 flex justify-center  items-center">
    <div class=" h-[50vh] w-6/12 ">
        <ul class=" flex flex-col justify-between  h-full text-lg text-[#030712] ">
            <li class="flex justify-between items-center "> <a class=" font-medium" href="{{ route('home') }}">
                    Home
                </a></li>
            <li> <a class="font-medium" href="{{ route('about') }}">
                    About Us
                </a></li>
            <li> <a class="font-medium" href="{{ route('service') }}">
                    Service
                </a>

            </li>
            <li> <a class="font-medium" href="{{ route('portfolio') }}">
                    Portfolio
                </a></li>
            <li> <a class="font-medium" href="{{ route('contact') }}">
                    Contact
                </a></li>

        </ul>
    </div>

</div>



<!-- Tailwind CSS Styling -->
