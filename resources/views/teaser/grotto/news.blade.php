@extends('layouts.teaser-grotto')

@section('content')
    <div id="movie">
        <img src="{{ asset('assets/teaser/grotto/img/header_news.jpg') }}" alt="Metin 2 - Grota Exilului" />
    </div>

    <div class="content_background">
        <div id="content">
            <div id="navigation">
                <ul>
                    <li><a href="{{ route('teaser.grotto.home') }}">Istorie</a></li>
                    <li><a href="{{ route('teaser.grotto.news') }}" class="navi_active">Noutăți</a></li>
                    <li><a href="{{ route('teaser.grotto.gallery') }}">Galerie</a></li>
                    <li><a href="{{ url('user/register') }}" target="_blank">Ia parte!</a></li>
                </ul>
            </div>
            <div class="content_left"></div>
            <div class="content_right"></div>

            <div id="matter">
                <h2>Noutăți</h2>

                <h3><span class="date">23.02.2011</span>Către peștera dragonului!</h3>
                <p>Deja ai avut parte de o lungă aventură de cînd ai dat față în față cu legendarul Sura Akuma. Avînd un arc, el acceptă taxă și deschide poarta ...</p>
                <ul class="news_list">
                    <li>Înfruntă cea mai mare bătălie a timpurilor: luptă împotriva lui Beran-Setaou, Zeul Distrugerii!</li>
                    <li>Descoperă secretul Pietrelor Metin: puterile pietrelor e legată de celor ale Dragonului Albastru?</li>
                    <li>Culege recompensa bine meritată: colectează materiale rezistente pentru fierarul Seon-Pyeong!</li>
                </ul>

                <h3><span class="date">10.02.2010</span>Porțile către Grota Exilului sunt acum deschise!</h3>
                <p>
                    Ești întîmpinat de o lume întunecată și rece. Poți auzi ecoul pașilor prin pereții de piatră. Dar
                    aceste sunete le faci chiar tu ... ?
                </p>
                <ul class="news_list">
                    <li>
                        Pătrunde în coridoarele lungi și întunecate ale Grotei și caută urmele legendarului luptător
                        Sura, Akuma.
                    </li>
                    <li>
                        Înfruntă primejdiile care te așteaptă în lumea de jos - lumea de jos fiind condusă de creaturi
                        ciudate
                    </li>
                    <li>
                        Descoperă rădăcinile unei civilizații secrete și ia o decizie... Războiul zeilor nu s-a terminat
                        încă!
                    </li>
                </ul>

                <h3><span class="date">04.02.2010</span>Aici sunt cîteva date despre event:</h3>
                <p class="news">
                    <img src="{{ asset('assets/teaser/grotto/img/news.jpg') }}" class="news_image" />
                    La prima vedere satul tău pare să fie același. Totuși, tensiunea din interiorul tău se pare că ți-a
                    dat un oarecare sentiment de îngrijorare. Ceva se va întîmpla ...Nu ezita să ajungi în vîrful
                    acesteia.!Ia parte la pre-eventul Grotei Exilului!
                </p>
                <ul class="news_list">
                    <li>
                        Testează-ți puterea luptîndu-te cu animale sălbatice în timp ce cauți Pietrele Hieroglifice
                    </li>
                    <li>
                        Mergi și cunoaște-l pe Heuk-Young care îți va da misterioasa Amuletă a Zeului Dragon dacă închei
                        o misiune pentru ea
                    </li>
                    <li>
                        Ia parte la o călătorie magică în necunoscută cale navigabilă, unde vei găsi intrarea în
                        legendara grotă. Porțile sunt momentan închise. Dar în interior, poveștile străvechi sunt
                        pregătite să iasă la suprafață ...
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
