@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - 3D Online MMORPG</h2>
                    <div class="about-inner-content">
                        <ul class="tabs-nav tabs3">
                            <li id="tab1" class="selected"><a href="{{ url('main/thegame') }}">Jocul</a></li>
                            <li id="tab2"><a href="{{ url('main/characterclasses') }}">Categoriile Caracterelor</a></li>
                            <li id="tab3"><a href="{{ url('main/empires') }}">Imperii</a></li>
                        </ul>
                        <div class="aboutbox-1">
                            <h4>Personajele şi arhitectura orientului îndepărtat va transpun într-un ţinut misterios al unor technici de luptă exotice.</h4>
                            <p>Păşeşte în <strong>sate reale</strong>ale orientului îndepărtat şi lasă-te prins de şarmul <strong>luptătorilor asiatici</strong>. Şi tu te vei lupta în curând nu numai cu sabia sau cu arcul; vei putea încerca modalităţi rafinate de luptă cum ar fi <strong>clopotul şi evantaiul</strong>.</p>
                        </div>
                        <div class="aboutbox-2">
                            <h4>Creaturi periculoase se năpustesc în haită asupra ta.</h4>
                            <p>Răneşte grav în luptă mai multe creaturi. Dar ai mare grijă:
                                dacă te-ai descotorosit de un adversar şi ai reuşit să-l azvârli de lângă tine, ceilalţi nu se vor lăsa de tine. Trebuie să fii foarte atent, în special în regiunea unde au căzut numeroasele <strong>blocuri de meteorit</strong> !</p>
                        </div>
                        <div class="aboutbox-3">
                            <h4>Devino membru al unei obşti puternice şi pune-ţi amprenta pe cursul istoriei regatului tău.</h4>
                            <p>Devenind membru al unei obşti, rezultatele <strong>fiecărei bătălii în parte</strong>nu se reflectă numai în poziţia obştei, ci şi în valoarea de experienţă a fiecărui membru. Luptaţi pentru a ajunge în posesia uneia din puţinele <strong>baze miltare</strong> ale ţării. Cu cât veţi deveni mai puternici, cu atât mai mult veţi putea <strong>introduce personaje virtuale</strong> şi le veţi putea dirija.</p>
                        </div>
                        <div class="aboutbox-4">
                            <h4>Înfruntă-i pe reprezentanţii celorlaltor regate, în lupte violente desfăşurate în centrul continentului.</h4>
                            <p>În lupta corp-la-corp eşti în slujba regatului tău năzuind la <strong>supremaţia pe continent</strong>. Regatul victorios va dobândi bunuri materiale: bani şi pământ. Eroul biruitor se va bucura de <strong>faimă şi onoare</strong>. Toate acestea te aşteaptă. În acest fel, ţi se oferă posibilitatea ca în luptele viitoare ale regatului tău să porţi un <strong>rang militar</strong> superior.</p>
                        </div>
                        <div class="aboutbox-5">
                            <h4>Grota Exilului</h4>
                            <p class="first-content">La începuturi, trei frați mentineau componentele vieții în ordine: Bahar-Taraji, Zeița Creației și frații ei Baljit-Elvedin, Zeul Conservării și Beran-Setaou, Zeul Dizolvării. Locuitorii se rugau la primii doi dar le era frica de al treilea. De-a lungul timpului acesta a stîrnit invidie intre Beran-Setaou care pana la urma s-a transformat în ura. Într-un final furia Zeilor a devenit atît de mare încît Beran-Setaou și-a ucis sora - care a fost cea mai iubita de către locuitori.</p>
                            <p>Moartea zeiței a dus la urmări dramatice. O iarnă geroasă a înghețat lumea oamenilor. Chiar și zeii au suferit. Beran-Setaou s-a retras și a căutat singurătatea atunci cînd imensitatea a ceea ce a făcut s-a abătut asupra lui. Fratele sau Baljit-Elvedin a fost îndurerat mult timp după sora lui pîna cînd a început sa-l caute pe fratele sau.
                                Cînd l-a găsit în grotă, o bătălie violentă a izbucnit intre cei doi, bătălie pe care nici unul nu a putut s-o cîștige. Totuși Baljit-Elvedin a reușit sa sigileze grota și să se întoarcă în lumea oamenilor.</p>
                            <p>Locația grotei este cunoscută de foarte putini - și cei care cunosc locația o țin secretă. Dragonul Negru conduce lumea de jos și tot ce aparține de aceasta lume. El este încă plin de ură față de toate lucrurile vii. Și toți care ii trec calea vor simți furia sa.</p>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
