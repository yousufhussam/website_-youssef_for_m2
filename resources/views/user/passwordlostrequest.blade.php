@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div id="pwLost" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Ai uitat parola?</h2>
                    <div class="inner-form-border">
                        <div class="inner-form-box">
                            <h3><a id="toLogin" href="{{ url('user/login') }}" title="înapoi la autentificare">înapoi la autentificare</a>Ai uitat parola?</h3>
                            <div class="trenner"></div>
                            <form name="pwlostForm" id="pwlostForm" method="post" action="{{ url('user/passwordlostrequest') }}">
                                <div>
                                    <label for="username">Nume de utilizator: *</label>
                                    <input type="text" class="validate[required,custom[noSpecialCharacters]]" id="username" name="username" title="" value="" maxlength="16"/>
                                </div>
                                <div>
                                    <label for="email">Email: *</label>
                                    <input type="text" class="validate[required,custom[email]]" id="email" name="email" title="" value="" maxlength="64"/>
                                </div>
                                <input id="submitBtn" type="submit" name="SubmitPasswordLostForm" value="Trimite" class="btn-big"/>
                                <script type="text/javascript">
                                </script>
                            </form>
                            <p id="regLegend">* este necesar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
