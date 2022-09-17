@extends('layouts.main')

@section('body')
    <div class="web-detail">
        <div class="why-me-web">
            <h1>Why Me?</h1>
            <p>Web Developer service with super cheap price. Best quality of the website to support your business</p>
        </div>
        <div class="why-me-web-list">
            <div class="why-me-web-item">
                <i data-feather="layout"></i>
                <h3>Mobile Friendly</h3>
                <p>Website that maded here is already mobile friendly and responsive. It will be fit with every gadget you use.</p>
            </div>
            <div class="why-me-web-item">
                <i data-feather="fast-forward"></i>
                <h3>Fast Process</h3>
                <p>The process for develop the website here is really fast.</p>
            </div>
            <div class="why-me-web-item">
                <i data-feather="circle"></i>
                <h3>Free Maintenance</h3>
                <p>Website that made here is free maintenance for 1 years after the web was given.</p>
            </div>
        </div>

        <div class="process-web">
            <h1>Process</h1>
            <div class="web-title-process">
                <p class="web-item-process active-process" onclick="openDetail('order')"> <i class="logo-process" data-feather="shopping-cart"></i><br>Order Website</p>
                <p class="web-item-process" onclick="openDetail('plan')"><i class="logo-process" data-feather="monitor"></i><br>Website Plan</p>
                <p class="web-item-process" onclick="openDetail('content')"><i class="logo-process" data-feather="book"></i><br>Send Content</p>
                <p class="web-item-process" onclick="openDetail('project')"><i class="logo-process" data-feather="clock"></i><br>Working on Project</p>
                <p class="web-item-process" onclick="openDetail('publish')"><i class="logo-process" data-feather="upload"></i><br>Publish Website</p>
            </div>
            <div class="web-process-detail active-process-detail" id="order"> 
                <p class="header-web-process-detail">Order Website</p>
                <p>Chosee the package of the website. If you not sure about your choice, go contact the admin for consultation. We will recomend you to the package that suit with your project. Then, do a down payment 50% from the price </p>
            </div>
            <div class="web-process-detail" id="plan">
                <p class="header-web-process-detail">Website Plan</p>
                <p>You can discuss about your webiste plan. Such as name, theme, content, and everything. Convey what do you want on the website. We will happily help you.</p>
            </div>
            <div class="web-process-detail" id="content">
                <p class="header-web-process-detail">Send Content</p>
                <p>Your website need an content. Send us your content such as Company Logo, product picture, and everything that want to be shown on the website.</p>
            </div>
            <div class="web-process-detail" id="project">
                <p class="header-web-process-detail">Working on Project</p>
                <p>Ask about the estimated processing time and the processing process. We will happily inform it to you</p>
            </div>
            <div class="web-process-detail" id="publish">
                <p class="header-web-process-detail">Publish Website</p>
                <p>Your website ready to publish. We will send the prototype to you. Untill you confirm the website. We will send the file to you.</p>
            </div>
        </div>
    </div>

    <div class="package">
            <h1>Package List</h1>
            <p class="package-desc">This package only include the source Code</p>
            <div class="source-list">
                <div class="source-item">
                    <h2>Silver</h2>
                    <p>Start From idr 200.000,-</p>
                    <a href="https://api.whatsapp.com/send/?phone=6282119745119&text&type=phone_number&app_absent=0" target="_blank"><button>Book Now</button></a>
                    <p class="desc-source">Suit for every business who offer the products or services with business to business system. For example: Consultant, Export import company, Marketing, etc</p>
                </div>
                <div class="source-item">
                    <h2>Gold</h2>
                    <p>Start From idr 700.000,-</p>
                    <a href="https://api.whatsapp.com/send/?phone=6282119745119&text&type=phone_number&app_absent=0" target="_blank"><button>Book Now</button></a>
                    <p class="desc-source">Suit for every business who offer the products or services directly to the customer. For example: travel agency, online shop, food market, etc</p>
                </div>
            </div>
            <p>For the hosting we will follow the price by hosting provider. So the price will be hosting price from the provider + source code price</p>
        </div>

    <script>
        var titleLinks = document.getElementsByClassName("web-item-process");
        var contentLinks = document.getElementsByClassName("web-process-detail");

        function openDetail(detail) {
            for (titleLink of titleLinks) {
                titleLink.classList.remove("active-process");
            }
            for (contentLink of contentLinks) {
                contentLink.classList.remove("active-process-detail");
            }
            event.currentTarget.classList.add("active-process");
            document.getElementById(detail).classList.add("active-process-detail");
        }
    </script>
@endsection
