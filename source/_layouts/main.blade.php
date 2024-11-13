<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>@yield('title')</title>
         <!-- Google Tag Manager -->
         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-562JNHZJ');</script>
        <!-- End Google Tag Manager -->
        <link rel="stylesheet" href="{{ mix('/css/main.css', '/assets/build') }}">
        <link rel="stylesheet" href="/build_local/assets/build/css/main.css">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/tab-sliders.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
        <script src="assets/js/custom.js "></script>
        <script src="assets/js/bootstrap.bundle.min.js "></script>
        <script src="assets/js/bootstrap.min.js "></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js "></script>
        <script src="https://kit.fontawesome.com/c5e5090d10.js " crossorigin="anonymous "></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
    </head>
    <body class="text-gray-900 font-sans antialiased">

        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-562JNHZJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
@include('_partials.nav')
@yield('body')
@include('_partials.footer')

<script type="text/javascript ">
function openTab(tabName) {
    document.querySelectorAll('.mobile-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.mobile-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab(\'' + tabName + '\')"]').classList.add('active');
}

function openTab2(tabName2) {
    document.querySelectorAll('.desktop-tab-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.desktop-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName2 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab2(\'' + tabName2 + '\')"]').classList.add('active');
}

function openTab3(tabName3) {
    document.querySelectorAll('.digital-media-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.digital-media-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName3 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab3(\'' + tabName3 + '\')"]').classList.add('active');
}

function openTab4(tabName4) {
    document.querySelectorAll('.Prowess-content').forEach(function(content) {
        content.classList.remove('active');
    });
    document.querySelectorAll('.Prowess-tab').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabName4 + 'Content').classList.add('active');
    document.querySelector('[onclick="openTab4(\'' + tabName4 + '\')"]').classList.add('active');
}

function showNextTab(section) {
    var tabs = document.querySelectorAll('.' + section + '-tab');
    var activeIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));

    if (activeIndex < tabs.length - 1) {
        openTab(section + (activeIndex + 1));
    }
}

function showPrevTab(section) {
    var tabs = document.querySelectorAll('.' + section + '-tab');
    var activeIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));

    if (activeIndex > 0) {
        openTab(section + (activeIndex - 1));
    }
}
</script>


    </body>
</html>
