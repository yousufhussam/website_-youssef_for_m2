@extends('layouts.teaser-dc')

@section('content')
    <!-- Geschichte -->
    <div class="bar history">Istorie</div>
    <div class="left_col">
        <div class="maintext">
            <div class="subtitle">Razbunarea lui Grim Reaper</div>
            <div class="subtext">Odata demult, Grim Reaper ii servea Stapanului sau, Zeul Distrugerii, ca mana dreapta: el a luat ceea ce a creat Bahar-Taraji, Zeita Creatiei si ceea ce a creat Baljit-Elvedin, Zeul Conservarii, unind intr-un singur lucru - viata. Dupa batalia dintre cu doi frati si izgonirea lui Beran-Setaou, Grim Reaper a ramas loial statutului sau.</div>
            <div class="subtext">Chiar si in zilele noastre, el duce nenumarate victime Dumnezeului sau intr-o cripta aflata adanc sub pamant. Ecoul plansului sufletelor chinuite se aude in infinitul intunecat dand nastere unor terori inimaginabile.</div>
            <div class="subtitle">Aici este Catacomba Diavolului.</div>
            <div class="subtext">Dupa apriga batalie din Turnul Demonilor, acolo unde Grim Reaper isi dadea ultima suflare, plin de sange, chiar sub ochii tai, eroii celor trei regate au crezut ca si-au invins adversarul. Dar cum poti lupta impotriva mortii? Grim Reaper si-a folosit forta neagra pentru a-si aduna in jur o intreaga armata. In timp ce se hranea cu sufletele condamnate la pieire a jurat sa se razbune.</div>
            <div class="subtext">Inainte ca razboinicii sa isi spele sangele de pe sabiile lor un huruit adanc s-a auzit din adancurile lumii si a aruncat in vazduh tunete si fulgere. Plini de teama, razboinicii s-au luptat tot drumul lor inapoi si au nimerit in infern: o lacrima a ars pamantul iar flacarile si fumul negru s-au ridicat. Tipatul sufletelor chinuite a inceput sa iasa la suprafata.</div>
            <div class="subtext last">Catacomba Diavolului dezvaluie grimasele sale monstruoase. Portile sale sunt deschise iar armata intunericului iese la lumina...</div>
        </div>
    </div>
    <div class="right_col">
        <a class="homethumb" href="{{ route('teaser.dc.media') }}">
            <img class="homethumb" src="{{ asset('assets/teaser/dc/img/homethumb_1.jpg') }}"/>
        </a>

        <br />

        <a class="homethumb" href="{{ route('teaser.dc.media') }}">
            <img class="homethumb" src="{{ asset('assets/teaser/dc/img/homethumb_2.jpg') }}"/>
        </a>

        <br />

        <a class="homethumb" href="{{ route('teaser.dc.media') }}">
            <img class="homethumb" src="{{ asset('assets/teaser/dc/img/homethumb_3.jpg') }}"/>
        </a>

        <br/>
    </div>

    <div class="clear"></div>

    <!-- Neuigkeiten & Socials -->
    <div class="bar">Noutăți</div>
    <div class="left_col">
        <div class="news_con">
            <h3><span class="date">11/16/11 10:09:10</span>[DC] Devil's Catacomb is opening its gates! Cataco[...]</h3>
            <p>[DC] Devil's Catacomb is opening its gates! Catacombele isi deschid portile!<br/>Greetings!<br/>Whilst ... <a href="{{ route('teaser.dc.news') }}#news0" class="news_link">&gt;&gt;</a></p>
        </div>
    </div>

    <div class="right_col">Publicitate<br/>
        <a class="rss" href="{{ url('teaser/dc/rss') }}" title="Feed Nou RSS"></a>
        <a class="facebook_ymir" href="http://www.facebook.com/metin2.ymir" title="Follow Ymir@Facebook" target="_blank"></a>
    </div>
@endsection
