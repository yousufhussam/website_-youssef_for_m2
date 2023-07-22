@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Competitia Cosplay - Premii</h2>
                    <div class="download-inner-content">
                        <p class="awards">Imaginatia fara limite dar si creativitatea uimitoare va fi rasplatita substantial! Urmatoarele premii ii asteapta pe castigatorii Competitiei Cosplay Metin2:</p>
                        <div class="gallerybox">
                            <h4>Ce poti castiga:</h4>
                            <ul class="rules">
                                <li>Locul 1: Gaming PC</li>
                                <li>Locul 2: noul iPad</li>
                                <li>Locul 3: Playstation Vita</li>
                            </ul>
                            <h4 style="margin: 20px 0 0 0;height:20px;">Dar si</h4>
                            <ul class="rules">
                                <li>Locul 4: un voucher de 150 euro pentru <a href="http://www.cosplaymagic.com/" target="_blank">CosplayMagic</a>.</li>
                                <li>Locul 5: un voucher de 50 euro pentru <a href="http://www.cosplaymagic.com/" target="_blank">CosplayMagic</a>.</li>
                            </ul>
                            <p>Lasa-ti imaginatia sa zburde si aluta-te! Inregistreaza-te azi folosind <a href="{{ url('contest/register') }}">formularul de inregistrare</a> si trimite-ne intrarile pana la 26.08.2012.</p>
                            <h4>Va dorim mult noroc!</h4>
                            <a href="javascript: history.go(-1)" class="btn back-btn">inapoi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
