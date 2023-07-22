@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="authenticated">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>
                    <div id="progressTracker">
                        <div id="progress1" class="passed">
                            <div class="step">1</div>
                            <p class="progress-text">Înregistrare</p>
                        </div>
                        <div id="progress2" class="passed">
                            <div class="step">2</div>
                            <p class="progress-text">Activează și descarcă</p>
                        </div>
                        <div id="progress3" class="active">
                            <div class="step">3</div>
                            <p class="progress-text">Instalează și joacă-te</p>
                        </div>
                    </div>
                    <div class="pass-lost-inner-content">
                        <div class="input-data-box">
                            <div id="activateAccount" class="inner-form-border">
                                <div class="inner-form-box clearfix">
                                    <h3>Înregistrarea dumneavoastră a eșuat!</h3>
                                    <div class="trenner"></div>
                                    <div id="activateBox">
                                        <div class="error-mini error-mini-margin error-mini-maxwidth">
                                            Link-ul de activare a fost deja accesat sau nu este corect.                                        </div>
                                        <p id="resendNormal">
                                            <a href="https://web.archive.org/web/20130715183628/http://www.metin2.ro/user/resendack">Nu ați primit un e-mail? Retrimite mailul de activare</a>
                                        </p>
                                    </div>
                                    <h3>Descărcați jocul</h3>
                                    <div class="trenner"></div>
                                    <a href="https://web.archive.org/web/20130715183628/http://dlcl.gfsrv.net/metin2/clients/ro/Downloader_Metin2_ro.exe" id="bigDownload">
                                        Descărcați<br/>jocul acum                                </a>
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
