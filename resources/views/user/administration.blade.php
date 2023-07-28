@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>
                    <div class="administration-inner-content">
                        <div class="input-data-box">
                            <h4>Datele utilizatorului</h4>

                            <ul>
								<li>Nume de utilizator: {{ Auth::user()->login }}</li>
								<li>Email: <span id="yourEmail">{{ Auth::user()->email }}</span></li>
								<li>Monede Dragon: {{ Auth::user()->cash }} <a href="#" class="load-link">(top up)</a></li>
								<li>Semnele Dragonului: {{ Auth::user()->mileage }}</li>

                                @if (Auth::user()->social_id)
								    <li class="long-li-code">Cod de ștergere caracter: <span class="delete-code">{{ Auth::user()->social_id }}</span></li>
                                @else
                                    <li class="long-li-code">Cod de ștergere caracter: <span class="delete-code">încă nespecificat</span></li>
                                @endif
                            </ul>

                            <div class="administration-box"><a href="#" class="btn">Încarcă MD</a><p>Îmbunătățește-ți contul folosind Monede Dragon</p></div>
                            <div class="administration-box"><a href="{{ url('user/characters') }}" class="btn">Caracter</a><p>Lista caracterelor</p></div>
                            {{-- <div class="administration-box"><a href="#" class="btn">Prieteni</a><p>Recruteaza prieteni si vezi statusul noilor prieteni recrutati</p></div> --}}
                            <div class="administration-box"><a href="{{ url('user/emailchange') }}" class="btn">Email</a><p>Schimbă adresa de email</p></div>
                            <div class="administration-box"><a href="{{ url('user/passwordchangerequest') }}" class="btn">Parola</a><p>Schimbă parola</p></div>
                            <div class="administration-box"><a href="{{ url('user/storagepasswordlost') }}" class="btn">Parola Depozit</a><p>Cere parola de la Depozit</p></div>
                            <div class="administration-box"><a href="{{ url('user/displaycode') }}" class="btn">Parola Stergere</a><p>Codul pentru ştergerea personajelor</p></div>
                            <div class="administration-box"><a href="#" class="btn">Anularea contului</a><p>Anularea contului</p></div>

                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
