<!DOCTYPE html>
<html>
<head>
    <title>LittleCraftOne</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    {{--    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/shield-halved?f=classic&s=solid">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arvo&family=Open+Sans&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Site.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    {{--    Css Link Here--}}

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>
<body>

{{--Section Second NavBar Here--}}

<section>
    <div class="navbar">
        <div class="logo">LITTLCRAFTONE</div>
        <ul class="menu-list">
            <li><a href="home">Home</a></li>
            <li><a href="aboutUs">About</a></li>
            <li><a href="index">Shop</a></li>
            <li><a href="contactUs">Contact</a></li>
        </ul>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</section>


@yield('content')

{{--Section Fourth Show Details Here--}}

<section>

    <hr class="policy-line">

    <div class="row PolicyDetailsHere">
        <div class="col-md-4 policy-col">
            <div class="firstPolicyDetailsHereImg">
                <img src="{{ asset('/Images/delivery-truck.gif') }}" width="100">
            </div>

            <div class="firstPolicyDetailsHere">
                <h3>Free home delivery</h3>
                <span>Provide free home delivery for all product over $100</span>
            </div>
        </div>

        <div class="col-md-4 policy-col">
            <div class="firstPolicyDetailsHereImg">
                <img src="{{ asset('/Images/medal-here.gif') }}" width="100">
            </div>

            <div class="firstPolicyDetailsHere">
                <h3>Quality Products</h3>
                <span>We ensure the product quality that is our main goal</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="firstPolicyDetailsHereImg">
                <img src="{{ asset('/Images/support.gif') }}" width="100">
            </div>

            <div class="firstPolicyDetailsHere">
                <h3>Online Support</h3>
                <span>We ensure the product quality that you can trust easily</span>
            </div>
        </div>
    </div>

</section>

{{--Footer Code Here--}}

<footer>

    <div class="row footer">
        <div class="col-md-4 FooterFirstPart">
            <h1>LittleCraftOne</h1>

            <span>We provide the best Hand Made Product all over the world.
                    We are the world best store for Hand Made. You can buy our
                    <br>
                    <br>
                    Patankar Park, Station Road, Nallasopara W., Maharashtra
                    <br>
                    <br>
                    +91 88054 33102  / +91 88054 33102
                </span>
        </div>

        <div class="col-md-3 FooterSecondPart">
            <h2>Quick Link</h2>
            <ul class="FooterUlOptions">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Shipping Policy</a></li>
            </ul>
        </div>

        <div class="col-md-3 FooterThirdPart">
            <h2>Information</h2>
            <ul class="FooterUlOptions">
                <li><a href="#">Login</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Shipping Policy</a></li>
                <li><a href="#">Promotional Offers</a></li>
            </ul>
        </div>

        <div class="col-md-3 FooterFourthPart">
            <h2>Follow us</h2>
            <ul class="FooterUlOptions">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">YouTube</a></li>
                <li><a href="#">Pinterest</a></li>
                <li><a href="#">WhatsApp</a></li>
            </ul>
        </div>
    </div>

</footer>


@yield('selectize-script')


{{--Scripts Starts Here--}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="script.js"></script>

<script>
    function myFunction() {
        var menuList = document.querySelector('.menu-list');
        menuList.classList.toggle('active');
    }
</script>

</body>
</html>
