@extends('layouts.teaser-grotto')

@section('content')
    <div id="movie">
        {{-- Using a re-encoded video as the original uses H.264 & AAC, which are not currently supported by Ruffle --}}
        <a href="{{ asset('assets/teaser/grotto/movies/teaser_long_en_flv1_mp3.flv') }}" id="player">
            <img src="{{ asset('assets/teaser/grotto/img/play_large.png') }}" alt="Metin2">
        </a>
    </div>
    <script type="text/javascript">
        flowplayer(
            "player",
            "{{ asset('assets/teaser/grotto/movies/flowplayer-3.1.3.swf') }}",
            {
                clip: {
                    autoPlay: true,
                    autoBuffering: true
                },
                plugins: {
                    controls: {
                        bottom: 0,
                        backgroundColor: '#12191c',
                        height: 20,
                        opacity: 0.8,
                        // controlbar-specific configuration
                        durationColor: '#5B725D',
                        timeColor: '#b9dbac',
                        autoHide: 'never',
                        timeBgColor: null,
                        progressColor: '#6d2a18',
                        bufferColor: '#000000',
                        buttonColor: '#6a2715',
                        buttonOverColor: '#7a572d',
                        // which buttons are visible and which are not?
                        play: true,
                        // volume: true, -- not supported by Ruffle
                        volume: false,
                        // mute: true, -- not supported by Ruffle
                        mute: false,
                        time: true,
                        stop: false,
                        playlist: false,
                        // fullscreen: true -- not supported by Ruffle
                        fullscreen: false
                    }
                }
            });
    </script>

    <div class="content_background">
        <div id="content">
            <div id="navigation">
                <ul>
                    <li><a href="{{ route('teaser.grotto.home') }}" class="navi_active">Istorie</a></li>
                    <li><a href="{{ route('teaser.grotto.news') }}">Noutăți</a></li>
                    <li><a href="{{ route('teaser.grotto.gallery') }}">Galerie</a></li>
                    <li><a href="{{ url('user/register') }}" target="_blank">Ia parte!</a></li>
                </ul>
            </div>
            <div class="content_left"></div>
            <div class="content_right"></div>

            <div id="matter">
                <div class="images">
                    <div class="image_1">
                        <a href="{{ route('teaser.grotto.gallery') }}">
                            <img src="{{ asset('assets/teaser/grotto/img/image_1.jpg') }}" />
                        </a>
                    </div>
                    <div class="image_2">
                        <a href="{{ route('teaser.grotto.gallery') }}">
                            <img src="{{ asset('assets/teaser/grotto/img/image_2.jpg') }}" />
                        </a>
                    </div>
                </div>
                <h2>Grota Exilului</h2>
                <p>
                    La începuturi, trei frați mentineau componentele vieții în ordine: Bahar-Taraji, Zeița Creației și
                    frații ei Baljit-Elvedin, Zeul Conservării și Beran-Setaou, Zeul Dizolvării. Locuitorii se rugau la
                    primii doi dar le era frica de al treilea. De-a lungul timpului acesta a stîrnit invidie intre
                    Beran-Setaou care pana la urma s-a transformat în ura. Într-un final furia Zeilor a devenit atît de
                    mare încît Beran-Setaou și-a ucis sora - care a fost cea mai iubita de către locuitori.
                </p>
                <p>
                    Moartea zeiței a dus la urmări dramatice. O iarnă geroasă a înghețat lumea oamenilor. Chiar și zeii
                    au suferit. Beran-Setaou s-a retras și a căutat singurătatea atunci cînd imensitatea a ceea ce a
                    făcut s-a abătut asupra lui. Fratele sau Baljit-Elvedin a fost îndurerat mult timp după sora lui
                    pîna cînd a început sa-l caute pe fratele sau.
                    Dar aceasta este doar o parte din poveste.
                </p>
                <p>
                    Cînd l-a găsit în grotă, o bătălie violentă a izbucnit intre cei doi, bătălie pe care nici unul nu a
                    putut s-o cîștige. Totuși Baljit-Elvedin a reușit sa sigileze grota și să se întoarcă în lumea
                    oamenilor.
                </p>
                <p>
                    Locația grotei este cunoscută de foarte putini - și cei care cunosc locația o țin secretă. Dragonul
                    Negru conduce lumea de jos și tot ce aparține de aceasta lume. El este încă plin de ură față de
                    toate lucrurile vii. Și toți care ii trec calea vor simți furia sa.
                </p>
            </div>
        </div>
    </div>

    {{-- Include Ruffle and configure it in order to emulate Adobe Flash for the trailer --}}
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
    <script>
        window.RufflePlayer.config = {
            autoplay: "on",
            unmuteOverlay: "hidden",
            contextMenu: "off",
            splashScreen: false,
        };
    </script>
@endsection
