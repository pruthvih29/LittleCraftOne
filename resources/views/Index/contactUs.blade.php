@extends('Layout.app')

@section('content')

<style>

    /*Section First CSS*/

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
            margin-left: 8%;
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
                margin-left: 1%;
            }
        }

    /*Section Second CSS*/

    .dashed-hr {
        border-top: 1px dashed #000;
        width: 100%;
        margin: 10% 0%;
    }

    .aboutUsSectionSecond{
        margin: 5% 0%;
        margin-left: 15%;
    }

    .aboutUsSectionSecondPartI{
        background-color: #F6EFE2;
        padding: 5% 5%;
    }

    .aboutUsSectionSecondPartI h3{
        font-size: 1.6em;
        font-weight: 600;
        margin-bottom: 9px;
        font-family: Quicksand,sans-serif;
        font-style: normal;
        color: #222222;
        letter-spacing: 0.1em;
    }

    .aboutUsSectionSecondPartI span {
        font-family: Poppins, sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 1.2em;
        color: #000000;
        letter-spacing: 0.2em;
        line-height: 1.8em; /* Adjust this value based on your preferences */
    }

    /* Remove bullets from the list */
    .aboutUsSectionSecondPartI span ul {
        list-style: none;
        padding: 0;
    }

    /* Style links inside the list */
    .aboutUsSectionSecondPartI span ul li a {
        text-decoration: none;
        color: #000; /* Set default link color */
        transition: color 0.3s; /* Add a smooth color transition on hover */
    }

    /* Change link color on hover */
    .aboutUsSectionSecondPartI span ul li a:hover {
        color: #388087; /* Set the desired hover color */
        font-weight: 600;
    }

    .aboutUsSectionSecondPartII{
        margin-left: 3%;
    }

    .aboutUsSectionSecondPartII h2{
        font-size: 2em;
        margin-bottom: 20px;
        font-style: normal;
        margin-left: 3%;
        font-weight: 600;
        font-family: Poppins, sans-serif;
        color: #000000;
    }

    .aboutUsSectionSecondPartII p{
        font-family: Poppins,sans-serif;
        font-weight: 400;
        font-style: normal;
        letter-spacing: 0.1em;
        line-height: 1.5em;
        font-size: 1.2em;
        margin-left: 3%;
        margin-bottom: 10%;
    }

    .InputSection{
        margin-left: 1%;
        margin-bottom: 5%;
    }

    .inputClass {
        padding: 10px 32px; /* Reduce the top and bottom padding */
        font-family: Quicksand, sans-serif;
        font-weight: 400;
        font-style: normal;
        border-radius: 50px;
        border: 1px solid #EBEBEB; /* Change the border color */
        margin-bottom: 10px; /* Add margin between the two inputs */
        width: 100%;
        font-size: 1.2em;
    }

    .inputtextArea {
        padding: 10px 32px; /* Reduce the top and bottom padding */
        font-family: Quicksand, sans-serif;
        font-weight: 400;
        font-style: normal;
        border-radius: 10px;
        border: 1px solid #EBEBEB; /* Change the border color */
        margin-bottom: 10px; /* Add margin between the textarea and other elements */
        width: 95%;
        font-size: 1.2em;
        margin-left: 3%;
        height: 200px; /* Set the desired height */
    }

    .inputtextArea {
        /* ... other styles ... */
        resize: vertical; /* or "both" for both vertical and horizontal resizing */
    }

    .ContactUsSubmit{
        font-size: 18px;
        line-height: 25px;
        padding: 10px 30px;
        text-transform: uppercase;
        background-color: #222;
        color: #FFAE00;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        font-family: Oswald,sans-serif;
        margin-left: 3%;
    }

    .ContactUsSubmit:hover{
        font-size: 18px;
        line-height: 25px;
        padding: 10px 30px;
        text-transform: uppercase;
        background-color: #FFAE00;
        color: #222;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        font-family: Oswald,sans-serif;
        margin-left: 3%;
    }

    /* Media queries for tablet and mobile views */
    @media screen and (max-width: 767px) {
        .aboutUsSectionSecond {
            margin-left: 3%; /* Reset margin for smaller screens */
            width:95%;
        }

        .aboutUsSectionSecondPartII {
            margin-top: 5%; /* Adjusted margin for better alignment on smaller screens */
        }
        .aboutUsSectionSecondPartI span,
        .aboutUsSectionSecondPartII p {
            margin-left: 0; /* Adjusted for better alignment on smaller screens */
        }
    }

</style>

    {{--Section First Here--}}

    <section>

        <div class="row aboutUsSectionFirst">

            <div>
                <h1> Contact </h1>
                <p class="mainText">
                    <span class="home"><a href="home">Home</a></span>
                    <span class="separator"> - </span><span class="about">Contact</span>
                </p>
            </div>

        </div>

    </section>

    {{--Section Second Here--}}

    <section>

        <div class="row aboutUsSectionSecond">

            <div class="col-md-5 aboutUsSectionSecondPartI">

                <h3>Address</h3>

                <span>Patankar Park, Station Road, <br>
                    Nallasopara W., Maharashtra</span>

                <div class="dashed-hr"></div>

                <h3>Phone</h3>

                <span>+91 88054 33102<br>
                    +91 88054 33102
                </span>

                <div class="dashed-hr"></div>

                <h3>Follow Us</h3>

                <span>
                    <ul class="">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">Pinterest</a></li>
                        <li><a href="#">WhatsApp</a></li>
                    </ul>
                </span>

            </div>

            <div class="col-md-6 aboutUsSectionSecondPartII">

                <h2>Get in Touch</h2>

                <p>Terms & Conditions deleniti atque corrupti sdolores et quas molestias cepturi
                    sint eca itate non similique sunt in culpa modi tempora incidunt obtain pain
                </p>

                <div class="row InputSection">
                    <div class="col-md-6">
                        <input type="text" placeholder="Name" class="inputClass">
                    </div>
                    <div class="col-md-6">
                        <input type="email" placeholder="email" class="inputClass">
                    </div>
                </div>

                <div class="row InputSection">
                    <div class="col-md-6">
                        <input type="text" placeholder="Number" class="inputClass">
                    </div>
                    <div class="col-md-6">
                        <input type="email" placeholder="Subject" class="inputClass">
                    </div>
                </div>

                <div class="row InputSection">
                    <textarea type="text" placeholder="Message" class="inputtextArea" ></textarea>
                </div>

                <button type="button" class="ContactUsSubmit">Submit</button>

            </div>

        </div>

    </section>

@endsection

