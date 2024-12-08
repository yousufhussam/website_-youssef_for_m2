@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="two-boxes">
            <div class="two-boxes-top">
                <div class="two-boxes-bottom">
                    <div class="box">
                        <h2>{{ __('app/content/home.welcome.title') }}</h2>
                        <div class="body">
                            <p>{{ __('app/content/home.welcome.subtext_1') }}</p>
                            <p>{{ __('app/content/home.welcome.subtext_2') }}</p>
                            <p></p>
                            <p>{{ __('app/content/home.welcome.subtext_3') }}</p>
                            <p></p>
                            <p>{{ __('app/content/home.welcome.subtext_4') }}</p>
                        </div>
                    </div>
                    <div class="box box-right">
                        <h2>{{ __('app/content/home.trailer.title') }}</h2>
                        <div class="video">
                            <object wmode="opaque" width="221" height="131">
                                <param name="wmode" value="opaque">
                                <param name="movie" value="{{ asset('assets/main/img/movies/videoPlayer.swf') }}">
                                <param name="allowFullScreen" value="true">
                                <embed src="{{ asset('assets/main/img/movies/videoPlayer.swf') }}" type="application/x-shockwave-flash" allowfullscreen="true" wmode="opaque" width="221" height="131">
                            </object>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content banner">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <div class="coda-slider-wrapper">
                        <div class="coda-slider preload" id="coda-slider-1">
                            <div class="panel">
                                <a href="{{ url('teaser/grotto') }}" target="_blank"><img src="{{ asset('assets/main/img/banner/en/gdvteaser.jpg') }}" width="480px" /></a>
                            </div>
                            <div class="panel">
                                <a href="{{ url('teaser/grotto') }}" target="_blank"><img src="{{ asset('assets/main/img/banner/en/gdvteaser-2.jpg') }}" width="480px" /></a>
                            </div>
                            <div class="panel">
                                <a href="{{ url('teaser/dc') }}" target="_blank"><img src="{{ asset('assets/main/img/banner/dcbanner.jpg') }}" width="480px" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow"></div>

        <div class="content">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/content/home.screenshots.title') }}</h2>
                    <div id="screenshots">
                        <a class="first" title="{{ __('app/content/home.screenshots.capture') }} 1" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot01.jpg') }}">
                            <img alt="{{ __('app/content/home.screenshots.capture') }} 1" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb01.jpg') }}" width="100" height="75" />
                        </a>
                        <a class="first" title="{{ __('app/content/home.screenshots.capture') }} 2" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot02.jpg') }}">
                            <img alt="{{ __('app/content/home.screenshots.capture') }} 2" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb02.jpg') }}" width="100" height="75" />
                        </a>
                        <a class="first" title="{{ __('app/content/home.screenshots.capture') }} 3" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot03.jpg') }}">
                            <img alt="{{ __('app/content/home.screenshots.capture') }} 3" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb03.jpg') }}" width="100" height="75" />
                        </a>
                        <a class="first" title="{{ __('app/content/home.screenshots.capture') }} 4" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot04.jpg') }}">
                            <img alt="{{ __('app/content/home.screenshots.capture') }} 4" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb04.jpg') }}" width="100" height="75" />
                        </a>
                    </div>
                    <br class="clearfloat" />
                </div>
            </div>
        </div>

        <div class="shadow"></div>

        <div class="content">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/content/home.news.title') }}</h2>
                    <div class="inner-content" id="news_compact">
                        <ul>
                            <li>
                                <h4>26.06.2013 11:00:52</h4>
                                <h3><a style="color:#7B1300" href="https://web.archive.org/web/20130708012217/http://board.metin2.ro/index.php?page=Thread&amp;threadID=137942" target="_blank">Ziua tricolorului</a></h3>
                                <p>Dragi jucatori,<br>bucurati-va de aceasta zi si totodata, profitati de 50% xp si 6 ore de drop cutii hexagonale, de la ora 18:00 pana la miezul noptii. <br>Numai bine,<br>Echipa Metin2</p>
                            </li>
                            <li>
                                <h4>24.06.2013 08:40:04</h4>
                                <h3><a style="color:#7B1300" href="https://web.archive.org/web/20130708012217/http://board.metin2.ro/index.php?page=Thread&amp;threadID=137808" target="_blank">Obtine un frumos Panda!</a></h3>
                                <p><br>Draga comunitate,<br>profita de sansa de a detine acest frumos Panda ce va fi disponibil in itemshop de pe 24.06.2013 ora 12:00 pana la miezul noptii, pe 01.07.2013.<br>Deasemenea, in aceeasi <a href="{{ url('main/news') }}" class="news_link">[...]</a></p>
                            </li>
                            <li>
                                <h4>14.06.2013 09:08:18</h4>
                                <h3><a style="color:#7B1300" href="https://web.archive.org/web/20130708012217/http://board.metin2.ro/index.php?page=Thread&amp;threadID=137297" target="_blank">+15% Happy Hour si un frumos Ursulet Polar!</a></h3>
                                <p>Draga comunitate<br>Binevointa Zeului Dragon radiaza peste cele trei regate!<br>Profita de aceasta oportunitate si procura-ti cu 15% mai multe Monede Dragon azi! 14.06.2013 incepand cu ora 12;00 pana <a href="{{ url('main/news') }}" class="news_link">[...]</a></p>
                            </li>
                        </ul>
                        <a href="{{ url('main/news') }}" class="btn">{{ __('app/content/home.news.button_go_to_news') }}</a>
                        <br class="clearfloat">
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow"></div>

        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/content/home.main.title') }}</h2>
                    <div class="inner-content">
                        <p>{!! Str::inlineMarkdown(__('app/content/home.main.subtext')) !!}</p>

                        <h3>{{ __('app/content/home.main.characteristics') }}</h3>
                        <ul>
                            <li>{{ __('app/content/home.main.subtext_1') }}</li>
                            <li>{{ __('app/content/home.main.subtext_2') }}</li>
                            <li>{{ __('app/content/home.main.subtext_3') }}</li>
                            <li>{{ __('app/content/home.main.subtext_4') }}</li>
                            <li>{{ __('app/content/home.main.subtext_5') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow"> </div>
    </div>

    {{-- Include Ruffle and configure it in order to emulate Adobe Flash for the trailer --}}
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
    <script>
        window.RufflePlayer.config = {
            autoplay: "on",
            unmuteOverlay: "hidden",
            contextMenu: "off",
            splashScreen: false,
        };

        {{-- Override fetch of hardcoded URL in .swf file; https://github.com/ruffle-rs/ruffle/issues/1486 --}}
        (function (originalFetch) {
            const changeUrl = function (url) {
                if (url.includes("/metin2/img/metin2_movie2.flv"))
                    url = "{{ asset('assets/main/img/movies/metin2_movie2.flv') }}";

                return url;
            };
            window.fetch = function () {
                let a = Array.from(arguments);
                if (typeof(a[0]) === "string") {
                    //Argument to fetch() call is a raw URL string
                    a[0] = changeUrl(a[0]);
                } else if (a[0] && typeof(a[0].url) === "string") {
                    //Argument to fetch() call is a request object
                    //HACK: This replaces the entire request object with an URL
                    //      because the Request.url property is readonly.
                    //      This is appropriate for GET requests only.
                    const changedUrl = changeUrl(a[0].url);
                    if (changedUrl !== a[0].url) {
                        a[0] = changedUrl;
                    }
                }
                return originalFetch.apply(window, a);
            };
        })(window.fetch);
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#screenshots a").overlay({
                target: '#gallery',
                expose: '#000'
            }).gallery({
                next:	'.forward',
                prev: 	'.back',
                speed: 800
            });

            $('#coda-slider-1').codaSlider({
                autoSlide: true,
                autoHeight: false,
                autoSlideInterval: 4000,
                autoSlideStopWhenClicked: true,
                dynamicArrows: false
            });
        });
    </script>
@endsection
