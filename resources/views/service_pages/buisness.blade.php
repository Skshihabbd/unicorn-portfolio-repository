@extends('page.root')
@section('title','Buisness')
@section('layout')
@section('tailwind')
@vite('resources/css/app.css')
@endsection
<section>
    <p class="text-7xl font-semibold w-10/12 mx-auto  text-center py-14"><span class="text-[#0B4392]">USSBD</span> excels
        in enterprise
        network transformation</p>

    <div class=" bg-[#003D69] h-[90vh] grid grid-cols-2 mt-20">
        <div class="col-span-1 ">
            <p class="text-4xl text-center text-white mt-10">Enterprise Network Services</p>
            <div class="flex justify-center items-center w-11/12 mx-auto mt-20">
                <p class="text-xl text-[#d9dbdf]">As a leader in the Network services domain, USSBD is well- positioned
                    to assist enterprises with their network transformation needs. We cover the entire Networks
                    Lifecycle – from Managed Services to Transformation.</p>
            </div>
        </div>
        <div> <img class="h-[90vh]" src="{{ asset('asset/network.jpeg') }}" alt="network" srcset=""></div>
    </div>
</section>
{{-- network --}}
<section>
    <div class=" flex justify-between items-center my-16 ">

        <div>
            <img class="w-full" src="{{ asset('asset/section image/network_3.jpg') }}" alt="" srcset="">
        </div>
        <div class="space-y-2">
            <p class="lg:text-5xl 2xl:text-7xl mb-4   font-semibold"><span class="text-[#0d2a53]">Leading</span>
                Provider of <span class="text-[#0a0f17]">Secure</span>, Scalable, and <span
                    class="text-[#0B4392]">High-Performance</span> Network Solutions</p>

            <p><strong>Network Infrastructure Design & Implementation</strong> – Setting up and optimizing LAN, WAN, and
                cloud-based networks</p>
            <p><strong>Cloud Networking</strong> – Integrating cloud solutions like AWS, Azure, and Google Cloud for
                scalable networking</p>
            <p><strong>Cybersecurity & Network Protection</strong> – Implementing firewalls, intrusion detection systems
                (IDS), and VPN security.</p>
            <p><strong>IoT Network Integration</strong> – Connecting smart devices and IoT ecosystems for real-time data
                exchange.</p>

            <p><strong>Managed Network Services</strong> – 24/7 monitoring, maintenance, and support for business
                networks.</p>

        </div>

    </div>
</section>

<section>
    <div class="pt-16 bg-[#F8F9FA]">
        <h1 class="text-6xl font-semibold w-8/12 text-center mx-auto"> How We Provide <span
                class="text-[#0B4392]">Network-Services</span> to Clients</h1>

        <p class="w-10/12 mx-auto text-center text-2xl my-10 text-[#6B7280] ">
            we offer a comprehensive range of Network Services designed to meet the unique needs of each client. From
            the initial consultation to ongoing support, our services ensure secure, reliable, and scalable network
            solutions tailored to optimize business operations. Here’s an overview of how we deliver our network
            services
        </p>

        <div>
            <div class=" pt-8 pb-20">
                <div class="w-11/12 mx-auto flex flex-wrap justify-between ">
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}" alt=""
                                srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Initial Consultation and
                                Assessment</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit of
                                the existing network setup to identify potential bottlenecks, security vulnerabilities,
                                and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}" alt=""
                                srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Customized Network
                                Solution Design</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit of
                                the existing network setup to identify potential bottlenecks, security vulnerabilities,
                                and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}" alt=""
                                srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Implementation and
                                Deployment</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit of
                                the existing network setup to identify potential bottlenecks, security vulnerabilities,
                                and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}" alt=""
                                srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Ongoing Monitoring &
                                Support</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit of
                                the existing network setup to identify potential bottlenecks, security vulnerabilities,
                                and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}"
                                alt="" srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Security and Data
                                Protection</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit
                                of the existing network setup to identify potential bottlenecks, security
                                vulnerabilities, and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}"
                                alt="" srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Scalable Solutions for
                                Future Growth</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit
                                of the existing network setup to identify potential bottlenecks, security
                                vulnerabilities, and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Initial Consultation and Assessment.jpeg') }}"
                                alt="" srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Training and Knowledge
                                Transfer</p> <img class="w-2/12" src="{{ asset('asset/logo/right-arrow.png') }}"
                                alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit
                                of the existing network setup to identify potential bottlenecks, security
                                vulnerabilities, and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1500" class="w-5/12 mt-16  shadow-lg ">
                        <div class=" flex justify-start "><img class="w-[20%]"
                                src="{{ asset('asset/logo/Continuous Improvement & Feedback Loop.jpg') }}"
                                alt="" srcset="">
                            <p class="text-2xl text-center font-semibold py-3 w-[60%]  mx-auto">Continuous Improvement
                                & Feedback Loop</p> <img class="w-2/12"
                                src="{{ asset('asset/logo/right-arrow.png') }}" alt="" srcset="">
                        </div>
                        <div class="w-11/12 mx-auto my-5 space-y-2">
                            <li><span class="font-bold">Needs Assessment:</span>We evaluate the client’s business size,
                                network load, security requirements, and growth potential.</li>
                            <li><span class="font-bold">Current Network Evaluation:</span> Our team conducts an audit
                                of the existing network setup to identify potential bottlenecks, security
                                vulnerabilities, and areas of improvement.</li>
                            <li><span class="font-bold">Goal Alignment:</span>We ensure that the network design aligns
                                with the client's business goals—whether that’s improving performance, enhancing
                                security, or enabling scalable growth.</li>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="my-20 bg-[#0B4392] h-[90vh]">
    <div class="w-11/12 mx-auto ">
        <p class="text-center text-5xl font-bold text-white py-20">We Don’t Just Provide Solutions; We Build Long-term Partnerships By Offering
            Reliable, Secure, And Scalable Network Infrastructures Tailored To Your Specific Business Needs.</p>

            <div class="w-[20%] mx-auto py-12">

            <a  class="flex items-center  justify-center group text-white border-[1px] border-white py-4  rounded-full bg-[#119EB6] hover:bg-white hover:text-black hover:border-[#0B4392]" href="{{route('contact')}}">Contact Us <i
                    class="fa-solid fa-arrow-right text-xl -rotate-45 group-hover:rotate-0 group-hover:pl-1 transition-transform ease-in-out duration-500 "></i></a>
            </div>


    </div>
</section>
@endsection
