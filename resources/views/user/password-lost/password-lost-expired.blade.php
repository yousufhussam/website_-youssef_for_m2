@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="lostPasswordCode">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Ai uitat parola?</h2>
                    <div class="inner-form-border">
                        <div class="inner-form-box">
                            <h3><a id="toLogin" href="https://web.archive.org/web/20130226070327/http://www.metin2.ro/user/login" title="înapoi la autentificare">înapoi la autentificare</a>Ai uitat parola?</h3>
                            <div class="trenner"></div>
                            <p>Introdu aici noua ta parolă.</p>
                            <div class="trenner"></div>
                            <form name="lostPasswordCodeForm" id="lostPasswordCodeForm" method="post" action="https://web.archive.org/web/20130226070327/http://www.metin2.ro/user/passwordlost/maringeorgian/a20bf2c74e0eea8a15326005293157ab">
                                <div id="pwField">
                                    <div id="pwInfo">
                                        <h3><img src="https://web.archive.org/web/20130226070327im_/http://gf1.geo.gfsrv.net/cdn33/46b03dc97e454190bccf81cfd3a9ba.gif" alt="Reguli parolă" title="Reguli parolă"/> O parolă sigură să conţină:</h3>
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
                                                $('#newPassword').focusin(function() {
                                                    $('#pwInfo').fadeIn();
                                                });
                                                $('#newPassword').focusout(function() {
                                                    $('#pwInfo').fadeOut();
                                                });
                                                if ($('#newPassword').val() != '') {
                                                    $('#newPassword').keyup();
                                                }
                                            });
                                        </script>
                                    </div>
                                    <label for="newPassword">Parola <b>nouă</b>: *
                                        <span id="toPwInfo" title="Reguli parolă">Reguli parolă <img src="https://web.archive.org/web/20130226070327im_/http://gf1.geo.gfsrv.net/cdn33/46b03dc97e454190bccf81cfd3a9ba.gif" alt="Reguli parolă" title="Reguli parolă"/></span>
                                    </label>
                                    <input type="password" class="validate[required,custom[onlyValidPasswordCharacters],length[5,16]]" id="newPassword" name="newPassword" value="" maxlength="16"/>
                                    <div id="securePwd">
                                        <p>Nivelul de securitate al parolei voastre:</p>
                                        <div class="valid-icon invalid"></div>
                                        <div class="securePwdBarBox">
                                            <div id="securePwdBar"></div>
                                        </div>
                                        <br class="clearfloat"/>
                                    </div>
                                </div>
                                <input id="submitBtn" type="submit" name="SubmitLostPasswordCodeForm" value="Trimite" class="btn-big"/>
                                <script type="text/javascript">
                                    $.validationEngine.buildPrompt("#newPassword", "Link-ul nu este corect. Esti sigur ca ai copiat corect link-ul din e-mail?", "error");                            </script>
                            </form>
                            <p id="regLegend">* este necesar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
