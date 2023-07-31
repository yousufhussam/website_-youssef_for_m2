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
                                    <h3>Activează-ți contul!</h3>
                                    <div class="trenner"></div>
                                    <div id="activateBox">
                                        <p>
                                            Pentru finalizarea înregistrării tale, trebuie să îți verificăm adresa
                                            de e-mail. Accesează-ți căsuța de e-mail și urmează link-ul din mesaj pentru activare.
                                        </p>

                                        <h3>Nu ai primit un e-mail?</h3>
                                        <div class="trenner"></div>

                                        @if (session('resent'))
                                            <p style="color: #003100;"><strong>Un nou e-mail de verificare a fost trimis!</strong></p>
                                        @endif

                                        <p id="resendNormal">
                                            Te rugăm să aștepți câteva minute pentru a primi e-mail-ul de activare.
                                            Totodată, nu uita să verifici folderele Spam / Junk. În cazul în care
                                            încă nu primești mesajul, poți solicita retrimiterea acestuia.

                                            <br /><br />

                                            <a href="{{ route('verification.resend') }}">
                                                Retrimite mailul de activare
                                            </a>
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
