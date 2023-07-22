@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="highscore">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Listarea rangurilor</h2>
                    <div class="ranks-inner-content"><br/>
                        <div class="ranks-dropdowns-box">
                            <form action="{{ url('main/highscore') }}" name="highscoreform" method="post">
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
                                    <label>Arata categoriile:</label>
                                    <select name="classchoice">
                                        <option value="-1" selected="selected">[all classes]</option>
                                        <option value="0">Războinic</option>
                                        <option value="1">Ninja</option>
                                        <option value="2">Sura</option>
                                        <option value="3">Şaman</option>
                                    </select>
                                </div>
                                <div class="ranks-select-box">
                                    <label>Alege caracterul:</label>
                                    <div class="ranks-input">
                                        <input type="text" value="" name="characterchoice"/>
                                    </div>
                                </div>
                                <div class="ranks-select-box-btn">
                                    <a class="small-btn" href="#" onclick="document.forms['highscoreform'].submit();return false;">Căutare</a>
                                </div>
                                <div class="clearfloat"></div>
                            </form>
                        </div>
                        <div class="ranks-nav prev prev-top"><a href="https://web.archive.org/web/20130715184054/http://www.metin2.ro/main/guildhighscore/1/-1/1/">&lt;&lt; anterioarele 10 ranguri</a></div>

                        <div class="ranks-nav next next-top"><a href="https://web.archive.org/web/20130708165425/http://www.metin2.ro/main/highscore/1/-1/11/">urmatoarele 10 ranguri &gt;&gt;</a></div>
                        <br class="clearfloat"/>
                        <table border="0" style="table-layout:fixed">
                            <thead>
                            <tr>
                                <th class="rank-th-1">Rang</th>
                                <th class="rank-th-2">Numele Caracterului</th>
                                <th class="rank-th-3">Regat</th>
                                <th class="rank-th-4">Nivel</th>
                                <th class="rank-th-5">EXP</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="rankfirst">
                                <td class="rank-td-1-1">1</td>
                                <td class="rank-td-1-2">picyu3</td>
                                <td class="rank-td-1-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="rank-td-1-4">105</td>
                                <td class="rank-td-1-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-2-1">2</td>
                                <td class="rank-td-2-2">XXXMEN77</td>
                                <td class="rank-td-2-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn13/7211083d422c5dc6c70b198e850004.png" width="34" alt="Imperiul Shinsoo" title="Imperiul Shinsoo"/></td>
                                <td class="rank-td-2-4">105</td>
                                <td class="rank-td-2-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-1-1">3</td>
                                <td class="rank-td-1-2">Spydy</td>
                                <td class="rank-td-1-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn13/7211083d422c5dc6c70b198e850004.png" width="34" alt="Imperiul Shinsoo" title="Imperiul Shinsoo"/></td>
                                <td class="rank-td-1-4">105</td>
                                <td class="rank-td-1-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-2-1">4</td>
                                <td class="rank-td-2-2">beLeSe</td>
                                <td class="rank-td-2-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="rank-td-2-4">105</td>
                                <td class="rank-td-2-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-1-1">5</td>
                                <td class="rank-td-1-2">alexdenis</td>
                                <td class="rank-td-1-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="rank-td-1-4">105</td>
                                <td class="rank-td-1-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-2-1">6</td>
                                <td class="rank-td-2-2">addygryg</td>
                                <td class="rank-td-2-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="rank-td-2-4">105</td>
                                <td class="rank-td-2-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-1-1">7</td>
                                <td class="rank-td-1-2">Pixie03</td>
                                <td class="rank-td-1-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="rank-td-1-4">105</td>
                                <td class="rank-td-1-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-2-1">8</td>
                                <td class="rank-td-2-2">KingARAGORN</td>
                                <td class="rank-td-2-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn17/202178f2cf7a2e45f4be61bb360228.png" width="34" alt="Imperiul Jinno" title="Imperiul Jinno"/></td>
                                <td class="rank-td-2-4">105</td>
                                <td class="rank-td-2-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-1-1">9</td>
                                <td class="rank-td-1-2">pauldpv2001</td>
                                <td class="rank-td-1-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf3.geo.gfsrv.net/cdnbe/2bb161df7f13e26bd0545acc5967b2.png" width="34" alt="Imperiul Chunjo" title="Imperiul Chunjo"/></td>
                                <td class="rank-td-1-4">105</td>
                                <td class="rank-td-1-5">0</td>
                            </tr>
                            <tr>
                                <td class="rank-td-2-1">10</td>
                                <td class="rank-td-2-2">SCORPIO1</td>
                                <td class="rank-td-2-3"><img src="https://web.archive.org/web/20130708165425im_/http://gf2.geo.gfsrv.net/cdn13/7211083d422c5dc6c70b198e850004.png" width="34" alt="Imperiul Shinsoo" title="Imperiul Shinsoo"/></td>
                                <td class="rank-td-2-4">105</td>
                                <td class="rank-td-2-5">0</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="ranks-nav prev"><a href="https://web.archive.org/web/20130715184054/http://www.metin2.ro/main/guildhighscore/1/-1/1/">&lt;&lt; anterioarele 10 ranguri</a></div>

                        <div class="ranks-nav next"><a href="https://web.archive.org/web/20130708165425/http://www.metin2.ro/main/highscore/1/-1/11/">urmatoarele 10 ranguri &gt;&gt;</a></div>

                        <div class="clearfloat"></div>
                        <div class="ranks-update-time">Update: 08.07.2013 14:57:16</div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#highscore table tr:odd').addClass('zebra');
        });
    </script>
@endsection
