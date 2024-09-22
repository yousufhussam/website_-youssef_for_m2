<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Catacomba Diavolului</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/teaser/dc/css/reset.css') }}" media="all"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/teaser/dc/css/main.css') }}"/>
        <link rel="alternate" type="application/rss+xml" title="RSS" href="{{ url('teaser/dc/rss') }}"/>

        <script src="{{ asset('assets/teaser/dc/js/jquery-1.4.4.min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ asset('assets/teaser/dc/css/prettyPhoto.css') }}" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
        <script src="{{ asset('assets/teaser/dc/js/jquery.prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">

            $(document).ready(function(){
                $("a[rel^='prettyPhoto']").prettyPhoto({
                    animation_speed: 'fast', /* fast/slow/normal */
                    slideshow: 3000, /* false OR interval time in ms */
                    autoplay_slideshow: false, /* true/false */
                    opacity: 0.80, /* Value between 0 and 1 */
                    show_title: false, /* true/false */
                    allow_resize: true, /* Resize the photos bigger than viewport. true/false */
                    default_width: 500,
                    default_height: 344,
                    counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
                    theme: 'pp_default', /* pp_default / light_rounded / dark_rounded / light_square / dark_square / facebook */
                    horizontal_padding: 20, /* The padding on each side of the picture */
                    hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
                    wmode: 'opaque', /* Set the flash wmode attribute */
                    autoplay: false,
                    social_tools: false
                });
            });

        </script>
    </head>

    <body>
        <div id="page">
            <!-- History & Video -->
            <div id="headcontent">
                <div id="story">
                    <div class="bar">Viziteaza Catacomba Diavolului</div>
                    <div class="maintext">Pentru un moment chiar ai crezut ca ai avut grija de Grim Reaper. Dar odata ce pasesti in Catacomba Diavolului, simti cum te patrunde o apasare rece. Simti imediat: moartea domneste aici jos. Ca intotdeauna. Plansul celor condamnati te acompaniaza pas cu pas. Crispat, ridici sabia: l-ai distrus pe Grim Reaper o data si o vei face si a doua oara!</div>
                </div>
                <a class="youtube" href="https://www.youtube.com/watch?v=WzUOlatuOTs" rel="prettyPhoto" title="Trailer 1"></a>
                <a class="gratisbutton" href="{{ url('user/register') }}" target="_blank">
                    <img src="{{ asset('assets/teaser/dc/img/play_ro.png') }}" alt="Ia parte!"/>
                </a>
            </div>
            <div id="content">
                <!-- Navigation -->
                <div id="navigation">
                    <a class="index_nav" href="{{ route('teaser.dc.home') }}">Poveste</a>
                    <a class="news_nav" href="{{ route('teaser.dc.news') }}">Noutăți</a>
                    <a class="media_nav" href="{{ route('teaser.dc.media') }}">Galerie</a>
                </div>

                <div class="clear"></div>

                @yield('content')

                <div class="clear"></div>

                <!-- Footer -->
                <div id="footer">
                    <a class="playbutton" href="{{ url('user/register') }}" target="_blank">Ia parte!</a>
                    <a class="gameforgelogo" href="http://www.gameforge.com/" target="_blank"></a>
                    <p>Publicat de <a href="http://www.gameforge.com/">Gameforge 4D GmbH</a>. Drepturi de autor YMIR Co., Ltd. Toate drepturile rezervate.<br/>
                        <a href="{{ url('legal/imprint') }}" target="_blank">{{ __('app/main.footer.imprint') }}</a>
                        <a href="{{ url('legal/terms') }}" target="_blank">{{ __('app/main.footer.terms') }}</a>
                        <a href="{{ url('legal/privacy') }}" target="_blank">{{ __('app/main.footer.privacy') }}</a>
                    </p>
                </div>
            </div>
            <div style="display: none;">
            </div>
        </div>
    </body>
</html>
