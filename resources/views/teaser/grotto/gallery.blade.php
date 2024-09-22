@extends('layouts.teaser-grotto')

@section('content')
    <div id="movie">
        <img src="{{ asset('assets/teaser/grotto/img/header_gallery.jpg') }}" alt="Metin 2 - Grota Exilului">
    </div>

    <div class="content_background">
        <div id="content">
            <div id="navigation">
                <ul>
                    <li><a href="{{ route('teaser.grotto.home') }}">Istorie</a></li>
                    <li><a href="{{ route('teaser.grotto.news') }}">Noutăți</a></li>
                    <li><a href="{{ route('teaser.grotto.gallery') }}" class="navi_active">Galerie</a></li>
                    <li><a href="{{ url('user/register') }}" target="_blank">Ia parte!</a></li>
                </ul>
            </div>
            <div class="content_left"></div>
            <div class="content_right"></div>

            <div id="matter">
                <h2>Galerie</h2>
                <div id="triggers">
                    <ul id="gallery_view">
                        <li><a title="Heuk-Young cunoaște portalurile de mult uitate" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/1.jpg') }}" rev="width: 400px; height: 300px; scrolling: no;"><img src="{{ asset('assets/teaser/grotto/img/gallery/1_thumb.jpg') }}"></a></li>
                        <li><a title="Amuleta Zeului Dragon te ajută să-ți îndeplinești telul" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/2.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/2_thumb.jpg') }}"></a></li>
                        <li><a title="Nenumărate pericole te așteaptă" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/3.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/3_thumb.jpg') }}"></a></li>
                        <li><a title="Grota Exilului: Nu este loc de relaxare" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/4.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/4_thumb.jpg') }}"></a></li>
                        <li><a title="Puteri întunecate sunt onorate la altarele negre" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/5.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/5_thumb.jpg') }}"></a></li>
                        <li><a title="Încăperile vaste ale grotei sunt casa multor inamici" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/6.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/6_thumb.jpg') }}"></a></li>
                        <li><a title="Ai face bine sa nu te pierzi în coridoarele lungi ale acestei grandioase clădiri" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/7.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/7_thumb.jpg') }}"></a></li>
                        <li><a title="Vrăjitoarea de Gheată așteaptă victime noi" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/8.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/8_thumb.jpg') }}"></a></li>
                        <li><a title="Singurul lucru care te poate salva este deținerea unei magii puternice și abilități mărețe de luptă" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/9.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/9_thumb.jpg') }}"></a></li>
                        <li><a title="Durează mult timp să ajungi la Lordul grotei" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/10.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/10_thumb.jpg') }}"></a></li>
                        <li><a title="Interzis fricoșilor: Un dans sub nasul dragonului" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/11.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/11_thumb.jpg') }}"></a></li>
                        <li><a title="Cristale naturale de gheată plutesc în întuneric" rel="lytebox[vacation]" href="{{ asset('assets/teaser/grotto/img/gallery/12.jpg') }}"><img src="{{ asset('assets/teaser/grotto/img/gallery/12_thumb.jpg') }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
