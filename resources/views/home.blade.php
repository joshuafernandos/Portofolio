@extends('layouts.main')

@section('body')
    {{-- hero --}}
    <div class="hero">
        <div class="header">
            <div class="header-name">Hi, I'm <span class="bolder-hn">Joshua Fernando Suprianto</span></div>
            <h1 class="header-job">Website Developer</h1>
            <p class="header-description">an undergraduate student with a lot of expertise as a Website Developer
                and
                Administrator, as well as some event and organization experience. Quickly learning new skills and
                programming languages, as well as problem solving, are among my talents. My greatest assets
                are
                that I am very focused and enthusiastic about each activity, that I am a diligent worker who is
                quick
                to learn and adapt to new situations. </p>
            <div class="button">
                <a href="img/NewestCV.pdf" download="CVJoshuaFS"><button class="header-btn">Download CV</button></a>
            </div>
        </div>
        <div class="footer">
            <img class="image-1" src="/img/profile.jpeg" alt="">
        </div>
    </div>
    {{-- end of hero --}}

    {{-- about --}}

    <div class="about" id="about">
        <div class="row">
            <div class="about-col1">
                <img src="/img/profile.png" alt="">
            </div>
            <div class="about-col2">
                <h1 class="title-about">About Me</h1>
                <p class="subtitle-about">I'm still eagerly grasping onto as many more programming languages, frameworks, or
                    principles as
                    I can fit into my mental coding web. I've experienced as a Web Administrator, Web Developer, Database
                    Manager, and Database Design. With my capacity to form deep bonds, excellent communication skills, and
                    dedication to my work I am confident that I can reach my goals.</p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experiences')">Experiences</p>
                    <p class="tab-links" onclick="opentab('certification')">Certification</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                    <p class="tab-links" onclick="opentab('languages')">Languages</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li>
                            <span>Web Developer</span><br> HTML, CSS, JavaScript, SQL, PHP, Bootstrap, Laravel, Git/GitHub
                        </li>
                        <li>
                            <span>Android Developer</span><br>
                            Java, XML, C/C++, Git/GitHub
                        </li>
                        <li>
                            <span>Database Management</span><br>
                            SQL, MySQL Workbench
                        </li>
                    </ul>
                </div>

                <div class="tab-contents" id="experiences">
                    <ul>
                        <li>
                            <span>Website Administrator</span><br>President Model United Nation 2022
                        </li>
                        <li>
                            <span>PUMA COMPUTING</span><br>Arts and Sports | President University Major Association 2022
                        </li>
                    </ul>
                </div>

                <div class="tab-contents" id="certification">
                    <ul>
                        <li>
                            <span>Junior Website Developer</span><br>BPPTIK Kominfo 2022 | Valid: 2022 - 2025
                        </li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li>
                            <span>Untung Suropati Catholic Senior High School Sidoarjo</span><br>SAINS | 2017-2021
                        </li>
                        <li>
                            <span>President University</span><br>Information System | 2021 - 2024(Expected)
                        </li>
                    </ul>
                </div>
                <div class="tab-contents" id="languages">
                    <ul>
                        <li>
                            <span>English</span><br>Advanced
                        </li>
                        <li>
                            <span>Bahasa</span><br>Native
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- end of about --}}

    {{-- porto --}}
    <div class="portofolio" id="portofolio">
        <h1 class="title-porto">My Portofolio</h1>
        <div class="porto-list">
            @foreach ($portoimg as $item)
                <div class="porto-item">
                    <a href="/porto/{{ $item->slug }}">
                        <div class="overlay">
                            <img src="{{ $item->directory }}" class="overlay-image">
                            <div class="overlay-bottom">
                                <p class="overlay-text">{{ $item->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- end of porto --}}

    {{-- services --}}
    <div class="services" id="services">
        <h1 class="title-services">My Services</h1>
        <div class="services-list">
            <div>
                <i class="icon-services" data-feather="crop"></i>
                <h2>Web Development</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit tenetur sapiente voluptatum. Totam
                    illo
                    quibusdam quo reiciendis maxime nemo autem, obcaecati hic, molestiae perferendis suscipit.</p>
                <a href="/services/web-developer">Learn More</a>
            </div>
            <div>
                <i class="icon-services" data-feather="smartphone"></i>
                <h2>Android Development</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sit perferendis in quod earum
                    doloremque iste cumque tempore magnam, eveniet ipsum officia nam provident! Hic.</p>
                <a href="#">Learn More</a>
            </div>
            <div>
                <i class="icon-services" data-feather="file-text"></i>
                <h2>Joki Tugas</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, alias amet nulla eos delectus, a
                    fugiat asperiores aliquid voluptates nam adipisci, ex odit modi ab.</p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
    {{-- end of services --}}

    {{-- contact --}}
    <div class="contact" id="contact">
        <div class="row">
            <div class="contact-1">
                <h1 class="contact-title">Contact Me</h1>
                <p>joshuafernando332@gmail.com</p>
                <p>+6281334136870</p>
                <div class="social-icons">
                    <a href="https://web.facebook.com/joshua.fernando.3139/" target="_blank"><i
                            data-feather="facebook"></i></a>
                    <a href="https://www.instagram.com/joshuafernando_" target="_blank"><i data-feather="instagram"></i></a>
                    <a href="https://www.linkedin.com/in/joshua-fernando-7b7a6a218/" target="_blank"><i
                            data-feather="linkedin"></i></a>
                    <a href="https://wa.me/6281334136870" target="_blank"><i data-feather="phone"></i></a>
                </div>
            </div>
            <div class="contact-2">
                <form action="">
                    <input type="text" name="name" placeholder="Input Your Name" required>
                    <input type="text" name="email" placeholder="Input Your Email" required>
                    <textarea name="message" placeholder="Input Your Message" cols="30" rows="5"></textarea>
                    <div class="button">
                        <button class="button-contact" type="submit">Submit</button>
                        <button class="button-contact" type="reset">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>Copyright © Joshua Fernando S | 2022 </p>
    </div>

    {{-- end of contact --}}

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
@endsection
