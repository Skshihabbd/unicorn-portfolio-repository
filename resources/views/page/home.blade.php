@extends('page.root')
@section('title', 'home page')

@section('layout')
@section('tailwind')
@vite('resources/css/app.css')
@endsection
@php
use Illuminate\Support\Str;
@endphp

    <section class=" ">
        {{-- banner section --}}
        <section>
            <div class=" grid grid-cols-1 lg:grid-cols-2 mt-16 w-10/12 mx-auto">
                <div class=" lg:col-span-1 ">
                    <p class="text-3xl roboto  text-gray-500 text-center lg:text-start">Welcome to Unicorn Software and
                        Solution</p>
                    <h1 class="text-3xl md:text-5xl mt-6 2xl:mt-10 text-center lg:text-start text-black">
                        Build your software from us to manage Business
                    </h1>

                    <p class="text-xl  mt-16 2xl:mt-24 text-center lg:text-start text-gray-500">Affixed pretend account ten
                        natural. Need eat week even
                        yet that. Incommode delighted he resolving sportsmen do in listening.</p>
                </div>

                <div class="hidden lg:grid lg:col-span-1 ">
                    <img class=" rounded-lg lg:w-10/12 lg:ml-auto  2xl:w-9/12 2xl:ml-auto "
                        src="{{ asset('asset/home-1.jpeg') }}" alt="software company" srcset="">
                </div>
            </div>
        </section>
        {{-- our working details section --}}
        <section>
            <div class="mt-24 bg-[#F8F9FA] ">
                <div>
                    <h1 class="text-5xl pt-6  font text-center">What We Do</h1>
                    <p class="font text-gray-500 pt-8  text-center text-5xl">We analysis & monitoring <br>
                        your application</p>
                </div>
                <div class="py-16">

                    <div class="w-11/12 mx-auto ">
                        <div class="flex flex-wrap  justify-evenly gap-12 2xl:gap-20 ">


                            <div data-aos="zoom-in" data-aos-duration="1500"
                                class=" lg:w-4/12  rounded-xl shadow-xl space-y-9 ">
                                <div class=" w-11/12 mx-auto">
                                    <div class="grid grid-cols-3">
                                        <p>logo</p>
                                        <h1>CUSTOMIZED SOFTWARE</h1>
                                    </div>
                                    <div class="py-5">
                                        <p>{{Str::limit('A card component has a figure, a body part, and inside body there are title and
                                            actions parts.A card component has a figure, a body part,and inside body there are title and
                                            actions parts A card component has a figure, a body part, and inside body there are title and
                                            actions parts,',100,'....')}}</p>
                                    </div>

                                    <div class="flex justify-end pb-5">
                                        <button>
                                            <i class="fa-solid fa-arrow-up-right-from-square 2xl:text-3xl"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in" data-aos-duration="1500"
                                class=" lg:w-4/12  rounded-xl shadow-xl space-y-9 ">
                                <div class=" w-11/12 mx-auto">
                                    <div class="grid grid-cols-3">
                                        <p>logo</p>
                                        <h1>CUSTOMIZED SOFTWARE</h1>
                                    </div>
                                    <div class="py-5">
                                        <p>{{Str::limit('A card component has a figure, a body part, and inside body there are title and
                                            actions parts.A card component has a figure, a body part,and inside body there are title and
                                            actions parts A card component has a figure, a body part, and inside body there are title and
                                            actions parts,',100,'....')}}</p>
                                    </div>

                                    <div class="flex justify-end pb-5">
                                        <i class="fa-solid fa-arrow-up-right-from-square 2xl:text-3xl"></i>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in" data-aos-duration="1500"
                                class=" lg:w-4/12  rounded-xl shadow-xl space-y-9 ">
                                <div class=" w-11/12 mx-auto">
                                    <div class="grid grid-cols-3">
                                        <p>logo</p>
                                        <h1>CUSTOMIZED SOFTWARE</h1>
                                    </div>
                                    <div class="py-5">
                                        <p>{{Str::limit('A card component has a figure, a body part, and inside body there are title and
                                            actions parts.A card component has a figure, a body part,and inside body there are title and
                                            actions parts A card component has a figure, a body part, and inside body there are title and
                                            actions parts,',100,'....')}}</p>
                                    </div>

                                    <div class="flex justify-end pb-5">
                                        <a class="hover:shadow-xl" href="{{ route('dynamic', ['id' => 1]) }}"> <i
                                            class="fa-solid fa-arrow-up-right-from-square 2xl:text-3xl"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in" data-aos-duration="1500"
                                class=" lg:w-4/12  rounded-xl shadow-xl space-y-9 ">
                                <div class=" w-11/12 mx-auto">
                                    <div class="grid grid-cols-3">
                                        <p>logo</p>
                                        <h1>CUSTOMIZED SOFTWARE</h1>
                                    </div>
                                    <div class="py-5">
                                        <p>{{Str::limit('A card component has a figure, a body part, and inside body there are title and
                                            actions parts.A card component has a figure, a body part,and inside body there are title and
                                            actions parts A card component has a figure, a body part, and inside body there are title and
                                            actions parts,',200,'....')}}</p>
                                    </div>

                                    <div class="flex justify-end pb-5">
                                        <i class="fa-solid fa-arrow-up-right-from-square 2xl:text-3xl"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

        </section>
        {{-- We’ve been working all
        these 20+ years. --}}
        <section>
            <div class="mt-16 w-11/12 mx-auto">
                <p class="text-center text-3xl 2xl:text-7xl ">Our vision and Mission</p>
                <hr class="h-[2px] my-3 bg-black">
                <div class="grid grid-cols-2 ">
                    <div class="col-span-1"><span class="text-black text-2xl">UNICORN SOFTWARE & SOLUTIONS LTD.</span>
                        <p class="text-lg">has established itself as one of the most
                            reliable software and
                            IT solutions companies in Bangladesh through its commitment and dedication towards quality,
                            innovation and customer satisfaction. At Unicorn, a group of hard working young talents driven
                            by
                            intelligence, taste and patience transform needs and dreams into reality by their technical
                            knowledge and expertise. We believe that proper utilization of digitalization and information
                            management may change the current world towards positive directions. We have been working
                            towards
                            this goal since the start.</p>
                    </div>
                    <div class="col-span-1 content-center text-center">
                        <p class="text-3xl"> We’ve been working all
                            these 20+ years.</p>

                    </div>
                </div>

            </div>
        </section>

        {{-- what our service --}}

        <section>
            <div class="mt-20 bg-[#F8F9FA] pt-10 pb-16">
                <div class="">
                    <div class="my-12">
                        <p class="text-center text-2xl">WHAT OUR SERVICE</p>
                        <p class="text-center text-3xl pt-5">A FEW THINGS WE’RE GREAT AT</p>
                    </div>
                    <div class="flex flex-col lg:flex-row lg:flex-wrap justify-between w-11/12 mx-auto gap-5">
                        <div data-aos="zoom-in" data-aos-duration="1500"
                            class="w-[45%]    backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                            <div class="w-10/12 mx-auto ">
                                <div class="flex justify-stretch">
                                    <img class="w-24" src="{{ asset('asset/logo/code.png') }}" alt=""
                                        srcset="">
                                    <p class="text-center lg:text-[2.25rem]">WEB DEVELOPMENT</p>
                                </div>
                                <p class="text-lg  py-8">No matter the size or complexity of your business challenge, our
                                    experts are here to help with bespoke web-based software solutions, such as web portals,
                                    web applications, SaaS solutions, and other web-based digital properties that drive
                                    mission-critical processes.</p>
                            </div>
                        </div>

                        <div data-aos="zoom-in" data-aos-duration="1500"
                            class="w-[45%]  flex justify-center items-center backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                            <div class="w-10/12 mx-auto">
                                <div class="flex justify-stretch">
                                    <img class="w-24" src="{{ asset('asset/logo/app.png') }}" alt=""
                                        srcset="">
                                    <p class="text-center text-[6vh]">APP DEVELOPMENT</p>
                                </div>
                                <p class="text-lg py-8">We are a software development company located in New York, USA with
                                    12+ years of experience in designing and building best-in-class applications and
                                    transformative solutions for global brands. We provide smooth user experiences across
                                    all the latest platforms and devices.</p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500"
                            class="w-[45%]  flex justify-center items-center backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                            <div class="w-10/12 mx-auto">
                                <div class="flex justify-stretch">
                                    <img class="w-24" src="{{ asset('asset/logo/ui.png') }}" alt=""
                                        srcset="">
                                    <p class="text-center text-[6vh]">WEB DESIGN</p>
                                </div>
                                <p class="text-lg py-8 ">We are a software development company located in New York, USA with
                                    12+ years of experience in designing and building best-in-class applications and
                                    transformative solutions for global brands. We provide smooth user experiences across
                                    all the latest platforms and devices.</p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500"
                            class="w-[45%]  flex justify-center items-center backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                            <div class="w-10/12 mx-auto">
                                <div class="flex justify-stretch ">
                                    <img class="w-24" src="{{ asset('asset/logo/wifi.png') }}" alt=""
                                        srcset="">
                                    <p class="text-center text-[6vh]">NETWORK SERVICE</p>
                                </div>
                                <p class="text-lg py-8">we offers hosting & web development solutions for any business with
                                    high availability and consistency. We make registering, hosting, and managing domains
                                    for yourself or others easy and affordable, because the internet needs people.</p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500"
                            class="w-[45%]  flex justify-center items-center backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                            <div class="w-10/12 mx-auto">
                                <div class="flex justify-stretch">
                                    <img class="w-24" src="{{ asset('asset/logo/database.png') }}" alt=""
                                        srcset="">
                                    <p class="text-center text-[6vh]">DATABASE SERVICE</p>
                                </div>
                                <p class="text-lg  py-8">A database service provider ensures secure storage, backup, and
                                    scalability. They enhance security via encryption, access controls, and GDPR/HIPAA
                                    compliance. With high uptime, optimized performance, analytics support, flexible
                                    pricing, and expert maintenance, they streamline data management.

                                </p>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500"
                            class="w-[45%]  flex justify-center items-center backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                            <div class="w-10/12 mx-auto">
                                <div class="flex justify-stretch">
                                    <img class="w-24" src="{{ asset('asset/logo/chip.png') }}" alt=""
                                        srcset="">
                                    <p class="text-center text-[6vh]">ARTIFICIAL INTELLIGENT</p>
                                </div>
                                <p class="text-lg    py-8">AI service providers offer AI solutions, helping businesses use
                                    chatbots, image recognition, and analytics. Their expertise streamlines operations,
                                    improves customer interactions, and extracts insights. They drive innovation,
                                    competitiveness, and digital growth in today’s AI-powered world.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- why choose us --}}
        <section>
            <div class="my-16">
                <p class="text-center  text-5xl py-2 ">WHY CHOOSE US</p>
                <hr class="h-[1px] bg-black">
                <p class="text-center text-4xl pt-6 pb-6">A FEW THINGS WE’RE GREAT AT</p>

                <div class="w-11/12 mx-auto py-10 bg-[#F0F0F0]">
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="w-9/12 mx-auto my-10  backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                        <p class="text-center text-3xl">All You Need - In One Place</p>
                        <div class="flex gap-10 justify-between items-center">
                            <img class="w-28" src="{{ asset('asset/logo/like.png') }}" alt="" srcset="">
                            <p class="">We offer the end solutions that our customers demand. There is no finger
                                pointing when it goes wrong. Our business values ensure that we offer the best solutions to
                                all our clients regardless of size. We own and deliver the complete end-to-end solution.</p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="w-9/12 mx-auto my-10  backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                        <p class="text-center text-3xl">We Care About You</p>
                        <div class="flex gap-10 justify-between items-center">
                            <img class="w-28" src="{{ asset('asset/logo/heart.png') }}" alt="" srcset="">
                            <p class="">In today’s pacing industry,the rate of change has never been faster, it is
                                our ability to adapt that allows us to offer more competitive and innovative solutions,
                                whatever the demands are. Our teams act dynamically for enterprise as well as SME customers.
                                It is our flexibility that makes us stand above our competition.</p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="w-9/12 mx-auto my-10  backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                        <p class="text-center text-3xl">We Understand Technology</p>
                        <div class="flex gap-10 justify-between items-center">
                            <img class="w-28" src="{{ asset('asset/logo/idea.png') }}" alt="" srcset="">
                            <p class="">We live and breathe solving issues. It is these issues that prove our value
                                to clients and it is the fact that we truly understand the industry today and how it
                                changes. Our experienced teams allow us to get deeply engaged to help our clients map a path
                                to success.</p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="w-9/12 mx-auto my-10  backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                        <p class="text-center text-3xl">We Are Global</p>
                        <div class="flex gap-10 justify-between items-center">
                            <img class="w-28" src="{{ asset('asset/logo/global.png') }}" alt=""
                                srcset="">
                            <p class="">We have an international presence with office based in London, Dubai, India
                                and Manila. Our network of partners throughout Europe ensures we can deliver
                                internationally.</p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="w-9/12 mx-auto my-10  backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                        <p class="text-center text-3xl">We Lead</p>
                        <div class="flex gap-10 justify-between items-center">
                            <img class="w-28" src="{{ asset('asset/logo/trophy.png') }}" alt=""
                                srcset="">
                            <p class="">Since our inception over 30 years ago, we have seen changes in our industry
                                that have revolutionised the way we work and interact with each other. As an agile
                                flexibility organisation, we have always been above the curve, growing continuously
                                throughout.</p>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500"
                        class="w-9/12 mx-auto my-10  backdrop-blur-md border-2 rounded-lg shadow-lg border-white/20">
                        <p class="text-center text-3xl">We Are Innovators</p>
                        <div class="flex gap-10 justify-between items-center">
                            <img class="w-28" src="{{ asset('asset/logo/rocket.png') }}" alt=""
                                srcset="">
                            <p class="">In today’s marketplace, it is the innovation that sets us apart from the
                                competition. We have big investment in R&D teams who develop better and more efficient
                                solutions for our clients.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- how we work --}}
        <section>
            <div>
                <p class="text-center lg:text-3xl 2xl:text-7xl py-20">HOW WE WORK</p>

            </div>

           <div class="bg-[#F0F0F0] py-10">
            <div class="w-11/12 mx-auto grid md:grid-cols-2 gap-10 ">
                <div class=" backdrop-blur-md border-[1px] rounded-lg shadow-lg border-white/20 hover:border-[#4B87AF]">
                   <div class="w-11/12 mx-auto">
                    <div class="flex justify-start items-center">
                        <img width="100px" src="{{ asset('asset/asset.svg') }}" alt="service" srcset="">
                        <p class="text-3xl roboto">choose a service
                        </p>
                    </div>

                    <div>
                        <p class="roboto   ">
                            Our software company offers a diverse range of services to cater to your specific needs. In the
                            "Choose a Service" section, effortlessly navigate through our offerings, including software
                            development, consulting, and support. Tailor your experience and select the service that aligns
                            perfectly with your requirements.
                        </p>
                    </div>
                   </div>
                </div>
                <div class=" backdrop-blur-md border-[1px]  rounded-lg shadow-lg border-white/20 hover:border-[#4B87AF]">
                   <div class="w-11/12 mx-auto">
                    <div class="flex justify-start items-center">
                        <img width="100px" src="{{ asset('asset/asset.svg') }}" alt="service" srcset="">
                        <p class="text-3xl roboto">choose a service
                        </p>
                    </div>

                    <div>
                        <p class="roboto   ">
                            Our software company offers a diverse range of services to cater to your specific needs. In the
                            "Choose a Service" section, effortlessly navigate through our offerings, including software
                            development, consulting, and support. Tailor your experience and select the service that aligns
                            perfectly with your requirements.
                        </p>
                    </div>
                   </div>
                </div>
                <div class=" backdrop-blur-md border-[1px]  rounded-lg shadow-lg border-white/20 hover:border-[#4B87AF]">
                   <div class="w-11/12 mx-auto">
                    <div class="flex justify-start items-center">
                        <img width="100px" src="{{ asset('asset/asset.svg') }}" alt="service" srcset="">
                        <p class="text-3xl roboto">choose a service
                        </p>
                    </div>

                    <div>
                        <p class="roboto   ">
                            Our software company offers a diverse range of services to cater to your specific needs. In the
                            "Choose a Service" section, effortlessly navigate through our offerings, including software
                            development, consulting, and support. Tailor your experience and select the service that aligns
                            perfectly with your requirements.
                        </p>
                    </div>
                   </div>
                </div>
                <div class=" backdrop-blur-md border-[1px]  rounded-lg shadow-lg border-white/20 hover:border-[#4B87AF]">
                    <div class="w-11/12 mx-auto">
                     <div class="flex justify-start items-center">
                         <img width="100px" src="{{ asset('asset/asset.svg') }}" alt="service" srcset="">
                         <p class="text-3xl roboto">choose a service
                         </p>
                     </div>

                     <div>
                         <p class="roboto   ">
                             Our software company offers a diverse range of services to cater to your specific needs. In the
                             "Choose a Service" section, effortlessly navigate through our offerings, including software
                             development, consulting, and support. Tailor your experience and select the service that aligns
                             perfectly with your requirements.
                         </p>
                     </div>
                    </div>
                 </div>

            </div>
           </div>

        </section>
         {{-- our vission --}}
         <section>
           <div class="my-20">
            <div style="background-image: url('{{asset('asset/our vission.jpeg')}}');" class="w-full  bg-center md:h-[70vh] bg-cover">
               <div class="w-11/12 mx-auto">
                <p class="text-5xl md:text-7xl text-center py-6 ">our vision</p>
               <p class="text-3xl md:text-5xl text-center roboto py-5 "> Our vision is to provide world class software and IT solutions for better user experiences at lower costs.
               </div>

               </p>
            </div>
           </div>
         </section>
    </section>




@endsection
