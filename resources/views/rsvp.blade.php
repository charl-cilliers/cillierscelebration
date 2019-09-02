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
                background-image: url("/images/b.jpg") !important;
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
                display: flex;
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
                font-size: 84px;
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
                margin-bottom: 75px;
            }

            .form {
                height: 80%;
                width: 40%;
                padding-top: 50px;
                position: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="form">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfUbXb0cHSnmlwW3TjUd-RcOl1exXdIwIaghpcoj9mS3pAJdw/viewform?embedded=true" width="640" height="500" frameborder="0" marginheight="0" marginwidth="0" scrolling="yes">Loading…</iframe>
                </div>
        </div>
            <div class="links flex-center">
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/ander') }}">10-12 Januarie</a>
                <a href="{{ url('/invitation') }}">Uitnodiging</a>
                <a href="{{ url('/registries') }}">Registries</a>
                <a href="{{ url('/info') }}">Ekstra Informasie</a>
            </div>
        </div>
    </body>
</html>
