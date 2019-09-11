<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body {
                background-image: url("/images/home1.jpg") !important;
                height: 100%;
                width: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                /*display: flex;*/
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: white;
                margin-top: 50px;
                font-size: 84px;
            }

            .stitle {
                color: white;
                font-size: 40px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: #1d2124;
            }
            .quote {
                color: white;
                margin-bottom: 50px;
                font-size: 40px;
                font-style: italic;
            }

            .m-b-md {
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title">
                    Cilliers Celebration
                </div>
                <div class="stitle">
                    10-12 January 2020
                </div>

                <div></div>

                <div class="links">
                    <a href="{{ url('/ander') }}">10-12 Januarie</a>
                    <a href="{{ url('/invitation') }}">Uitnodiging</a>
                    <a href="{{ url('/rsvp') }}">RSVP</a>
                    <a href="{{ url('/registries') }}">Registries</a>
                    <a href="{{ url('/info') }}">Ekstra Inligting</a>
                </div>

                <div class="title" style="font-style: italic; margin-top: 300px; font-size: 40px">
                        “Love is not an emotion, it is your very existence” - Rumi
                </div>

            </div>
        </div>
    </body>
</html>
