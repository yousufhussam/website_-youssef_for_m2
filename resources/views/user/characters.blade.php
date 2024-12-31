@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <!-- character list -->
                    <div class="char-list-content">
                        <h2>{{ __('app/user/characters.title') }}</h2>

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

                        @foreach ($characters as $character)
                            <div class="charList">
                                <div class="charimg" rowspan="3">
                                    <img src="{{ asset("assets/main/img/characters/{$character->job->value}.png") }}" width="44" height="40" />
                                </div>
                                <div class="charuser">
                                    <div class="charname">{{ $character->name }}</div>
                                    <div class="charrank">
                                        <span class="charlabel">{{ __('app/user/characters.rank') }}</span>
                                        @if ($character->highscore)
                                            <span class="chardata">#{{ $character->highscore->id }}</span>
                                        @else
                                            <span class="chardata">N/A</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="charrow">
                                    <div class="charclass">
                                        <span class="charlabel">{{ __('app/user/characters.class') }}</span>
                                        <span class="chardata">{{ $character->job->name() }}</span>
                                    </div>
                                    <div class="chartime">
                                        <span class="charlabel">{{ __('app/user/characters.time') }}</span>
                                        <span class="chardata">{{ (int) ($character->playtime / 60) }}h {{ $character->playtime % 60 }}m</span>
                                    </div>
                                </div>
                                <div class="charrow">
                                    <div class="charlevel">
                                        <span class="charlabel">{{ __('app/user/characters.level') }}</span>
                                        <span class="chardata">{{ $character->level }}</span>
                                    </div>
                                    <div class="charlevel">
                                        <span class="charlabel">{{ __('app/user/characters.exp') }}</span>
                                        <span class="chardata">{{ number_format($character->exp, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                                <div class="charrow charend">
                                    <div class="charposition">
                                        <span class="charlabel">{{ __('app/user/characters.empire') }}</span>
                                        <span class="chardata">{{ $character->index->empire->name() }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
