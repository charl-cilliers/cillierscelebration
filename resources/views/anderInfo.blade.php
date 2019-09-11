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
                background-image: url("/images/lag.jpg") !important;
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
                background-color: black;
                color: white;
            }

            .information {
                /*background-color: white;*/
                color: white;
                width: 750px;
                /*border: solid 1px;*/
                padding: 20px;
                padding-right: 50px;
                margin-left: 250px;
                text-align: justify;
                -moz-box-shadow:    3px 3px 5px 0px #000;/*
                -webkit-box-shadow: 3px 3px 5px 0px #000;
                box-shadow:         3px 3px 5px 0px #000;*/
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
            }

            .m-b-md {
                margin-bottom: 15px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div></div>

                <div class="information">
                    <ul>
                        <li>
                            Beste familie en vriende, ons sien vreeslik baie uit om die hele naweek van 10-
                            12 Jan 2020 saam met julle fees vier te Pat Busch Mountain Reserve. Ons begin
                            reeds Vrydagaand met ‘n verjaarsdagviering vir Inari (wat ouderdom en van
                            verander Saterdag 11 Jan). Julle is welkom om van 16:00 af by ons aan te sluit,
                            maar ons verstaan dat daar sommige mense is wat eers later gaan kan aansluit.
                            Bring asb julle eie drinkgoed vir Vrydagaand, ons sal sorg vir aandete.<br><br>
                            Dit sal vir ons lekker wees as julle Saterdagoggend om en by 11:00 saam met ons sal kom
                            brunch. Ons sal weereens die eetgoed voorsien as julle net ietsie om te drink en
                            ‘n kombers om op te piekniek sal bring. Julle is welkom om ook julle swemklere,
                            handdoek of stapskoene te bring aangesien daar ‘n dam en swembad is om in te
                            swem en ‘n berg wat geklim kan word (julle sal ons waarskynlik by die swem
                            opsie vind).<br><br>
                            Die huweliksbevestiging en feesvieringe sal Saterdag om en by
                            17:00 begin (finale tye sal nader aan die tyd deurgegee word afhangend van die
                            Kaapse Januarie weer). Aandete sal eers ongeveer 21:00 bedien word, so indien
                            julle voel julle gaan nie tot dan hou nie, maak asb seker om iets saam te bring om
                            te eet as ‘n laatmiddag snack (daar sal darem ook vingerhapies wees direk na die
                            seremonie). Ons gaan Saterdagaand feesvier tot die son op kom, so
                            Sondagoggend is almal welkom om op hul eie tyd op te staan en te vertrek. Ons
                            sien uit na ‘n onvergeetlike naweek. Nicolaas en Inari.
                        </li>
                        <br>
                        <li>
                            Inligting aangaande die verblyf op Pat Busch sal per e-pos aan dié wat daar bly
                            gekommunikeer word. As daar enige navrae is, moet asb. nie huiwer om ons te
                            laat weet nie.
                        </li>
                        <br>
                        <li>
                            Gaste wat nie op Pat Busch bly nie moet asb ook op die RSVP aandui of hulle
                            van die shuttle diens vir die naweek gebruik wil maak – die shuttle sal
                            Vrydagaand, Saterdagoggend, -laatmiddag en -aand op verskeie tye in beide
                            rigtings pendel (tussen Pat Busch en die gastehuise wat in ‘n 5km radius van Pat
                            Busch is – m.a.w. die gastehuise wat ons aanbeveel het).
                        </li>
                    </ul>
                </div>

                <div class="links">
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/invitation') }}">Uitnodiging</a>
                    <a href="{{ url('/rsvp') }}">RSVP</a>
                    <a href="{{ url('/registries') }}">Registries</a>
                    <a href="{{ url('/info') }}">Ekstra Inligting</a>
                </div>
            </div>
        </div>
    </body>
</html>
