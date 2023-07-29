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
                                        <p id="resendNormal">
                                            <a href="{{ url('user/resendack') }}">
                                                Nu ai primit un e-mail? Retrimite mailul de activare
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
