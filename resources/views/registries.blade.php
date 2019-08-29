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
                background-image: url("/images/Pb.jpg") !important;
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

            .box {
                background-color: white;
                height: 80%;
                width: 40%;
                padding-left: 10px;
                padding-right: 10px;
            }

            p {
                padding: 20px;
                text-align: justify;
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

            .lclogo {
                height: 50px;
                width: 70%;
                padding-left: 15%;
                padding-bottom: 20px;
                padding-top: 20px;
            }

            .homelogo {
                height: 90px;
                width: 70%;
                padding-left: 15%;
                padding-bottom: 20px;
            }

            .yclogo {
                height: 90px;
                width: 70%;
                padding-left: 15%;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="box">
                <p> Dit is vir ons die grootste geskenk dat julle die naweek saam ons
                    vier en ons verwag niks meer nie. As julle egter voel julle wil nog iets bygee, om
                    ons lewe saam te ‘kickstart’, kan julle die volgende ‘gift registries’ oorweeg of 'n
                    kontant inbetaling maak in die volgende rekening: N Cilliers FNB Tjekrekening
                    Takkode: 250655 Rekeningnommer: 62817439004</p>
                <div>
                    <a href="https://www.lecreuset.co.za/gift-registry/cillierscelebration201971612547"><img src={{asset('images/lclogo.png')}} alt="Logo" class="lclogo"></a>
                </div>
                <div>
                    <a href="https://www.home.co.za/giftlist/giftRegistry.jsp?pageName=giftRegistryView&giftlistId=gl382574169&page=1"><img src={{asset('images/homelogo.jpg')}} alt="Logo" class="homelogo"></a>
                </div>
                <div>
                    <a href="https://www.yuppiechef.com/registry.htm?action=view&orderid=3971455"><img src={{asset('images/yclogo.png')}} alt="Logo" class="yclogo"></a>
                </div>
            </div>
        </div>
    </body>
</html>
