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
                            <h3><a id="toLogin" href="https://web.archive.org/web/20100818081013/http://www.metin2.ro/user/login" title="înapoi la autentificare">înapoi la autentificare</a>Ai uitat parola?</h3>
                            <div class="trenner"></div>
                            <form name="lostPasswordCodeForm" id="lostPasswordCodeForm" method="post" action="https://web.archive.org/web/20100818081013/http://www.metin2.ro/user/lostpasswordcode/12359/3d0c9de6bcf0437616fb152ac22e7b6e" data-bitwarden-watching="1">
                                <div class="clearfix">
                                    <label for="newPassword">Parola <b>nouă</b>: *</label>
                                    <input type="password" class="validate[required,length[5,16]]" id="newPassword" name="newPassword" title="" value="" maxlength="16">
                                    <div id="securePwd">
                                        <p><strong>
                                                Nivelul de securitate al parolei voastre										: </strong><br>
                                            Pentru protejarea contului tău, recomandăm să alegeţi o parolă de cel puţin 8 caractere, care să conţină cel puţin o minusculă, o majusculă şi o cifra.									</p>
                                        <div class="valid-icon invalid"></div>
                                        <div class="securePwdBarBox">
                                            <div id="securePwdBar"></div>
                                        </div>
                                        <br class="clearfloat">
                                    </div>
                                </div>
                                <input id="submitBtn" type="submit" name="SubmitLostPasswordCodeForm" value="Trimite" class="btn-big">
                                <script type="text/javascript">
                                    $.validationEngine.buildPrompt("#newPassword","Link-ul nu este corect. Esti sigur ca ai copiat corect link-ul din e-mail?","error");							</script>
                            </form>
                            <p id="regLegend">* este necesar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
