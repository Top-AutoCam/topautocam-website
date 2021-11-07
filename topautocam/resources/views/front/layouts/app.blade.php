<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TOP AUTO CAM</title>

    <link rel="stylesheet" href="{{asset('css/floicons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <script src="{{asset('js/jquery.min.js')}}">
    </script>
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    <style>
        img {
            pointer-events: none;
        }
        .textNoBold{
            font-weight: normal;
        }
        html {
            scroll-behavior: smooth;
        }
        /* back to top */
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            background-color:  #ff9900;
        }
    </style>
    @livewireStyles
</head>

<script>
$(document).ready(function(){
    if (sessionStorage.getItem("isdisclaimerloaded") !== 'true') {
        UIkit.modal('#modal-example').show();
    }
    sessionStorage.setItem('isdisclaimerloaded', 'true');

    
    UIkit.modal('#modal-motobike').show();
    UIkit.modal('#modal').show();
});
</script>

<body class="archive woocommerce woocommerce-page">
   
    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>
    <!-- End Preloader -->

    <div id="wrapper" class="site-wrapper">

        <div class="uk-offcanvas-content">

            @include('front.partials.header')

            <div id="content" class="site-content">

                @yield('content')

            </div>

            @include('front.partials.footer')

            <div id="mobile-menu" data-uk-offcanvas="overlay: true">
                <div class="inner uk-offcanvas-bar">
                    @include('front.partials.mobile_header')
                    <div class="content">
                        <ul class="mobile-nav uk-nav-default uk-nav-parent-icon" data-uk-nav="">
                            <li><a href="{{ route('car-index') }}">Car</a></li>
                            <li><a href="{{ route('motorbike-index') }}">Motorbike</a></li>
                            <li><a href="{{ route('part-index') }}">Part</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('fqas') }}">FQAs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Off Canvas Sidebar -->

        </div>
        <!-- End Off Canvas Content -->

    </div>
    <!-- End Wrapper -->
    <x-button-to-top/>

    @livewireScripts
</body>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</html>