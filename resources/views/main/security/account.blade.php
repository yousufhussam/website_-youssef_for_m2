@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <div class="about-inner-content">
                        <h2>Informatii Generale</h2>
                        <div class="securitybox-info">
                            <p>Gameforge trateaza foarte serios securitatea conturilor voastre. Pentru asta, am adunat la un loc cateva informatii importante pentru a va ajuta si invata sa fiti precauti atunci cand vine vorba sa deveniti o<em class="highlighted">victima a conturilor furate sau a metodelor de fraudare</em>. Daca se intampla asta sau pentru a pre-intampina acest lucru, puteti citii ce sa faceti in astfel de cazuri.</p>
                        </div>
                        <ul class="tabs-nav tabs4-big">
                            <li id="tab1" class="selected">
                                <a href="{{ url('main/account') }}">Furtul de Cont</a>
                            </li>
                            <li id="tab2">
                                <a href="{{ url('main/pc') }}">Securitate PC</a>
                            </li>
                            <li id="tab3">
                                <a href="{{ url('main/cheat') }}">Frauda</a>
                            </li>
                            <li id="tab4">
                                <a href="{{ url('main/help') }}">Ajutor!</a>
                            </li>
                        </ul>
                        <div class="securitybox">
                            <h4>Impartirea contului</h4>
                            <p>Impartirea contului se intampla atunci cand permiti altor jucatori sa se conecteze pe <em class="highlighted">contul tau</em>, sau atunci cand tu joci pe contul altora. Chiar daca ai incredere in persoanele respective, iti asumi un <em class="highlighted">risc</em> oferindu-le datele contului tau. Poti fi sigur de o securitate completa doar atunci cand nu imparti aceste date de logare cu nimeni si sub nicio forma.<br/><br/>

                                Tine minte ca jucatorii ce impart datele contului cu altcineva <em class="highlighted">incalca termenii si conditiile de folosire</em>. Un jucator al carui cont este folosit si de altcineva, nu va beneficia de suport din partea echipei pentru niciun serviciu. Daca se intampla sa se piarda obiecte sau caractere, nu se va oferi ajutor deoarece conturile impartite nu au dreptul de a beneficia de acest lucru.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Site-uri de frauda sau mailuri de phishing</h4>
                            <p>Multe site-uri sau mail-uri primite fac reclama la Monede Dragon gratuite, obiecte gratuite, crestere rapida in level, drepturi de GM, hakuri etc.<br/><br/>

                                Datele personale ale contului Metin2 trebui introduse numai pe <em class="highlighted">site-ul oficial</em>:
                                <a href="{{ url('/') }}">{{ url('/') }}</a><br/><br/>

                                Toate celelalte site-uri va pot inregistra parola si o pot folosi pentru <em class="highlighted">a va fura contul</em>. <br/><br/>

                                Aici aveti un exemplu de site care fraudeaza:</p>
                        </div>
                        <div class="securitybox">
                            <a id="single_image" href="{{ asset('img/fraud.jpg') }}">
                                <img style="max-width:455px; max-height:none; margin-left:6px; margin-top:6px;" src="{{ asset('img/fraud.jpg') }}"/>
                            </a>
                            <p>&nbsp;</p>
                        </div>
                        <div class="securitybox">
                            <h4>Softuri malitioase (Malware/Keyloggere)</h4>
                            <p>Nu descarca niciun program si nu intra pe site-uri suspecte care-ti ofera avantaje in joc.<br/><br/>

                                De multe ori, aceste programe contin  <em class="highlighted">keyloggere</em>, care vor inregistra si trimite mai departe unui anonim tot ceea ce tastati - inclusiv datele contului.<br/>
                                Foloseste neaparat <em class="highlighted">programe anti-virus</em> si tine-ti sistemul updatat.
                                Poti afla mai multe informatii despre asta aici:  <a href="{{ url('main/pc') }}">Securitate PC</a></p>
                        </div>
                        <div class="securitybox">
                            <h4>Falsii Administratori de Joc</h4>
                            <p>Anumiti jucatori se pretind a fi <em class="highlighted">GM, tehnicieni etc.</em> si vor incerca sa-ti spuna ca pe contul tau au aparut niste erori. Sau iti vor promite nenumarate lucruri dar pentru asta va trebui sa le dai datele contului.<br/><br/>

                                <em class="highlighted">Niciun membru Metin2</em> nu iti va cere niciodata parola - niciun GM, tehnician, dezvoltator sau oricine altcineva de la Gameforge.<br/><br/>

                                Daca cineva iti cere astfel de date te rugam sa-l raportezi imediat si sa nu ii dai niciun fel de date despre cont, chiar daca te ameninta ca vei avea contul banat daca nu o faci. Aceste amenintari sunt doar pentru intimidare.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Parola email / messenger</h4>
                            <p>Va rugam nu dati datele contului de email sau messenger.
                                Daca cineva intra in posesia parolei de email va fi foarte usor sa va fure si contul.<br/><br/>

                                Va recomandam insistent sa folositi pentru Metin2 <em class="highlighted">o parola unica</em>, pe care nu o folositi nicaieri.</p>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
