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
                background-image: url("/images/sonfoto.jpg") !important;
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
                /*text-align: center;*/
                color: white;
                width: 700px;
                padding: 10px 10px 10px 10px;
                text-align: justify;
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
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            <div>
                <div class="content">
                    <ul>
                        <li>
                            <b>Tydsverloop - </b>Hierdie is net ‘n voorlopige raamwerk, ons sal nader aan die tyd
                            die finale tye deurgee. Hou asb die webwerf so maand voor die troue dop en
                            luister maar mooi wat die MC tydens die naweek laat weet.
                        </li>
                        <ul>
                            <li>Vrydag 10 Januarie</li>
                            <ul>
                                <li>16:00 – Gaste begin arriveer te Pat Busch Mountain Reserve</li>
                                <li>20:00 – Aandete</li>
                            </ul>
                            <li>Saterdag 11 Januarie</li>
                            <ul>
                                <li>10:00 – Brunch te Pat Busch Mountain Reserve</li>
                                <li>16:30 – Seremonie begin onder die Groot Boom</li>
                                <li>17:45 – Pre-drinks en Harvest Table by die swembad</li>
                                <li>19:45 – Onthaal begin op die Meadow</li>
                                <li>21:00 – Aandete</li>
                            </ul>
                            <li>Sondag 12 Januarie</li>
                            <ul>
                                <li>Gaste vertrek op hul eie tyd</li>
                            </ul>
                        </ul>
                    </ul>
                </div>

                <div class="content">
                    <ul>
                        <li><b>Algemene inligting</b></li>
                        <ul>
                            <li>Daar is nie baie sein op die venue nie, so berei maar voor daarop. Laai
                                voor die tyd die padkaart af en maak al jou reëlings.</li>
                            <li>Robertson is so 20 min van die venue af.</li>
                            <li>Daar is 'n klein winkeltjie by die venue met die basiese koeldranke, tjips,
                                ens.</li>
                            <li>Die venue is aan die einde van 'n redelike goeie grondpad, maar hou dit
                                maar in gedagte as julle besluit waarmee om te ry en probeer saamry
                                waar julle kan.</li>
                            <li>Ons verskaf etes vir Vrydagaand, Saterdag brunch en Saterdagaand. As
                                julle meer as dit nodig het, bring asb iets saam (waarskynlik vir Saterdag
                                laatmiddag en iets vir Sondagoggend).</li>
                            <li>Ons vier Vrydagaand 'n paar verjaarsdae so bring asb julle eie drinks
                                saam. Bring ook iets te drink saam vir Saterdag deur die dag.
                                Daar sal 'n volle kroeg wees by die troue.</li>
                        </ul>
                    </ul>
                </div>

                <div class="content">
                    Link to Google Maps: <a href="https://www.google.com/maps/dir/Cape+Town+International+Airport,+Matroosfontein,+Cape+Town/Pat+Busch+Mountain+Reserve,+Bergendal+Farm,+Bergendal+Road,+Klaasvoogds+West,+Robertson,+6705/@-33.8951121,18.7254651,9z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x1dcc4542f7400bbd:0x40487579e3cf5e90!2m2!1d18.6020851!2d-33.971463!1m5!1m1!1s0x1dd2425331ddb491:0x8a107c0604fb4125!2m2!1d19.996848!2d-33.776671!3e0">Google maps</a>
                </div>

                <div class="links">
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/ander') }}">10-12 Januarie</a>
                    <a href="{{ url('/invitation') }}">Uitnodiging</a>
                    <a href="{{ url('/rsvp') }}">RSVP</a>
                    <a href="{{ url('/registries') }}">Registries</a>
                </div>
            </div>
        </div>
    </body>
</html>
