@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div id="download" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Descărcare</h2>
                    <div class="download-inner-content">
                        <h3>Descarcă gratis Metin2 acum!</h3>
                        <a href="https://web.archive.org/web/20130708163956/http://dlcl.gfsrv.net/metin2/clients/ro/Downloader_Metin2_ro.exe" class="download-button-1" onclick="javascript:pageTracker._trackPageview('/downloads/client');"> </a>
                        <a href="https://web.archive.org/web/20130708163956/http://tracker.gfsrv.net/Metin2_ro_20111216.exe.torrent" class="download-button-2" onclick="javascript:pageTracker._trackPageview('/downloads/torrent');"> </a>
                        <br class="clearfloat">
                        <a href="javascript:void(0)" id="requirements">» Cerinte de sistem</a>
                        <div id="required">
                            <table border="0">
                                <caption>
                                    Cerinte minime de sistem                            </caption>
                                <tbody>
                                <tr>
                                    <td class="left_td">OS</td>
                                    <td>- Win XP, Win 2000, Win Vista, Win 7</td>
                                </tr>
                                <tr>
                                    <td class="left_td">CPU</td>
                                    <td>- Pentium 3 1GHz</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Memorie</td>
                                    <td>- 512M</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Hard Drive</td>
                                    <td>- 2 GB</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Placa grafica de memorie</td>
                                    <td>- Placa grafica de baza cu minim 32MB RAM</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Placa de sunet</td>
                                    <td>- Support DirectX 9.0</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Mouse</td>
                                    <td>- Mouse compatibil cu Windows-ul</td>
                                </tr></tbody>
                            </table>
                            <table border="0">
                                <caption>
                                    Cerinte de sistem recomandate                            </caption>
                                <tbody>
                                <tr>
                                    <td class="left_td">OS</td>
                                    <td>- Win XP, Win 2000, Win Vista, Win 7</td>
                                </tr>
                                <tr>
                                    <td class="left_td">CPU</td>
                                    <td>- Pentium 4 1.8GHz</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Memorie</td>
                                    <td>- 1G</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Hard Drive</td>
                                    <td>- 3 GB</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Placa grafica de memorie</td>
                                    <td>- Placa grafica de memorie de minim 64MB RAM</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Placa de sunet</td>
                                    <td>- Support DirectX 9.0</td>
                                </tr>
                                <tr>
                                    <td class="left_td">Mouse</td>
                                    <td>- Mouse compatibil cu Windows-ul</td>
                                </tr></tbody>
                            </table>
                        </div>
                        <p id="downloadText">Memoria insuficienta a placii grafice de memorie poate duce la pierderea FPS.
                            Configureaza-ti setarile jocului pentru a evita aceasta problema.
                            In cazul in care descarcarea are loc de catre mai multi useri in acelasi timp, aceasta poate fi mai scazuta, de aceea te rugam sa ai rabdare.</p>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#requirements').click(function(){
                                    $('#required').slideToggle();
                                });
                            });
                        </script>
                        <div class="download-box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
