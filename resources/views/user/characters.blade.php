@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <!-- character list -->
                    <div class="char-list-content">
                        <h2>Lista caracterelor</h2>

                        {{--
                            Pagination reverse-engineering (incomplete)

                            <div class="pagerWrapper">
                                <div class="sort-char-list">
                                    <label class="sellabel">Ordonează după:</label>
                                    <select class="charselect">
                                        <option selected>Rang</option>
                                        <option>Nume</option>
                                        <option>Timp de joc</option>
                                    </select>
                                </div>
                                <div class="pager">
                                    <a href="#prev" class="pager-prev bg-none"></a>
                                    <span class="pager-middle">1/2</span>
                                    <a href="#next" class="pager-next bg-none"></a>
                                </div>
                            </div>
                        --}}


                        <div class="charList">
                            <div class="charimg" rowspan="3">
                                <img src="{{ asset('img/characters/0.png') }}" width="44" height="40" />
                            </div>
                            <div class="charuser">
                                <div class="charname">gigelfronescu</div>
                                <div class="charrank">
                                    <span class="charlabel">Rang</span> <span class="chardata">#123</span>
                                </div>
                            </div>
                            <div class="charrow">
                                <div class="charclass"><span class="charlabel">Clasă</span> <span class="chardata">Sura</span></div>
                                <div class="chartime"><span class="charlabel">Timp de joc</span> <span class="chardata">3h 20m</span></div>
                            </div>
                            <div class="charrow">
                                <div class="charlevel"><span class="charlabel">Nivel</span><span class="chardata">69</span></div>
                                <div class="charlevel"><span class="charlabel">Experiență</span> <span class="chardata">1.351.561</span></div>
                            </div>
                            <div class="charrow charend">
                                <div class="charposition"><span class="charlabel">Regat</span> <span class="chardata">Shinsoo</span></div>
                            </div>
                        </div>
                        <div class="charList">
                            <div class="charimg" rowspan="3">
                                <img src="{{ asset('img/characters/2.png') }}" width="44" height="40" />
                            </div>
                            <div class="charuser">
                                <div class="charname">gigelfronescu</div>
                                <div class="charrank">
                                    <span class="charlabel">Rang</span> <span class="chardata">#123</span>
                                </div>
                            </div>
                            <div class="charrow">
                                <div class="charclass"><span class="charlabel">Clasă</span> <span class="chardata">Sura</span></div>
                                <div class="chartime"><span class="charlabel">Timp de joc</span> <span class="chardata">3h 20m</span></div>
                            </div>
                            <div class="charrow">
                                <div class="charlevel"><span class="charlabel">Nivel</span><span class="chardata">69</span></div>
                                <div class="charlevel"><span class="charlabel">Experiență</span> <span class="chardata">1.351.561</span></div>
                            </div>
                            <div class="charrow charend">
                                <div class="charposition"><span class="charlabel">Regat</span> <span class="chardata">Shinsoo</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
