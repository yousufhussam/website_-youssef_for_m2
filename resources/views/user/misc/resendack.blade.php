@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="resendActiv">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>
                    <div class="inner-form-border">
                        <div class="inner-form-box">
                            <h3><a id="toAdmin" href="{{ url('user/login') }}" title="zurück zum Login">înapoi la autentificare</a>Retrimiterea emailului de înregistrare</h3>
                            <div class="trenner"></div>
                            <form name="resendactivForm" id="resendactivForm" method="post" action="{{ url('user/resendack') }}">
                                <div>
                                    <label for="username">Nume de utilizator: *</label>
                                    <input type="text" class="validate[required,custom[noSpecialCharacters],length[5,16]]" id="username" name="username" title="" maxlength="16" value=""/>
                                </div>
                                <div>
                                    <label for="email">Email: *</label>
                                    <input type="text" class="validate[required,custom[email]]" id="email" name="email" title="" maxlength="64" value=""/>
                                </div>
                                <input id="submitBtn" type="submit" name="SubmitResendActivationEmailForm" value="Trimite" class="btn-big"/>
                                <script type="text/javascript">
                                </script>
                            </form>
                            <p id="regLegend">* este necesar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
