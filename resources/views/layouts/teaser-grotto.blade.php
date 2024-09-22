<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Metin 2 - Grota Exilului</title>
        <link href="{{ asset('assets/teaser/grotto/css/reset.css') }}" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/teaser/grotto/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/teaser/grotto/css/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/teaser/grotto/css/lytebox.css') }}">
        <style>
            .play a {
                background: url("{{ asset('assets/teaser/grotto/img/play_en.gif') }}");
            }

            .play a:hover {
                background-position: 0 -79px;
            }
        </style>

        <!--[if gte IE 8]>
            <style>
                .content_background {
                    background-position: 1px 0;
                    width: 707px;
                }

                .footer_background {
                    background-position: 0 0;
                }
            </style>
        <![endif]-->

        <!--[if lte IE 7]>
            <link href="{{ asset('assets/teaser/grotto/css/style_ie.css') }}" type="text/css" rel="stylesheet"/>
        <![endif]-->

        <!--[if lt IE 7]>
            <link href="{{ asset('assets/teaser/grotto/css/style_ie6.css') }}" type="text/css" rel="stylesheet"/>
        <![endif]-->

        <script src="{{ asset('assets/teaser/grotto/js/lytebox.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/teaser/grotto/js/flowplayer-3.1.4.min.js') }}" type="text/javascript"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body style="background:#000 url({{ asset('assets/teaser/grotto/img/background_en.jpg') }}) no-repeat 50% top;">
        <div id="caution_ie">
            Der aktuell genutzte Browser ist veraltet. Bitte aktualisiere den Browser auf eine neuere Version:
            <a href="http://www.microsoft.com/germany/windows/internet-explorer/default.aspx">Internet Explorer</a>
            oder <a href="http://www.browser1.de/content/view/5/127/">Mozilla Firefox</a>.
        </div>

        <div id="page">
            <div id="header">
                <div class="play"><a href="{{ url('/') }}" target="_blank"></a></div>
                <h1><a href="{{ route('teaser.grotto.home') }}" title="Metin 2 - Grota Exilului">Metin 2 - Grota Exilului</a></h1>
            </div>

            @yield('content')
        </div>

        <div id="footer">
            <div class="footer_background">
                <ul>
                    <li class="first">
                        Published by <a href="http://www.gameforge.de/">Gameforge 4D GmbH</a>.
                        Copyright YMIR Co., Ltd. All rights reserved.
                    </li>
                    <li><a target="_blank" href="{{ url('legal/imprint') }}">{{ __('app/main.footer.imprint') }}</a></li>
                    <li><a target="_blank" href="{{ url('legal/terms') }}">{{ __('app/main.footer.terms') }}</a></li>
                </ul>
            </div>
        </div>
        <div style="display: none;">
        </div>
    </body>
</html>
