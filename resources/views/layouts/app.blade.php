<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <title>{{ config('app.name', 'Metin2') }} - {{ __('app/main.title') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="description" content="MMORPG Metin2" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link href="{{ asset('assets/main/css/reset.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/main/css/all.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link  href="{{ asset('assets/main/css/plugins.css') }}" rel="stylesheet" type="text/css" media="screen" />

    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/ie6.css') }}" media="screen"/><![endif]-->
    <!--[if gte IE 6]><link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/ie7.css') }}" media="screen"/><![endif]-->
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery-latest.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.validationEngine.modified.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.validationEngine.rules.php') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/iepngfix_tilebg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.fancybox-1.3.1.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.codaslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.bgiframe.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/jquery.jeditable.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/main/js/main.js') }}"></script>
    <script type="text/javascript">
        $.fn.exists = function(){return jQuery(this).length>0;}

        $(document).ready(function(){
            $('#namefield, #emailfield').each(function() {
                var default_value = this.value;
                $(this).focus(function() {
                    if(this.value == default_value) {
                        this.value = '';
                    }
                });
                $(this).blur(function() {
                    if(this.value == '') {
                        this.value = default_value;
                    }
                });
            });

            var fancybox_css = {'outer': {'background' : null}, 'close': {'background_image': null, 'height': null, 'right': null, 'top': null, 'width': null}};
            $('a.itemshop').fancybox({
                'autoDimensions': false,
                'width': 740,
                'height': 550,
                'padding': 0,
                'scrolling': 'no',
                'overlayColor': '#000',
                'overlayOpacity': 0.8,
                'onStart': function() {
                    fancybox_css.outer.background = $('#fancybox-outer').css('background');
                    fancybox_css.close.background_image = $('#fancybox-close').css('background-image');
                    fancybox_css.close.height = $('#fancybox-close').css('height');
                    fancybox_css.close.right = $('#fancybox-close').css('right');
                    fancybox_css.close.top = $('#fancybox-close').css('top');
                    fancybox_css.close.width = $('#fancybox-close').css('width');
                    $('#fancybox-outer').css({'background': 'transparent url("/assets/main/img/isbg.png") center center no-repeat'});
                    $('#fancybox-close').css({'background-image': 'none', 'height': '16px', 'right': '3px', 'top': '7px', 'width': '16px'});
                },
                'onComplete': function() {
                    $('#fancybox-inner').css({'top': 27, 'left':8});
                    $('#fancybox-wrap').css({'width': 756, 'height': 585});
                },
                'onClosed': function() {
                    if (null != fancybox_css.outer.background) { $('#fancybox-outer').css('background', fancybox_css.outer.background); }
                    if (null != fancybox_css.close.background_image) { $('#fancybox-close').css('background-image', fancybox_css.close.background_image); }
                    if (null != fancybox_css.close.height) { $('#fancybox-close').css('height', fancybox_css.close.height); }
                    if (null != fancybox_css.close.right) { $('#fancybox-close').css('right', fancybox_css.close.right); }
                    if (null != fancybox_css.close.top) { $('#fancybox-close').css('top', fancybox_css.close.top); }
                    if (null != fancybox_css.close.width) { $('#fancybox-close').css('width', fancybox_css.close.width); }
                }
            });
            $('a#payment').fancybox({
                'scrolling': 'no',
                'autoDimensions': false,
                'type': 'iframe',
                'width': 790,
                'height': 640,
                'padding': 0,
                'overlayColor': '#000'
            });
            $('a#trailer').fancybox({
                'scrolling': 'no',
                'autoDimensions': false,
                'type': 'iframe',
                'width': 863,
                'height': 520,
                'padding': 0,
                'overlayColor': '#000'
            });
        })
    </script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="page">
        <div class="header-wrapper">
            <div id="header">
                <a class="logo" href="{{ url('/') }}">
                    <strong>{{ config('app.name', 'Metin2') }}</strong>
                </a>

                @guest
                    <div class="header-box">
                        <div id="regBtn">
                            <a id="toReg" href="{{ url('user/register') }}" title="{{ __('app/main.header.register_alt') }}">
                                {{ __('app/main.header.register') }}
                            </a>
                            <div id="regSteps">
                                <a href="{{ url('user/register') }}" title="{{ __('app/main.header.register_alt') }}">
                                    <span>{{ __('app/main.header.register_steps_1') }}</span> »
                                    <span>{{ __('app/main.header.register_steps_2') }}</span> »
                                    <span>{{ __('app/main.header.register_steps_3') }}</span>
                                </a>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $('#regBtn').hover(
                                function () {
                                    $(this).addClass("reg-hover");
                                },
                                function () {
                                    $(this).removeClass("reg-hover");
                                }
                            );
                        </script>
                    </div>
                @else
                    <div id="userBox">
                        <div class="welcome-text welcome-text-left">{{ __('app/main.header.welcome', ['name' => Auth::user()->login]) }}</div>
                        <div class="welcome-text welcome-text-right">{{ __('app/main.header.cash_balance', ['cash' => Auth::user()->cash]) }}</div>
                        <br class="clearfloat" />
                        <div class="header-box-nav-container">
                            <ul class="header-box-nav-login" style="position:absolute; margin-left:-0px;">
                                <li class="stepdown">
                                    <a href="#" class="nav-box-btn nav-box-btn-1">
                                        {{ __('app/main.header.nav.buy_coins') }}
                                    </a>
                                </li>
                                <li class="stepdown">
                                    <a href="{{ url('user/administration') }}" class="nav-box-btn nav-box-btn-2">
                                        {{ __('app/main.header.nav.administration') }}
                                    </a>
                                </li>
                                <li class="stepdown">
                                    <a href="{{ url('user/logout') }}" class="nav-box-btn nav-box-btn-4">
                                        {{ __('app/main.header.nav.logout') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endguest
            </div>
        </div>

        <!-- left column - navigation -->
        <div class="container-wrapper">
            <div class="container">
                <div class="col-1">
                    <div class="boxes-top"></div>
                    <div class="modul-box">
                        <div class="modul-box-bg">
                            <div class="modul-box-bg-bottom">
                                <!-- main navigation -->
                                <ul class="main-nav">
                                    <li class="active"><a href="{{ url('/') }}">{{ __('app/main.nav.home') }}</a></li>
                                    <li><a href="{{ url('main/thegame') }}">{{ __('app/main.nav.thegame') }}</a></li>
                                    <li><a href="{{ url('main/media') }}">{{ __('app/main.nav.media') }}</a></li>
                                    <li><a href="{{ url('main/howto') }}">{{ __('app/main.nav.howto') }}</a></li>
                                    <li><a href="{{ url('main/community') }}">{{ __('app/main.nav.community') }}</a></li>
                                    <li><a href="{{ url('main/wiki') }}">{{ __('app/main.nav.wiki') }}</a></li>
                                    <li><a href="{{ url('main/board') }}">{{ __('app/main.nav.board') }}</a></li>
                                    <li><a href="{{ url('main/download') }}">{{ __('app/main.nav.download') }}</a></li>
                                    <li><a href="{{ url('main/account') }}">{{ __('app/main.nav.account') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="boxes-bottom"></div>
                </div>

                @yield('content')

                <div class="col-3">
                    <div class="boxes-top">&nbsp;</div>
                    @guest
                        <div class="modul-box">
                            <div class="modul-box-bg">
                                <div class="modul-box-bg-bottom">
                                    <h3>{{ __('app/main.login.title') }}</h3>
                                    <form action="{{ url('user/login') }}" method="post">
                                        @csrf

                                        <div class="form-login">
                                            <label>{{ __('app/main.login.username') }}</label>
                                            <div class="input">
                                                <input type="text" name="login"><br>
                                            </div>

                                            <label>{{ __('app/main.login.password') }}</label>
                                            <div class="input">
                                                <input type="password" name="password"><br>
                                            </div>
                                            <div>
                                                <input type="submit" class="button btn-login" value="{{ __('app/main.login.btn_login') }}">
                                                <p class="agbok">
                                                    {!! Str::inlineMarkdown(__('app/main.login.agree_terms', ['url' => url('legal/terms')])) !!}
                                                    <a href="{{ url('user/passwordlostrequest') }}" rel="nofollow" class="password">{{ __('app/main.login.forgot_password') }}</a>
                                                    <a href="{{ url('user/resendack') }}" rel="nofollow" class="password">{{ __('app/main.login.resend_ack') }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="boxes-middle"></div>

                        <div class="modul-box modul-box-2">
                            <div class="modul-box-bg">
                                <div class="modul-box-bg-bottom">
                                    <h3>{{ __('app/main.nav.download') }}</h3>
                                    <a href="{{ url('main/download') }}" class="btn download-btn"></a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="modul-box modul-box-2">
                            <div class="modul-box-bg">
                                <div class="modul-box-bg-bottom">
                                    <h3>{{ __('app/main.nav.download') }}</h3>
                                    <a href="{{ url('main/download') }}" class="btn download-btn"></a>
                                </div>
                            </div>
                        </div>

                        @if (Auth::user()->hasVerifiedEmail())
                            <div class="boxes-middle"></div>
                            <div class="modul-box modul-box-2">
                                <div class="modul-box-bg">
                                    <div class="modul-box-bg-bottom">
                                        <h3>{{ __('app/main.nav.itemshop') }}</h3>
                                        <a href="{{ url('shop') }}" class="itemshop btn itemshop-btn iframe" title="{{ __('app/main.nav.itemshop') }}"></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endguest

                    {{--
                        <div class="boxes-middle">&nbsp;</div>
                        <div class="modul-box modul-box-2">
                            <div class="modul-box-bg">
                                <div class="modul-box-bg-bottom">
                                    <h3>Recruteaza prieteni</h3>
                                    <a id="recruit" href="{{ url('user/recruit') }}" class="btn recruit-btn" title="Recruteaza prieteni"></a>
                                </div>
                            </div>
                        </div>

                        <div class="boxes-middle"></div>
                        <div class="modul-box modul-box-2">
                            <div class="modul-box-bg">
                                <div class="modul-box-bg-bottom">
                                    <h3>Competitia Cosplay</h3>
                                    <a id="contest" href="{{ url('contest') }}" class="btn cosplay-btn" title="Competitia Cosplay"></a>
                                </div>
                            </div>
                        </div>
                    --}}

                    <div class="boxes-middle">&nbsp;</div>

                    <div class="modul-box modul-box-2">
                        <div class="modul-box-bg">
                            <div class="modul-box-bg-bottom">
                                <h3>{{ __('app/main.ranking.title') }}</h3>
                                <h3 style="margin-top:0">{{ __('app/main.ranking.players') }}</h3>
                                <div class="form-score">
                                    <div id="highscore-player">
                                        <ul><li><div class="empire2"><strong class="offset">1</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore" class="first">picyu3</a></div></li><li class="light"><div class="empire1"><strong class="offset">2</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">XXXMEN77</a></div></li><li><div class="empire1"><strong class="offset">3</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">Spydy</a></div></li><li class="light"><div class="empire3"><strong class="offset">4</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">beLeSe</a></div></li><li><div class="empire2"><strong class="offset">5</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">alexdenis</a></div></li><li class="light"><div class="empire3"><strong class="offset">6</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">Pixie03</a></div></li><li><div class="empire3"><strong class="offset">7</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">KingARAGORN</a></div></li><li class="light"><div class="empire1"><strong class="offset">8</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">SCORPIO1</a></div></li><li><div class="empire2"><strong class="offset">9</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">Parazltu</a></div></li><li class="light"><div class="empire2"><strong>10</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/highscore">Sayana</a></div></li></ul>                                                                            </div>
                                    <a href="{{ url('main/highscore') }}" class="btn" rel="nofollow">{{ __('app/main.ranking.btn_highscore') }}</a>
                                </div>
                                <h3 style="margin-top:0">{{ __('app/main.ranking.guilds') }}</h3>
                                <div class="form-score">
                                    <div id="highscore-guild">
                                        <ul><li><div class="empire2"><strong class="offset">1</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore" class="first">InStyle</a></div></li><li class="light"><div class="empire3"><strong class="offset">2</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">ISENGARD</a></div></li><li><div class="empire2"><strong class="offset">3</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">TheRulers</a></div></li><li class="light"><div class="empire2"><strong class="offset">4</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">A55A55INII</a></div></li><li><div class="empire3"><strong class="offset">5</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">TheElfs</a></div></li><li class="light"><div class="empire3"><strong class="offset">6</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">MAESTRIIpur</a></div></li><li><div class="empire2"><strong class="offset">7</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">NeBuNaTiCii</a></div></li><li class="light"><div class="empire1"><strong class="offset">8</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">TheGoDs</a></div></li><li><div class="empire2"><strong class="offset">9</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">7UP</a></div></li><li class="light"><div class="empire2"><strong>10</strong>&ndash;<a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore">ReVoLuTioN</a></div></li></ul>                                                                            </div>
                                    <a href="{{ url('main/guildhighscore') }}" class="btn" rel="nofollow">{{ __('app/main.ranking.btn_highscore') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boxes-bottom"> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer-wrapper">
        <div id="footer">
            <a class="gameforge4d" href="http://ro.gameforge.com" target="_blank" rel="nofollow">gameforge</a>
            <div id="pegi" >
                <a rel="nofollow" target="_blank" href="http://www.pegi.info"><img src="{{ asset('assets/main/img/footer/pegi1.png') }}" title="pegi age" alt="pegi age" id="pegiAge" /></a>
                <img src="{{ asset('assets/main/img/footer/pegi2.png') }}" title="pegi online" alt="pegi online" id="pegiOnline" />
                <img src="{{ asset('assets/main/img/footer/pegi3.png') }}" title="pegi violence" alt="pegi violence" id="pegiViolence" />
            </div>
            <ul>
                <li class="first">
                    © 2006 YMIR Entertainment Co., Ltd., Published by Gameforge 4D GmbH. All rights reserved. All trademarks are the property of their respective owners.
                </li>
                <li class="impressum"><a href="{{ url('legal/imprint') }}" target="_blank" rel="nofollow">{{ __('app/main.footer.imprint') }}</a></li>
                <li><a href="{{ url('legal/terms') }}" target="_blank" rel="nofollow">{{ __('app/main.footer.terms') }}</a></li>
                <li><a href="{{ url('legal/privacy') }}" target="_blank" rel="nofollow">{{ __('app/main.footer.privacy') }}</a></li>
            </ul>
        </div>
    </div>
    <div id="lbBottomContainer" style="display: none;">
        <div id="lbBottom"></div>
        <a id="lbCloseLink" href="#"></a>
        <div id="lbCaption">
            <div id="lbNumber">
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    <div class="simple_overlay" id="gallery"> <a class="back">back</a> <a class="forward">forward</a> <img class="progress" src="{{ asset('assets/main/img/loading2.gif') }}" alt="..." /> </div>
    <div class="overlay" id="overlay">
        <div class="contentWrap"></div>
    </div>
    <div style="display: none;">
    </div>
</body>
</html>
