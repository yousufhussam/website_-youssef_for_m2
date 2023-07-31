@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="authenticated">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>

                    <x-registration.progress :step="2" />

                    <div class="pass-lost-inner-content">
                        <div class="input-data-box">
                            <div id="activateAccount" class="inner-form-border">
                                <div class="inner-form-box clearfix">
                                    <h3>Activează contul</h3>
                                    <div class="trenner"></div>
                                    <div id="activateBox">
                                        <p>Bun venit, <b>{{ Auth::user()->login }}</b>!</p>
                                        <p>Înregistrarea ta este completă, iar datele introduse au fost salvate.</p>

                                        <p>
                                            În scurt timp, va trebui să primești un email pentru <b>confirmarea înregistrării</b>.
                                            Te rugăm <b>confirmă înregistrarea</b> accesând <b>linkul din email</b>.
                                            Vei putea folosi contul tău de joc după această confirmare.
                                            Ține minte că linkul de validare expiră în scurt timp. Dacă deja a expirat,
                                            datele tale au fost șterse. În această situație, te rugăm să repeți
                                            procesul de înregistrare. Dacă totuși nu primești acest email în cateva ore,
                                            te rugăm să contactezi suportul.
                                        </p>

                                        @if (session('resent'))
                                            <p style="color: #003100;"><strong>Un nou e-mail de verificare a fost trimis!</strong></p>
                                        @endif

                                        <p id="resendNormal">
                                            Nu ați primit un e-mail?
                                            <a href="{{ route('verification.resend') }}">Retrimite mail-ul de activare</a>.
                                        </p>
                                    </div>
                                    <h3>Descarcă jocul</h3>
                                    <div class="trenner"></div>
                                    <a href="{{ url('main/download') }}" id="bigDownload">
                                        Descarcă<br/>jocul acum
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
