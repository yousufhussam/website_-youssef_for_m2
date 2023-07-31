@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="two-boxes">
            <div class="two-boxes-top">
                <div class="two-boxes-bottom">
                    <div class="box">
                        <h2>Metin2</h2>
                        <div class="body"><p>Bine ai venit la Metin2!</p>
                            <p>Paseste intr-o lume fantastica cu orase pitoresti si peisaje impresionante.</p><p>
                            </p><p>Te asteapta lupte primejdioase!</p><p>
                            </p><p>Devino maestru in artele martiale si protejeaza-ti tara de Forta neagra a Pietrelor Metin.</p></div>
                    </div>
                    <div class="box box-right">
                        <h2>Trailer</h2>
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
                                <a href="{{ url('teaser/grotto') }}" target="_blank"><img src="{{ asset('assets/main/img/banner/ro/gdvteaser.jpg') }}" width="480px" /></a>
                            </div>
                            <div class="panel">
                                <a href="{{ url('teaser/dc') }}" target="_blank"><img src="{{ asset('assets/main/img/banner/ro/dcbanner.jpg') }}" width="480px" /></a>
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
                    <h2>Screenshots</h2>
                    <div id="screenshots">
                        <a class="first" title="Captura 1" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot01.jpg') }}">
                            <img alt="Captura 1" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb01.jpg') }}" width="100" height="75" />
                        </a>
                        <a class="first" title="Captura 2" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot02.jpg') }}">
                            <img alt="Captura 2" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb02.jpg') }}" width="100" height="75" />
                        </a>
                        <a class="first" title="Captura 3" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot03.jpg') }}">
                            <img alt="Captura 3" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb03.jpg') }}" width="100" height="75" />
                        </a>
                        <a class="first" title="Captura 4" href="{{ asset('assets/main/img/screenshots/mmorpg-fantasy-metin2-screenshot04.jpg') }}">
                            <img alt="Captura 4" src="{{ asset('assets/main/img/screenshots/thumbs/mmorpg-fantasy-metin2-thumb04.jpg') }}" width="100" height="75" />
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
                    <h2>Noutăți</h2>
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
                        <a href="{{ url('main/news') }}" class="btn">Mergi la noutăți</a>
                        <br class="clearfloat">
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow"></div>

        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Actiunea Orientala MMORPG</h2>
                    <div class="inner-content">
                        <p>In vremuri stravechi rasuflarea Zeului Dragon veghea asupra regatelor Shinsoo, Chunjo
                            si  Jinno. Dar aceasta <strong>lume fascinanta a magiei</strong> se afla
                            in fata unui pericol imens: Impactul <strong>Pietrelor Metin</strong> care au cauzat haos
                            si distrugere pe continent si intre locuitori. Au izbucnit razboaie intre continente, animalele salbatice s-au transformat
                            in bestii terifiante. Lupta impotriva <strong>influentei negative a Pietrelor Metin</strong>
                            in postura unui <strong>aliat al Zeului Dragon</strong>. <strong>Aduna-ti toate puterile
                                si armele</strong> pentru a salva regatul.</p>

                        <h3>Caracteristici</h3>
                        <ul>
                            <li>Un continent, patruns de violenta, unde razboinici cu totul
                                si cu totul deosebiti, trebuie sa-si dovedeasca curajul
                                in nenumarate aventuri.</li>
                            <li>Trei regate care se dusmanesc intre ele, si carora, le poti pune la dispozitie forta ta
                                si curajul tau.</li>
                            <li>Poarta-ti luptele pe jos sau calare, si nu numai pentru a obtine putere
                                si proprietati, ci si din onoare!</li>
                            <li>Devino stapanul unei cetati, si, impreuna cu obstea ta, construieste propria fortareata!</li>

                            <li>Invata numeroasele stiluri de lupta si insuseste-ti, prin antrenament special, tot felul de abilitati, pentru a-ti
                                infrange inamicul!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow"> </div>
    </div>

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
