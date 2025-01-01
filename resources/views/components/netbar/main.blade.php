<!-- #MMO:NETBAR# -->
<div id="pagefoldtarget"></div>

<noscript>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        #mmonetbar {
            background: transparent url({{ asset('assets/main/img/netbar/netbar.bg.png') }}) repeat-x;
            font: normal 11px Tahoma, Arial, Helvetica, sans-serif;
            height: 32px;
            left: 0;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 0;
            width: 100%;
            z-index: 3000;
        }

        #mmonetbar #mmoContent {
            height: 32px;
            margin: 0 auto;
            width: 1024px;
            position: relative;
        }

        #mmonetbar #mmoLogo {
            background: transparent url({{ asset('assets/main/img/netbar/netbar.sprites.png') }}) no-repeat top left;
            float: left;
            display: block;
            height: 32px;
            width: 108px;
            text-indent: -9999px;
        }

        #mmonetbar #mmoNews, #mmonetbar #mmoGame, #mmonetbar #mmoFocus, #pagefoldtarget {
            display: none !important;
        }
    </style>
</noscript>

<div id="mmonetbar" class="mmometin2">
    <div id="mmoContent" style="width: 522px;">
        {{--
            <a id="mmoLogo" target="_top" href="#" title="Gameforge.com – Feel free to play">
                Gameforge.com &ndash; Feel free to play
            </a>
        --}}

        <!-- news -->
        <div id="mmoNews">
            <div class="mmoBoxLeft"></div>
            <div class="mmoBoxMiddle" onmouseover="mmoTickHalt=true;" onmouseout="mmoTickHalt=false;">
                <div class="mmoNewsContent">
                    <div id="mmoNewsticker">
                        <ul>
                            <li class="mmoTickShow">
                                <a target="_top" href="#">
                                    {{ __('app/netbar.no-news') }}
                                </a>
                            </li>
                            <li>
                                <a target="_top" href="#">
                                    {{ __('app/netbar.no-news') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mmoBoxRight"></div>
        </div>


        <div id="mmoGame" class="mmoGame" style="width: auto;">
            <div class="mmoBoxLeft"></div>
            <div class="mmoBoxMiddle">

                <!--<div id="mmoGames"></div>-->

                <div id="mmoLangs">
                    <label>{{ __('app/netbar.select-language') }}</label>
                    <div id="mmoLangSelect" class="mmoSelectbox">
                        <div id="mmoSarea1" onclick="mmoShowOptions(1)" class="mmoSelectArea">
                            <div class="mmoSelectText" id="mmoMySelectContent1">
                                <div id="mmoMySelectText1" class="mmoflag mmo_{{ __('app/netbar.current-language-code') }}">
                                    {{ __('app/netbar.current-language') }}
                                </div>
                            </div>
                            <div class="mmoSelectButton"></div>
                        </div>
                        <div class="mmoOptionsDivInvisible" id="mmoOptionsDiv1">
                            <ul class="mmoLangList mmoListHeight" id="mmoList1">
                                @foreach (\App\Http\Controllers\LanguageController::$supportedLanguages as $language)
                                    <li @class(['mmoActive' => app()->getLocale() == $language])>
                                        <a href="{{ route('set-language', ['language' => $language]) }}" target="_top" rel="nofollow" class="mmoflag mmo_{{ strtoupper($language) }}">
                                            {{ __("app/netbar.lang.{$language}") }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mmoBoxRight"></div>

            {{-- <x-netbar.games-overview /> --}}
        </div><!-- /mmoGame -->
        <input id="mmoFocus" type="text" size="5"/>
    </div><!-- /mmoContent -->
</div><!-- /mmonetbar -->

<!-- metin2/en game 08.07.2013 20:42 -->
<script type="text/javascript">
    mmoInitSelect();
    mmoTicker();
    mmoToggleDisplay.init("mmoGamesOverviewPanel");
</script>


<!-- #/MMO:NETBAR# -->
