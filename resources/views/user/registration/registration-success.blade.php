@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="authenticated">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>

                    <x-registration.progress :step="3" />

                    <div class="pass-lost-inner-content">
                        <div class="input-data-box">
                            <div id="activateAccount" class="inner-form-border">
                                <div class="inner-form-box clearfix">
                                    <h3>Ai fost înregistrat cu succes!</h3>
                                    <div class="trenner"></div>

                                    <div id="activateBox">
                                        <p>
                                            Contul tău este acum activat. Continuă prin a descărca jocul de mai jos.
                                            Distracție plăcută!
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
