@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Primii paşi</h2>
                    <div class="firststeps-inner-content">
                        <ul class="tabs-nav tabs2">
                            <li id="tab1" class="selected"><a href="{{ url('main/howto') }}">Primii paşi</a></li>
                            <li id="tab2"><a href="{{ url('main/tutorials') }}">Tutoriale</a></li>
                        </ul>
                        <div class="firststepsbox-1">
                            <h4>1. Înregistrarea</h4>
                            <p>Daca nu te-ai inregistrat inca pe Metin2, poti face asta in partea de sus a paginii. Introdu doar numele de utilizator dorit, adresa ta de email, o parola la alegere si confirma faptul ca ai citit termenii si conditiile. In cateva minute vei primi un mail de confirmare ce va contine un link. Urmeaza instructiunile din e-mail pentru a-ti activa contul.</p>
                        </div>
                        <div class="firststepsbox-2">
                            <h4>2. Descarca si instaleaza</h4>
                            <p>Descarca kit-ul de instalare din sectiunea corespunzatoare. Dublu-click pe executabilul descarcat pentru a incepe instalarea. Apoi alege un loc in PC-ul tau pentru a se instala Metin2.</p>
                        </div>
                        <div class="firststepsbox-3">
                            <h4>3. Start Metin2</h4>
                            <p>Dupa instalarea jocului, pe desktop-ul PC-ului tau va aparea o icoana numita Metin2. Aditional, aceasta icoana va aparea si in meniul de Start al PC-ului. Dublu-click pe icoana de pe desktop sau un singur click din meniul de Start pentru a incepe jocul. Cand va fi necesar, Metin2 se va updata automat cu noua versiune implementata ce poate dura cateva minute.</p>
                            <p>Dupa update poti intra in Profilul tau pentru a alege un server. Va trebui sa alegi un Regat din cele trei si apoi iti vei putea crea propriul caracter.
                                Retine ca poti folosi un caracter creat pe un server numai pe acel server.</p>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
