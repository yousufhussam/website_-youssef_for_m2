@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div id="register" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Înregistrarea</h2>
                    <div id="progressTracker">
                        <div id="progress1" class="active">
                            <div class="step">1</div>
                            <p class="progress-text">Înregistrare</p>
                        </div>
                        <div id="progress2" class="inactive">
                            <div class="step">2</div>
                            <p class="progress-text">Activează și descarcă</p>
                        </div>
                        <div id="progress3" class="inactive">
                            <div class="step">3</div>
                            <p class="progress-text">Instalează și joacă-te</p>
                        </div>
                    </div>
                    <div class="inner-form-border">
                        <div class="inner-form-box">
                            <h3><a id="toLogin" href="{{ url('user/login') }}" title="sau la autentificare">sau la autentificare</a>Creează un cont</h3>
                            <div class="trenner"></div>
                            <form name="registerForm" id="registerForm" method="post" action="{{ url('user/register') }}">
                                <div>
                                    <label for="username">Nume de utilizator: *</label>
                                    <input type="text" class="validate[required,custom[noSpecialCharacters],length[5,16]]" id="username" name="username" title="" value="" maxlength="16"/>
                                </div>
                                <div>
                                    <label for="email">Email: *</label>
                                    <input type="text" class="validate[required,custom[email]]" id="email" name="email" maxlength="64" title="" value=""/>
                                </div>
                                <div id="pwField">
                                    <div id="pwInfo">
                                        <h3><img src="{{ asset('img/help.gif') }}" alt="Reguli parolă" title="Reguli parolă"/> O parolă sigură să conţină:</h3>
                                        <ul>
                                            <li>între 5 și 16 caractere</li>
                                            <li>sau cel puțin o literă mică</li>
                                            <li>cel puțin o literă mare</li>
                                            <li>cel puțin un număr</li>
                                            <li>cel puțin un caracter special</li>
                                        </ul>
                                        <p><strong>Caractere speciale permise</strong>:<br/>
                                            @ ! # $ % &amp; ( ) { } * + ,<br/>
                                            - . / : ; &lt; &gt; = ? [ ] ^ _ | ~
                                        </p>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#password').focusin(function() {
                                                    $('#pwInfo').fadeIn();
                                                });
                                                $('#password').focusout(function() {
                                                    $('#pwInfo').fadeOut();
                                                });
                                                if ($('#password').val() != '') {
                                                    $('#password').keyup();
                                                }
                                            });
                                        </script>
                                    </div>
                                    <label for="password">Parola: *
                                        <span id="toPwInfo" title="Reguli parolă">Reguli parolă <img src="{{ asset('img/help.gif') }}" alt="Reguli parolă" title="Reguli parolă"/>
                                    </span>
                                    </label>
                                    <input type="password" class="validate[required,custom[onlyValidPasswordCharacters],length[5,16]]" id="password" name="password" maxlength="16" value=""/>
                                    <div id="securePwd">
                                        <p>Nivelul de securitate al parolei voastre:</p>
                                        <div class="valid-icon invalid"></div>
                                        <div class="securePwdBarBox">
                                            <div id="securePwdBar"></div>
                                        </div>
                                        <br class="clearfloat"/>
                                    </div>
                                </div>
                                <div id="checkerror">
                                    <input type="checkbox" class="validate[required]" id="tac" name="tac" value="tac"/>
                                    <span>Am citit <a href="{{ url('legal/terms') }}" target="_blank"><strong>Termenii și Condițiile</strong></a> și <a href="{{ url('legal/privacy') }}" target="_blank"><strong>Declarația privind protecția datelor</strong></a>. *</span>
                                </div>
                                <input id="submitBtn" type="submit" name="SubmitRegisterForm" value="Înregistrare" class="btn-big"/>
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
