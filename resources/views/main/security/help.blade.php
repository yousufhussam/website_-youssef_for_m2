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
                            <li id="tab3">
                                <a href="{{ url('main/cheat') }}">Frauda</a>
                            </li>
                            <li id="tab4" class="selected">
                                <a href="{{ url('main/help') }}">Ajutor!</a>
                            </li>
                        </ul>
                        <div class="securitybox">
                            <h4>Ajutor! Ce trebuie sa fac in cazul unei fraude sau furt?</h4>
                            <p>Urmatoarele sfaturi va ajuta sa nu deveniti victima unui furt de cont:</p>
                        </div>
                        <div class="securitybox">
                            <h4>Daca observi ca nu te mai poti loga pe cont sau observi ca pe contul tau a fost activitate desi tu nu ai fost online, urmeaza acesti pasi:</h4>
                            <p>
                                1. Schimba imediat parola la <a href="{{ url('/') }}">{{ url('/') }}</a>.<br/><br/>

                                2. Daca nu mai ai acces la cont, contacteaza imediat Echipa de Suport Metin2.<br/><br/>

                                Aceasta poate fi contactata aici <a href="{{ url('main/support') }}">{{ url('main/support') }}</a>.<br/><br/>

                                3. Ofera echipei de suport informatiile necesare de indata ce aceasta ti le va cere.<br/><br/>

                                4. Pentru a rezolva un caz de acest gen poate dura ceva timp. Te rugam sa ai rabdare si sa astepti instructiunile Echipei de Suport<br/><br/>

                                5. Incearca sa afli cum a fost posibila pierderea contului. Avem aici cateva metode <a href="{{ url('main/account') }}">{{ url('main/account') }}</a>. Te rugam citeste si <em class="highlighted">Masurile de precautie</em>, ca pe viitor sa nu mai fie posibil furtul contului tau.
                            </p>
                        </div>
                        <div class="securitybox">
                            <h4>Daca ai devenit victima unei fraude, te rugam urmeaza acesti pasi:</h4>
                            <p>
                                1. Trebuie sa faci un print screen la tranzactie si la mesajul prin care s-a facut intelegerea.<br/><br/>

                                2. Contacteaza Suportul la <a href="{{ url('main/support') }}">{{ url('main/support') }}</a> si descrie problema.<br/><br/>

                                3. Membrii echipei responsabili de asta vor evalua cazul si te vor contacta.
                            </p>
                        </div>
                        <div class="securitybox">
                            <h4>Cum fac un print screen?</h4>
                            <p>
                                1. Apasa butonul Print Screen (sau Print Scrn / Prt Scr) de pe tastatura in timp ce esti in joc.<br/><br/>

                                2. Print screenul va fi salvat in directorul unde ai instalat jocul Metin2, in folderul 'Screenshots'.<br/><br/>

                                3. Daca este necesar, poti incarca print screenul pe un site de hostare de imagini. Pentru asta poti folosi Pic-Upload (<a href="http://www.pic-upload.de/" target="_blank">http://www.pic-upload.de</a>) sau orice alt site la alegerea ta.<br/><br/>

                                4. Daca ai incarcat imaginea, copiaza linkul si trimite-l la noi.<br/><br/>

                                5. Poti de asemenea sa incarci imaginea direct pe Sistemul de Suport, conditia fiind sa nu aiba mai mult de 512 KB.
                            </p>
                        </div>
                        <h2>Masuri de precautie</h2>
                        <div class="securitybox">
                            <h4>Parole neadecvate</h4>
                            <p>
                                Alege o parola care nu are nimic in comun cu tine.
                                Parolele ce contin data de nastere, numele, orase, hobby-uri etc. sunt parole neadecvate - evita folosirea lor!
                            </p>
                        </div>
                        <div class="securitybox">
                            <h4>Raporteaza!</h4>
                            <p>Daca ai descoperit un site care fraudeaza si cere datele contului tau, raporteaza-l imediat la <a href="{{ url('main/support') }}">{{ url('main/support') }}</a>.<br/><br/>
                            <em class="highlighted">Daca faci acest lucru, ii vei ajuta pe toti jucatorii cinstiti!</em></p>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
