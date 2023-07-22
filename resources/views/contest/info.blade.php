@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div id="download" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Competitia Cosplay - Participare</h2>
                    <div class="download-inner-content">
                        <p id="downloadText">
                            Esti un razboinic neinfricat in armura stralucitoare ce sta in umbra? Te-ar prinde bine un costum al intunecatului Sura? Atunci ia parte la Competitia Internationala Cospaly Metin2 si adu-ti caracterul preferat la viata!                        </p>
                        <p id="downloadText">
                            Fie ca esti un maestru in manuirea masinii de cusut sau un geniu creativ atunci cand pui mana pe cutiile de carton: creeaza un costum Metin2 si arata-l comunitatii - cel mai bine imbracat erou va fi recompensat cu niste premii fantastice cum ar fi un Gaming PC sau noul iPad! Inregistreaza-te folosind acesti pasi. Mai multe informatii dar si regulile pot fi gasite pe forum la <a href="https://web.archive.org/web/20120605085514/http://board.metin2.ro/">http://board.metin2.ro</a>.                        </p>
                        <p class="contest-inner-content">
                            <a class="btn-big" href="{{ url('contest/register') }}">Înregistrare</a>
                        </p>
                        <p>
                            <a href="{{ url('contest/awards') }}" class="btn awards">Catre premii</a>
                        </p>
                        <div class="gallerybox">
                            <h4>Cateva exemple</h4>
                            <div id="screenshots" class="comic">
                                <a class="first" id="0|qXOfnZnCu-c%2C" href="https://web.archive.org/web/20120605085514/http://gf2.geo.gfsrv.net/cdn72/97fb72978fd1ce8f5a6ce748f532fc.jpg" rel="group">
                                    <img src="https://web.archive.org/web/20120605085514im_/http://gf3.geo.gfsrv.net/cdn59/87cc791b03033933cc088afd97d790.jpg" alt="Screenshots"/>
                                </a>
                                <br class="clearfloat"/>
                            </div>
                            <br class="clearfloat"/>
                            <a class="btn-big togallery" href="{{ url('contest/voting') }}">Toate costumele</a>
                        </div>
                        <div class="gallerybox">
                            <h4>Reguli</h4>
                            <ul class="rules">
                                <li>Lasa-ti imaginatia sa zburde si aluta-te! Inregistreaza-te azi folosind <a href="{{ url('contest/register') }}">formularul de inregistrare</a> si trimite-ne intrarile pana la 26.08.2012.</li>
                                <li>Creatia trebuie sa fie munca proprie si nu trebuie facuta cu ajutorul altcuiva.</li>
                                <li>Trebuie sa trimiteti cel putin o fotografie a creatiei complete dar si cel putin trei fotografii din timpul procesului de creatie. Formatul pozelor trebuie sa fie doar *.jpg sau *.png</li>
                                <li>Intrarile permise in concurs pot fi costume dar si arme individuale ce se regasesc in Metin2.</li>
                                <li>Toate intrarile in concurs ce se supun regulilor vor fi publicate pe site-ul nostru. Va rugam sa cititi cu atentie regulile si toate cerintele pentru participare ce se regasesc pe <a href="http://board.metin2.ro/">forum</a>.</li>
                                <li>Votarea pentru costumul favorit va incepe la 30.08.2012.</li>
                                <li>Toate conturile Metin2 inregistrate inainte de inceperea concursului pot participa la votare. Conturile create dupa 23.05.2012 nu sunt permise.</li>
                                <li>Poti fi tinut la curent cu toate noutatile pe forum la <a href="http://board.metin2.ro/">http://board.metin2.ro</a>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#screenshots a").fancybox({
                target:         '#gallery',
                expose:         '#000',
                titlePosition:    'inside',
                titleFormat:     formatTitle,
                autoScale: false
            }).gallery({
                next:   '.forward',
                prev:   '.back',
                speed: 800
            });
            function formatTitle(title, currentArray, currentIndex, currentOpts) {
                var data = currentArray[currentIndex]['id'].split('|');
                return '<div id="tip7-title"><p></p><a href="{{ url("contest/details/") }}' + data[1] + '" class="btn-big">Detalii</a></div>';
            }
        });
    </script>
@endsection
