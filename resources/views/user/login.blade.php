@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div id="login" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Logare</h2>
                    <div class="inner-form-border">
                        <div class="inner-form-box">
                            <h3><a id="topwLost" href="{{ url('user/passwordlostrequest') }}" title="Ai uitat parola?">Ai uitat parola?</a>Logare</h3>
                            <div class="trenner"></div>
                            <form name="loginForm" id="loginForm" action="{{ url('user/login') }}" method="post">
                                <div>
                                    <label for="username">Nume de utilizator: *</label>
                                    <input type="text" class="validate[required,custom[noSpecialCharacters]]" id="username" name="username" maxlength="16" value=""/>
                                </div>
                                <div>
                                    <label for="password">Parola: *</label>
                                    <input type="password" class="validate[required,length[5,16]]" id="password" name="password" maxlength="16" value=""/>
                                </div>
                                <div id="checkerror">
                                    <p>Intrând aici, accept <a href="{{ url('legal/terms') }}" target="_blank"><strong>Termenii şi condiţiile</strong></a>.</p>
                                </div>
                                <input id="submitBtn" class="btn-big" type="submit" name="SubmitLoginForm" value="Trimite"/>
                                <script type="text/javascript">
                                </script>
                            </form>
                            <p id="regLegend">* este necesar</p>
                            <div class="trenner"></div>
                            <div id="subscribe">
                                <h3>Încă nu ai cont?</h3>
                                <p>Crearea unui jucător (cont) este rapidă, usoară și gratis.</p>
                                <a class="btn-big" href="{{ url('user/register') }}" title="Crează un cont">Crează un cont</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
