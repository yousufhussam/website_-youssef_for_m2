@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Ghid Comunitate</h2>
                    <div class="securitybox">
                        <p>Scopul acestui Ghid al Comunitatii este sa creeze un mediu placut ce va face sederea in aceasta comunitate plina de distractie, unica si sigura, incurajand utilizatorii sa se comporte intr-o maniera care promoveaza integritatea, decenta si respectul.
                            <br/><br/>
                            Acest Ghid al Comunitatii va ajuta sa intelegeti ce inseamna sa faceti parte din comunitatea Metin2. Tineti minte ca prin folosirea platformelor Metin2 sunteti de acord cu Ghidul Comunitatii Metin2 si a <a href="{{ url('legal/terms') }}" target="_blank">termenilor &amp; conditiilor</a>.</p>
                    </div>
                    <div class="securitybox">
                        <h4>Cateva lucruri de tinut minte atunci cand folositi platforma Metin2</h4>
                        <p><em class="highlighted">Jucati frumos si respectati comunitatea</em><br/><br/>
                            Va rugam nu faceti abuz de platforma de joc. Suntem o comunitate formata din multe tipuri de oameni, dar toti avem dreptul de a ne simti in siguranta si confortabil atunci cand utilizam canalele de comunicare. Purtati-va politicos si respectuos - avem incredere ca sunteti responsabil si ne asteptam ca toti participantii din comunitate sa respecte aceasta incredere.</p>
                    </div>
                    <div class="securitybox">
                        <p><em class="highlighted">Ce poti face:</em></p>
                        <ul>
                            <li><em class="highlighted">Respecta-i pe cei din jurul tau.</em> Nu-ti varsa frustrarile pe ceilalti membri, fie prin comentarii sau alte materiale postate pe site. Nu exista toleranta pentru comportamentul agresiv, dispretuitor sau comentarii defaimatoare, amenintari, hartuire, activitati ilegale, invadarea vietii private, propaganda, ura rasiala, comportament jignitor fata de o cultura, continut vulgar sau obscen sau orice alt mod neadecvat de comportament. Nu exista toleranta, de asemenea, in cazul in care impartasiti informatiile personale ale altor membri.</li>
                            <li>Tine minte ca fiecare jucator are <em class="highlighted">aceleasi sanse de joc pe care le ai si tu</em>. Comporta-te intr-o maniera politicoasa si nu ii impiedica pe ceilalti sa se foloseasca de functiile jocului sau interfetei de joc (ex: sa vorbeasca cu NPC-urile).</li>
                            <li>Limba oficiala a acestei comunitati este Romana.</li>
                            <li><em class="highlighted">Ajuta-i pe ceilalti</em>  daca iti cer ajutorul. Impartaseste experientele tale!</li>
                            <li><em class="highlighted">Respecta intimitatea celorlalti utilizatori.</em></li>
                            <li>Cand joci intr-un grup, participa si ajuta echipa!</li>
                            <li>Tuturor jucatorilor li se permite sa joace jocul online Metin2 cu mai multe conturi.</li>
                            <li>Cand vezi ca cineva iti spune ceva ce te face sa te simti stanjenit, incearca sa il <em class="highlighted">ignori</em> si nu te certa cu acesta. Sa ignori pe cineva e mult mai eficient decat sa te cobori la mintea acestuia.</li>
                            <li><em class="highlighted">Echipa exista pentru a te ajuta</em> in timpul jocului. Raspunde-le de fiecare data: ajuta-i ca sa te ajute. Tine minte, oricand poti raporta echipei de joc comportamentul neadecvat al altor utilizatori. Urmeaza instructiunile detaliate <a href="#screenshots">aici</a> despre cum sa faci un print screen. Un print screen facut dupa aceste indrumari ne va ajuta sa iti oferim cel mai bun suport.</li>
                            <li>Daca ai nevoie de suport pentru un cont sau un obiect furat tine minte ca <em class="highlighted">te putem ajuta doar daca raportezi problema imediat</em>. Suportul pentru avertismente/banuri va fi disponibil doar daca acestea nu sunt mai vechi de 3 luni.</li>
                            <li>Nu uitati Regula de Aur - <em class="highlighted">intotdeauna tratati-i pe ceilalti la fel cum ati vrea sa fiti voi tratati!</em></li>
                        </ul>
                    </div>
                    <div class="securitybox">
                        <p><em class="highlighted">Ce nu poti face:</em></p>
                        <ul>
                            <li>Nu cauta metode de a ocoli Ghidul Comunitatii si T&C.; Daca cineva face acest lucru raporteaza-l.</li>
                            <li>Nu-ti folosi creativitatea de a spune lucruri pe care nu are trebui sa le spui. Filtrele de chat exista cu un motiv si daca vei folosi minute in sir sa ocolesti aceste filtre, mai bine nu pierzi timpul.</li>
                            <li><em class="highlighted">Nu posta mesaje comerciale.</em> Nu promova activitati comerciale, incluzand link-urile externe.</li>
                            <li>Nu posta <em class="highlighted">materiale pornografice sau continut explicit</em>, comunitatea Metin2 nu este locul potrivit pentru asta.</li>
                            <li><em class="highlighted">Nu incalca legea.</em> Asigura-te ca vei respecta toate cerintele si legile. Nu promova informatii care stii ca sunt sau crezi ca sunt false, aceste lucruri te incrimineaza in mod direct si sunt ilegale.</li>
                            <li><em class="highlighted">Nu incerca sa-ti atribui personalitatea altcuiva</em>, asta incluzand dar nelimitandu-se la angajatii, reprezentantii, alti oficiali Metin2 sau Grupul Gameforge.</li>
                            <li>Nu fii certaret. Nu numai ca acest lucru este urat dar poti sfarsi prin a fi banat in joc.</li>
                        </ul>
                    </div>
                    <div class="securitybox">
                        <h4>Pune-te in siguranta tinand informatiile personale private.<br/>
                            Niciodata nu da datele tale personale!</h4>
                        <p><em class="highlighted">De ce?</em></p>
                        <ul>
                            <li>Contul tau Metin2 poate fi furat sau distrus.</li>
                            <li>Caracterele tale Metin2 pot disparea pentru totdeauna.</li>
                            <li>Obiectele de pe contul tau pot fi pierdute definitiv.</li>
                            <li>Poti fi banat temporar sau permanent in jocul Metin2.</li>
                            <li>Oamenii rai pot afla unde locuiesti.</li>
                        </ul>
                    </div>
                    <div class="securitybox">
                        <p><em class="highlighted">Cum?</em></p>
                        <ul>
                            <li>Nu spune nimanui informatiile contului tau.</li>
                            <li>Nu spune nimanui parola ta.</li>
                            <li>Nu spune nimanui informatii din viata reala.</li>
                            <li>Nu spune nimanui adresa ta de email.</li>
                            <li>Nu spune nimanui numarul tau de telefon.</li>
                        </ul>
                    </div>
                    <div class="securitybox">
                        <p>Echipa Metin2 isi rezerva dreptul de a investiga si de a lua deciziile cuvenite impotriva tuturor ce incalca Ghidul Comunitatii, incluzand sanctiuni ca blocarea temporara sau permanenta a accesului pe platforma de joc Metin2.<br/><br/>

                            Acest Ghid va fi updatat din cand in cand, asa ca verifica pagina cu regularitate!<br/><br/>

                            Daca doresti sa contactezi echipa de suport, viziteaza <a href="{{ url('main/support') }}" target="_blank">sistemul nostru de suport</a>.</p>
                    </div>
                    <div class="box-foot"></div>
                </div>
                <div class="content-bg-bottom">
                    <a name="screenshots"/>
                    <h2>CERINTELE PENTRU PRINT SCREEN</h2>
                    <div class="securitybox">
                        <p>Dragi utilizatori,<br/><br/>

                            Aici aveti o lista de cerinte pentru a face print screen-uri:<br/><br/>

                            •	Numele si levelul propriului caracter (deasupra capului caracterului) trebuie sa fie vizibile in poza<br/>
                            •	Cel putin 4 randuri din chat-ul general trebuie sa fie vizibile in poza<br/>
                            •	Inventarul jucatorului trebuie sa fie vizibil in poza<br/>
                            •	O mare parte din conversatie (daca se poate chiar toata) trebuie sa fie vizibila in poza<br/>
                            •	Harta mica, serverul si canalul trebuie sa fie vizibile in poza<br/>
                            •	In ticket trebuie sa scrii ora si data cand ai facut poza<br/>
                            •	Sub nicio forma nu modifica poza (nu sublinia, nu taia etc.)<br/><br/>

                            Print screen-urile ce nu indeplinesc aceste conditii vor fi respinse imediat. Trimiterea print screen-urilor false se vor solda cu un ban pentru cel ce le-a trimis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
