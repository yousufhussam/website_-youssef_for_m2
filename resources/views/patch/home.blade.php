<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Metin2</title>
        <script type="text/javascript" src="{{ asset('assets/patch/js/jquery-1.3.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/patch/js/jquery.pngFix.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).pngFix();
            });
        </script>
        <style type="text/css">
            body {
                font-family: Arial;
                background-color:#ffffff;
                margin:0;
                padding:0;
                color:#ffffff;
            }

            a, a:hover {
                color:#ffffff;
            }

            h1 {
                font-size: 14px;
                line-height: 13px;
                font-weight: bold;
                margin-bottom: -5px;
            }

            p {
                font-size: 12px;
                line-height: 14px;
                font-weight: normal;
            }

            .background {
                background:url('{{ asset('assets/patch/img/bg.png') }}') no-repeat;
                display: block;
                height: 315px;
                left: 0;
                position: relative;
                top: 0;
                width: 562px;
            }

            .allwidth {
                position:absolute;
                top:5px;
                left:5px;
                width:552px;
                height:280px;
            }

            .text01 {
                margin-top:135px;
                margin-left:75px;
                width:405px;
                height:135px;
                display:block;
            }

            .footer {
                clear: both;
                color: white;
                display: block;
                font-family: Verdana,Arial,Helvetica,sans-serif;
                font-size: 12px;
                font-weight: bold;
                left: 0;
                margin: 0;
                overflow: hidden;
                position: absolute;
                text-align: center;
                top: 288px;
                width: 562px;
                height: 25px;
                z-index: 10;
            }
        </style>
    </head>

    <body scroll="no">
        <div class="background">
            <div class="allwidth" style="background:url('{{ asset('assets/patch/img/bg_01_metin2.jpg') }}') no-repeat;">
                <div class="text01">
                    <h1>Welcome to Metin2!</h1>
                    <p>Discover an eastern fantasy world full of adventure and dark dangers! Roam fascinating landscapes and enter gripping battles with allies by your side. Choose between being a Warrior, Ninja, Shaman or Sura and become a martial arts master. Strong mounts and loyal companions will follow you on your path. Face your fate and become the hero of a whole continent!</p>
                </div>
            </div>
            <div class="footer">
                <a href="{{ url('legal/imprint') }}" target="_blank">{{ __('app/main.footer.imprint') }}</a>
                -
                <a href="{{ url('legal/terms') }}" target="_blank">{{ __('app/main.footer.terms') }}</a>
                -
                <a href="{{ url('legal/privacy') }}" target="_blank">{{ __('app/main.footer.privacy') }}</a>
            </div>
        </div>
    </body>
</html>
