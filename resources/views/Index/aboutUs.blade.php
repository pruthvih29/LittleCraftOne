@extends('Layout.app')

@section('content')

<style>

    .aboutUsSectionFirst {
        background-color: #DEEFE9;
        padding: 6.5%;
        justify-content: center;
        align-content: center;
    }

    .aboutUsSectionFirst h1 {
        color: #000;
        letter-spacing: 0;
        font-size: 3.5em;
        margin-bottom: 10px;
        font-family: Quicksand, sans-serif;
        font-weight: 600;
        font-style: normal;
    }

    .mainText {
        color: #000;
        font-family: Poppins, sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 1.3em;
        float: left;
        margin-left: 1%;
        letter-spacing: 0.1em;
        width: 100%;
    }

    .mainText .separator,
    .mainText .about {
        color: #FFAE00;
    }

    .mainText .home a {
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
    }

    .mainText .home a:hover {
        color: #FFAE00;
    }

    @media only screen and (max-width: 768px) {
        .aboutUsSectionFirst {
            padding: 10%;
        }
    }

    @media only screen and (max-width: 480px) {
        .aboutUsSectionFirst {
            padding: 15%;
        }

        .aboutUsSectionFirst h1 {
            font-size: 2.5em;
        }

        .mainText {
            font-size: 1.1em;
            margin-left: -5%;
        }
    }

    /*aboutUs Section Second*/

    .aboutUsSectionSecond {
        margin: 5%;
        margin-left: 15%;
    }

    .aboutUsSectionSecond h3 {
        font-family: "Comic Sans MS";
        font-weight: 400;
        font-style: normal;
        color: #222;
        line-height: 1.2;
        font-size: 2em;
        margin-top: 10%;
    }

    .aboutUsSectionSecond h1 {
        font-family: Quicksand, sans-serif;
        color: #222;
        font-weight: bolder;
        font-weight: 600;
        margin-bottom: 5%;
    }

    .aboutUsSectionSecond p {
        font-family: Poppins, sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 1.2em;
        line-height: 28px;
        color: #222;
        letter-spacing: 0.1em;
    }

    /* Responsive styles for tablet view */
    @media only screen and (max-width: 768px) {
        .aboutUsSectionSecond {
            margin: 5%;
            margin-left: 5%;
        }

        .aboutUsSectionSecond h3 {
            font-size: 1.8em;
            margin-top: 8%;
        }

        .aboutUsSectionSecond h1 {
            font-size: 2.2em;
            margin-bottom: 4%;
        }

        .aboutUsSectionSecond p {
            font-size: 1.1em;
            line-height: 24px;
        }
    }

    /* Responsive styles for mobile view */
    @media only screen and (max-width: 480px) {
        .aboutUsSectionSecond {
            margin: 5%;
            margin-left: 2%;
        }

        .aboutUsSectionSecond h3 {
            font-size: 1.5em;
            margin-top: 6%;
        }

        .aboutUsSectionSecond h1 {
            font-size: 1.8em;
            margin-bottom: 3%;
        }

        .aboutUsSectionSecond p {
            font-size: 1em;
            line-height: 20px;
        }
    }

    /*Section third css here*/

    .aboutUsSectionThird {
        margin: 5% 5%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .aboutUsSectionThird .col-md-5 {
        flex: 0 0 100%;
        margin: 0 2%;
        text-align: center;
    }

    .imageaboutUsSectionThird {
        width: 100%;
        height: auto;
    }

    .imageaboutUsSectionThird:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    @media only screen and (max-width: 768px) {
        .aboutUsSectionThird .col-md-5 {
            flex: 0 0 100%;
            margin: 1% 2%;
        }
    }

    @media only screen and (min-width: 769px) {
        .aboutUsSectionThird .col-md-5 {
            flex: 0 0 45%;
            margin: 0 2%;
        }
    }

</style>

{{--Section First Here--}}

    <section>

        <div class="row aboutUsSectionFirst">

            <div>
                <h1> About </h1>
                <p class="mainText">
                    <span class="home"><a href="home">Home</a></span>
                    <span class="separator"> - </span><span class="about">About</span>
                </p>
            </div>

        </div>

</section>

{{--Section Second Here--}}

    <section>

        <div class="row aboutUsSectionSecond">

            <div class="col-md-4">
                <img src="{{ asset('/Images/LittleCraftOneAboutUs.png') }}" width="300">
            </div>

            <div class="col-md-7">

                <h3>LittleCraftOne</h3>
                <h1>Crafting Your Curiosity</h1>

                <p>
                    We provide the best Beard oil all over the world. We are the worldd best store
                    for Beard Oil. You can buy our product without any hegitation because we always
                    consus about our product quality and always maintain it properly so your can trust
                    and this is our main goal we belive that...
                </p>

                <p>
                    Some of our customer say’s that they trust us and buy our product without any
                    hagitation because they belive us and always happy to buy our product.
                </p>

            </div>

        </div>

    </section>

{{--section third here--}}

    <section>

        <div class="row aboutUsSectionThird">

            <div class="col-md-5">
                <img class="imageaboutUsSectionThird" src="{{ asset('/Images/aboutUsFirst.png') }}">
            </div>

            <div class="col-md-5">
                <img class="imageaboutUsSectionThird" src="{{ asset('/Images/aboutUsSecond.png') }}">
            </div>

        </div>

    </section>

@endsection
