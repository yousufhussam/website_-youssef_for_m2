@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="guildHighscore">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Listarea rangurilor</h2>
                    <div class="ranks-inner-content"><br/>
                        <div class="ranks-dropdowns-box">
                            <form action="{{ url('main/guildhighscore') }}" name="highscoreform" method="POST">
                                <div class="ranks-select-box">
                                    <label>Server:</label>
                                    <select name="serverchoice">
                                        <option value="1" selected="selected">Leonis</option>
                                        <option value="2">Virgo</option>
                                        <option value="3">Pegasus</option>
                                        <option value="4">Sagitta</option>
                                        <option value="5">Corvus</option>
                                        <option value="6">Taurus</option>
                                        <option value="7">Hydra</option>
                                        <option value="8">Aries</option>
                                        <option value="9">Gemini</option>
                                        <option value="10">Lupus</option>
                                        <option value="11">Draco</option>
                                        <option value="12">Volans</option>
                                        <option value="13">Trianguli</option>
                                    </select>
                                </div>
                                <div class="ranks-select-box">
                                    <label>Arată imperiu:</label>
                                    <select name="empirechoice">
                                        <option value="-1" selected>[toate imperiile]</option>
                                        <option value="1">Imperiul Shinsoo</option>
                                        <option value="2">Imperiul Chunjo</option>
                                        <option value="3">Imperiul Jinno</option>
                                    </select>
                                </div>
                                <div class="ranks-select-box">
                                    <label>Caută breasla:</label>
                                    <div class="ranks-input">
                                        <input type="text" value="" name="guildchoice"/>
                                    </div>
                                </div>
                                <div class="ranks-select-box-btn">
                                    <a class="small-btn" href="#" onclick="document.forms['highscoreform'].submit();return false;">Căutare</a>
                                </div>
                                <div class="clearfloat"></div>
                            </form>
                        </div>
                        <div class="ranks-nav prev prev-top"><a href="https://web.archive.org/web/20130715184054/http://www.metin2.ro/main/guildhighscore/1/-1/1/">&lt;&lt; anterioarele 10 ranguri</a></div>

                        <div class="ranks-nav next next-top"><a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore/1/-1/11/">urmatoarele 10 ranguri &gt;&gt;</a></div>
                        <br class="clearfloat"/>
                        <table border="0" cellpadding="0" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="guildrank-th-1">Rang</th>
                                <th class="guildrank-th-2">Breasla</th>
                                <th class="guildrank-th-3">Lider Breaslă</th>
                                <th class="guildrank-th-4">Regat</th>
                                <th class="guildrank-th-5">Nivel</th>
                                <th class="guildrank-th-6">Puncte</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="rankfirst">
                                <td class="guildrank-td-1-1">1</td>
                                <td class="guildrank-td-1-2">InStyle</td>
                                <td class="guildrank-td-1-3">divolitzaTa</td>
                                <td class="guildrank-td-1-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34px" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="guildrank-td-1-5">20</td>
                                <td class="guildrank-td-1-6">119494</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-2-1">2</td>
                                <td class="guildrank-td-2-2">ISENGARD</td>
                                <td class="guildrank-td-2-3">Florin10</td>
                                <td class="guildrank-td-2-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34px" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="guildrank-td-2-5">20</td>
                                <td class="guildrank-td-2-6">113902</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-1-1">3</td>
                                <td class="guildrank-td-1-2">TheRulers</td>
                                <td class="guildrank-td-1-3">gabitza20</td>
                                <td class="guildrank-td-1-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34px" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="guildrank-td-1-5">20</td>
                                <td class="guildrank-td-1-6">76941</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-2-1">4</td>
                                <td class="guildrank-td-2-2">A55A55INII</td>
                                <td class="guildrank-td-2-3">AnA3634</td>
                                <td class="guildrank-td-2-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34px" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="guildrank-td-2-5">20</td>
                                <td class="guildrank-td-2-6">75729</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-1-1">5</td>
                                <td class="guildrank-td-1-2">TheElfs</td>
                                <td class="guildrank-td-1-3">SorrcerreR</td>
                                <td class="guildrank-td-1-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34px" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="guildrank-td-1-5">20</td>
                                <td class="guildrank-td-1-6">55547</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-2-1">6</td>
                                <td class="guildrank-td-2-2">MAESTRIIpur</td>
                                <td class="guildrank-td-2-3">MAESTRAiuby</td>
                                <td class="guildrank-td-2-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34px" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="guildrank-td-2-5">15</td>
                                <td class="guildrank-td-2-6">50908</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-1-1">7</td>
                                <td class="guildrank-td-1-2">NeBuNaTiCii</td>
                                <td class="guildrank-td-1-3">MANXL</td>
                                <td class="guildrank-td-1-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34px" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="guildrank-td-1-5">20</td>
                                <td class="guildrank-td-1-6">50164</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-2-1">8</td>
                                <td class="guildrank-td-2-2">TheGoDs</td>
                                <td class="guildrank-td-2-3">PaCaToaSa</td>
                                <td class="guildrank-td-2-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf2.geo.gfsrv.net/cdn13/7211083d422c5dc6c70b198e850004.png" width="34px" alt="Imperiul Shinsoo" title="Imperiul Shinsoo"/></td>
                                <td class="guildrank-td-2-5">12</td>
                                <td class="guildrank-td-2-6">48107</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-1-1">9</td>
                                <td class="guildrank-td-1-2">7UP</td>
                                <td class="guildrank-td-1-3">KANNDY</td>
                                <td class="guildrank-td-1-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34px" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="guildrank-td-1-5">20</td>
                                <td class="guildrank-td-1-6">45964</td>
                            </tr>
                            <tr>
                                <td class="guildrank-td-2-1">10</td>
                                <td class="guildrank-td-2-2">ReVoLuTioN</td>
                                <td class="guildrank-td-2-3">Tucson</td>
                                <td class="guildrank-td-2-4"><img src="https://web.archive.org/web/20130621071508im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34px" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="guildrank-td-2-5">20</td>
                                <td class="guildrank-td-2-6">42929</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="ranks-nav prev"><a href="https://web.archive.org/web/20130715184054/http://www.metin2.ro/main/guildhighscore/1/-1/1/">&lt;&lt; anterioarele 10 ranguri</a></div>

                        <div class="ranks-nav next"><a href="https://web.archive.org/web/20130621071508/http://www.metin2.ro/main/guildhighscore/1/-1/11/">urmatoarele 10 ranguri &gt;&gt;</a></div>

                        <div class="clearfloat"></div>
                        <div class="ranks-update-time">Update: 21.06.2013 05:27:36</div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#guildHighscore table tr:odd').addClass('zebra');
        });
    </script>
@endsection
