
<div class="smsm">
    <div class="nav-div">
        <ul class="ul-style">
            <li>
                <a href="{{ route('ourservice') }}">Home</a>
                <span class="home-span">
                    <button onclick="homePlus()" id="homeplus"><img class="width " src="{{ asset('asset/logo/plus.png') }}"
                            alt="" srcset=""></button>
                    <button onclick="homeMinus()" id="homeminus" class="d-none"><img class="width "
                            src="{{ asset('asset/logo/minus.png') }}" alt="" srcset=""> </button></span>
                <ul id="homemenu" class="d-none">
                    <li>
                        <a href="{{route("ourservice")}}">OurService</a>
                    </li>
                    <li>
                        <a href="{{route('analysis')}}">Analysis</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="">About</a>
                <span class="about-span">
                    <button onclick="aboutPlus()" id="aboutplus"><img class="width "
                            src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                    <button onclick="aboutMinus()" id="aboutminus" class="d-none"><img class="width "
                            src="{{ asset('asset/logo/minus.png') }}" alt="" srcset=""> </button></span>
                <ul id="aboutmenu" class="d-none">
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Service</a>
                <span class="service-span">
                    <button onclick="servicePlus()" id="serviceplus"><img class="width "
                            src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                    <button onclick="serviceMinus()" id="serviceminus" class="d-none"><img class="width "
                            src="{{ asset('asset/logo/minus.png') }}" alt="" srcset=""> </button></span>
                <ul id="servicemenu" class="d-none">
                    <li>
                        <a href="{{route("service_category")}}">Service Category</a>
                    </li>
                    <li>
                        <a href="">Service Process</a>
                    </li>
                    <li>
                        <a href="">Design</a>
                    </li>
                    <li>
                        <a href="">Frontend</a>
                    </li>
                    <li>
                        <a href="">Backend</a>
                    </li>
                    <li>
                        <a href="">Database</a>
                    </li>
                    <li>
                        <a href="">Industry We Work </a>
                    </li>
                    <li>
                        <a href="">List Of Our Service </a>
                    </li>

                    <li>
                        <a href="">Ai

                        </a>
                        <span>
                            <button onclick="aiPlus()" id="aiplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="aiMinus()" id="aiminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="aimenu" class="d-none">
                            <li><a href="{{route('ai_section_1_get_data')}}">section1</a></li>
                            <li><a href="{{route('ai_section_2_get_data')}}">section2</a></li>
                            <li><a href="{{route('ai_section_3_get_data')}}">section3</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="">Buisness</a>
                        <span>
                            <button onclick="buisnessPlus()" id="buisnessplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="buisnessMinus()" id="buisnessminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="buisnessmenu" class="d-none">
                            <li><a href="">section1</a></li>
                            <li><a href="">section2</a></li>
                            <li><a href="">section3</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="">Integrated</a>
                        <span>
                            <button onclick="integratedPlus()" id="integratedplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="integratedMinus()" id="integratedminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="integratedmenu" class="d-none">
                            <li><a href="">section1</a></li>
                            <li><a href="">section2</a></li>
                            <li><a href="">section3</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="">Intelligent</a>
                        <span>
                            <button onclick="intelligentPlus()" id="intelligentplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="intelligentMinus()" id="intelligentminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="intelligentmenu" class="d-none">
                            <li><a href="">section1</a></li>
                            <li><a href="">section2</a></li>
                            <li><a href="">section3</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="">Network</a>
                        <span>
                            <button onclick="networkPlus()" id="networkplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="networkMinus()" id="networkminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="networkmenu" class="d-none">
                            <li><a href="">section1</a></li>
                            <li><a href="">section2</a></li>
                            <li><a href="">section3</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="">testing</a>
                        <span>
                            <button onclick="testingPlus()" id="testingplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="testingMinus()" id="testingminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="testingmenu" class="d-none">
                            <li><a href="">section1</a></li>
                            <li><a href="">section2</a></li>
                            <li><a href="">section3</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="">Cybar Secuirity</a>
                        <span>
                            <button onclick="secuirityPlus()" id="secuirityplus"><img class="width "
                                    src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                            <button onclick="secuirityMinus()" id="secuirityminus" class="d-none"><img class="width "
                                    src="{{ asset('asset/logo/minus.png') }}" alt="" srcset="">
                            </button></span>
                        <ul id="secuiritymenu" class="d-none">
                            <li><a href="">section1</a></li>
                            <li><a href="">section2</a></li>
                            <li><a href="">section3</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Portfolio</a>
                <span class="portfolio-span">
                    <button onclick="portfolioPlus()" id="portfolioplus"><img class="width "
                            src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                    <button onclick="portfolioMinus()" id="portfoliominus" class="d-none"><img class="width "
                            src="{{ asset('asset/logo/minus.png') }}" alt="" srcset=""> </button></span>
                <ul id="portfoliomenu" class="d-none">
                    <li>
                        <a href="{{route('our_work')}}">Our Work</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="">Contact</a>
                <span class="contact-span">
                    <button onclick="contactPlus()" id="contactplus"><img class="width "
                            src="{{ asset('asset/logo/plus.png') }}" alt="" srcset=""></button>
                    <button onclick="contactMinus()" id="contactminus" class="d-none"><img class="width "
                            src="{{ asset('asset/logo/minus.png') }}" alt="" srcset=""> </button></span>
                <ul id="contactmenu" class="d-none">
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                    <li>
                        <a href="">OURSERVICE</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>


