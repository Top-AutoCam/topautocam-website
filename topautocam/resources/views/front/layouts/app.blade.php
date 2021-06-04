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

<!--     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

    <style>
        img {
            pointer-events: none;
        }
    </style>

    @livewireStyles
</head>

<!-- <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script> -->

<script>
$(document).ready(function(){
    if (sessionStorage.getItem("isdisclaimerloaded") !== 'true') {
        UIkit.modal('#modal-example').show();
    }
    sessionStorage.setItem('isdisclaimerloaded', 'true');

    // if (sessionStorage.getItem('#modal-example') !== 'true') {
    //     $("#modal-example").modal('show');
    //     //then the modal will be set true in the current session due to which the modal won't 
    //     //reappear on the refresh, we need to reload the page in a new tab to make the modal 
    //     //reappear.

    //     sessionStorage.setItem('#modal-example', 'true');
    // }
// $("#modal").css("display", "none")
    // localStorage.removeItem('isdisclaimerloaded');
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
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>


                </div>
            </div>
            <!-- End Off Canvas Sidebar -->

        </div>
        <!-- End Off Canvas Content -->

    </div>
    <!-- End Wrapper -->

    @livewireScripts
</body>


<script>

</script>

</html>