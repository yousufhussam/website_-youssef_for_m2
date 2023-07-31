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
                            <li id="tab1">
                                <a href="{{ url('main/account') }}">Furtul de Cont</a>
                            </li>
                            <li id="tab2">
                                <a href="{{ url('main/pc') }}">Securitate PC</a>
                            </li>
                            <li id="tab3" class="selected">
                                <a href="{{ url('main/cheat') }}">Frauda</a>
                            </li>
                            <li id="tab4">
                                <a href="{{ url('main/help') }}">Ajutor!</a>
                            </li>
                        </ul>
                        <div class="securitybox">
                            <h4>Atentie, fraude!</h4>
                            <p>Sunt cateva smecherii pe care, cei ce se ocupa cu furtul de conturi, le folosesc pentru a avea acces la contul tau. Aici sunt cateva <em class="highlighted">metode de fraudare</em> ce au aparut pe metin2 pana acum.<br/>

                                Oricum, ramai precaut! Fraudatorii apar constant mereu cu metode noi si iau cu asalt jucatorii. Intotdeauna tine minte ca <em class="highlighted">niciodata nu trebuie sa dai datele contului</em> pentru niciun motiv.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Falsi membri de echipa (echipa falsa)</h4>
                            <p>Acestia sunt responsabili pentru <em class="highlighted">un numar mare de furturi</em> in Metin2. Ei isi aleg nick-uri particulare, ce sunt apropiate de nick-urile membrilor echipei (cu mici adaugari ca "administrator", "GM-XY", ''Support-XY'', ''GAMEFORGE-XY'' or ''|GM|'') si se asteapta sa obtina datele personale de logare ale jucatorilor folosind aceste nume.<br/><br/>

                                In aceste situatii, este foarte important sa stii cum actioneaza un GM adevarat si cum il poti recunoaste.<br/><br/>

                                <em class="highlighted">Cum recunosti un GM adevarat:</em></p>
                            <ul>
                                <li>Un GM intotdeauna va avea level 99.</li>
                                <li>Un GM va avea intotdeauna numele scris intre paranteze patrate ( [...] ), numele poate varia dar cel mai des este asa: [GM], [GA], [TM], [GF], [QA] sau [CM]</li>
                                <li>Daca un GM iti trimite un mesaj, textul scris care va aparea pe ecran va fi de culoare <em class="highlighted">galbena</em>. Textul din mesajele jucatorilor obisnuiti este <em class="highlighted">alb</em>.</li>
                                <li>Un GM nu iti va cere <em class="highlighted">niciodata</em> sub nicio forma detaliile contului.</li>
                                <li>Un GM poate fi recunoscut dupa semnul cu GM ce-l poarta deasupra capului.</li>
                                <img src="{{ asset('assets/main/img/gm.jpg') }}">
                            </ul>
                        </div>
                        <div class="securitybox">
                            <h4>Ajutorul de level / ajutorul pentru misiuni</h4>
                            <p>Mai exista si <em class="highlighted">presupusii jucatori draguti</em>, care se vor oferii sa te ajute la misiuni dificile sau la cresterea in level. Si vor spune ca pentru asta au nevoie de datele contului tau.<br/><br/>

                                Iti recomandam sa ramai precaut in astfel de situatii pentru ca acest gen de jucatori nu vor decat sa intre in posesia contului tau.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Schimbul obiectelor valoroase</h4>
                            <p>Aveti grija atunci cand schimbati obiecte scumpe cu alte obiecte!<br/><br/>

                                Aceste obiecte sunt cele mai des furate mai ales atunci cand jucatorii sunt noi in joc si nu sunt pusi in tema in urma eventualelor riscuri de furt. Intotdeauna cereti o <em class="highlighted">valoare identica</em>  cu cea a obiectelor pe care doriti sa le dati la schimb, in caz contrar nu va veti recupera obiectele niciodata.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Clonarea obiectelor</h4>
                            <p>De asemenea, feriti-va de jucatorii care se ofera sa va cloneze obiecte. Nu va dati echipamentul daca nu doriti sa ramaneti fara el.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Raspandirea numerelor de telefon pentru incarcarea cu bani</h4>
                            <p>In cazuri rare, fraudatorii vor incerca sa va coopteze sa sunati la <em class="highlighted">numere de telefon cu 0900</em>, care intotdeauna vor costa mult. Va vor promite ca in urma unui apel vi se va incarca contul cu Monede Dragon.

                                Dar in urma unui apel nu va veti alege decat cu o <em class="highlighted">factura uriasa</em> - va recomandam sa nu sunati niciodata la un numar de telefon care va este oferit de un strain.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Raspandirea hack-urilor</h4>
                            <p>Folosirea programelor care afecteaza jocul si va ofera avantaje necinstite in joc sunt strict interzise iar pedeapsa pentru folosirea acestor programe este <em class="highlighted">banul permanent</em>. In afara de asta, in majoritatea programelor de acest gen se poate ascunde si cate un keylogger care va avea acces la datele voastre personale.<br/><br/>

                                Pentru a va proteja impotriva acestui lucru: nu acceptati niciodata ofertele cu astfel de programe in nicio circumstanta, nu le descarcati - indiferent cat de tentanta este descrierea lor.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Fraudele pe Internet Relay Chat (IRC)</h4>
                            <p>Fraudatorii nu se vor opri nici macar pe IRC. Vor avea nickuri asemanatoare membrilor echipei si vor contacta jucatorii ce cauta ajutor, pentru a le da diferite programe prin care le vor fura conturile.

                                <em class="highlighted">Cum recunosc un membru al echipei pe IRC?</em></p>
                            <ul>
                                <li>Pe canalul oficial Metin2 (#metin2.ro), toti membrii echipei sunt cu semnul <em class="highlighted">+</em> sau <em class="highlighted">@</em> in fata nickului lor.</li>
                                <li>In plus, poti cere un "whois" ("cine este") prin comanda '/whois nickname' sau dreapta mouse pe nickname si selectati 'whois'.<br/><br/>

                                    La un membru al echipei va aparea de exemplu: Akisee is Akisee@Akisee.gameadmin.Metin2Uk<br/><br/>

                                    <em class="highlighted">Toti</em> membrii echipei au un tip de extensie care difera in functie de rank (GM are extensia <em class="highlighted">gamemaster.Metin2Ro</em>, in timp ce moderatorii vor arata asa: <em class="highlighted">moderator.Metin2Ro</em>). Numai membrii echipei vor arata asa si cu siguranta veti stii ca sunt in echipa Metin2 Ro - pentru a fi siguri, verificati.</li>
                            </ul>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
