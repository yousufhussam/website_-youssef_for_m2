@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="highscore">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/highscore.title') }}</h2>
                    <div class="ranks-inner-content"><br/>
                        <div class="ranks-dropdowns-box">
                            <form action="{{ url('main/highscore') }}" name="highscore-form" method="post">
                                @csrf

                                {{-- Temporarily disabled until multi-server support is implemented; added empire choice instead
                                    <div class="ranks-select-box">
                                        <label>Server:</label>
                                        <select name="serverchoice">
                                            <option value="1" selected="selected">Server name 1</option>
                                            <option value="2">Server name 2</option>
                                            <option value="3">Server name 3</option>
                                        </select>
                                    </div>
                                --}}

                                <div class="ranks-select-box">
                                    <label>{{ __('app/highscore.search.select-empire') }}</label>
                                    <select name="empire-choice">
                                        <option value="-1">{{ __('app/highscore.search.all-empires') }}</option>
                                        @foreach (\App\Models\Enums\EmpireEnum::cases() as $empire)
                                            <option value="{{ $empire->value }}" @selected($empireChoice === $empire->value)>
                                                {{ $empire->name() }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="ranks-select-box">
                                    <label>{{ __('app/highscore.search.select-class') }}</label>
                                    <select name="class-choice">
                                        <option value="-1">{{ __('app/highscore.search.all-classes') }}</option>
                                        @foreach (\App\Models\Enums\CharacterClassEnum::cases() as $class)
                                            <option value="{{ $class->value }}" @selected($classChoice === $class->value)>
                                                {{ $class->name() }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="ranks-select-box">
                                    <label>{{ __('app/highscore.search.find-character') }}</label>
                                    <div class="ranks-input">
                                        <input type="text" value="{{ $characterChoice ?? '' }}" name="character-choice"/>
                                    </div>
                                </div>
                                <div class="ranks-select-box-btn">
                                    <a class="small-btn" href="#" onclick="document.forms['highscore-form'].submit();return false;">
                                        {{ __('app/highscore.search') }}
                                    </a>
                                </div>
                                <div class="clearfloat"></div>
                            </form>
                        </div>

                        @if ($highscore->isEmpty())
                            <div class="error-mini error-mini-margin error-mini-maxwidth">{{ __("app/highscore.no-results") }}</div>
                        @else
                            @if ($highscore->lastPage() > 1)
                                <div class="ranks-nav prev prev-top">
                                    @if ($highscore->currentPage() > 1)
                                        <a href="{{ route('highscore-page', ['empireChoice' => $empireChoice, 'classChoice' => $classChoice, 'page' => $highscore->currentPage() - 1, 'character-choice' => $characterChoice ?? null]) }}">&lt;&lt; {{ __("app/highscore.pagination.prev", ['count' => $highscore->perPage()]) }}</a>
                                    @endif
                                </div>
                                <div class="ranks-nav next next-top">
                                    @if ($highscore->hasMorePages())
                                        <a href="{{ route('highscore-page', ['empireChoice' => $empireChoice, 'classChoice' => $classChoice, 'page' => $highscore->currentPage() + 1, 'character-choice' => $characterChoice ?? null]) }}">{{ __("app/highscore.pagination.next", ['count' => $highscore->perPage()]) }} &gt;&gt;</a>
                                    @endif
                                </div>
                            @endif

                            <br class="clearfloat"/>
                            <table border="0" style="table-layout:fixed">
                                <thead>
                                <tr>
                                    <th class="rank-th-1">{{ __("app/highscore.header.rank") }}</th>
                                    <th class="rank-th-2">{{ __("app/highscore.header.character-name") }}</th>
                                    <th class="rank-th-3">{{ __("app/highscore.header.empire") }}</th>
                                    <th class="rank-th-4">{{ __("app/highscore.header.level") }}</th>
                                    <th class="rank-th-5">{{ __("app/highscore.header.exp") }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($highscore as $entry)
                                        <tr @class(["rankfirst" => $entry->id == 1, "zebra" => $loop->odd])>
                                            <td @class(["rank-td-1-1" => $loop->odd, "rank-td-2-1" => $loop->even])>
                                                {{ $entry->id }}
                                            </td>
                                            <td @class(["rank-td-1-2" => $loop->odd, "rank-td-2-2" => $loop->even])>
                                                {{ $entry->name }}
                                            </td>
                                            <td @class(["rank-td-1-3" => $loop->odd, "rank-td-2-3" => $loop->even])>
                                                @if ($entry->empire == \App\Models\Enums\EmpireEnum::SHINSOO)
                                                    <img src="{{ asset("assets/main/img/empire1.png") }}" width="34" alt="{{ $entry->empire->longName() }}" title="{{ $entry->empire->longName() }}" />
                                                @elseif ($entry->empire == \App\Models\Enums\EmpireEnum::CHUNJO)
                                                    <img src="{{ asset("assets/main/img/empire2.png") }}" width="34" alt="{{ $entry->empire->longName() }}" title="{{ $entry->empire->longName() }}" />
                                                @elseif ($entry->empire == \App\Models\Enums\EmpireEnum::JINNO)
                                                    <img src="{{ asset("assets/main/img/empire3.png") }}" width="34" alt="{{ $entry->empire->longName() }}" title="{{ $entry->empire->longName() }}" />
                                                @endif
                                            </td>
                                            <td @class(["rank-td-1-4" => $loop->odd, "rank-td-2-4" => $loop->even])>
                                                {{ $entry->level }}
                                            </td>
                                            <td @class(["rank-td-1-5" => $loop->odd, "rank-td-2-5" => $loop->even])>
                                                {{ $entry->exp }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @if ($highscore->lastPage() > 1)
                                <div class="ranks-nav prev">
                                    @if ($highscore->currentPage() > 1)
                                        <a href="{{ route('highscore-page', ['empireChoice' => $empireChoice, 'classChoice' => $classChoice, 'page' => $highscore->currentPage() - 1, 'character-choice' => $characterChoice ?? null]) }}">&lt;&lt; {{ __("app/highscore.pagination.prev", ['count' => $highscore->perPage()]) }}</a>
                                    @endif
                                </div>
                                <div class="ranks-nav next">
                                    @if ($highscore->hasMorePages())
                                        <a href="{{ route('highscore-page', ['empireChoice' => $empireChoice, 'classChoice' => $classChoice, 'page' => $highscore->currentPage() + 1, 'character-choice' => $characterChoice ?? null]) }}">{{ __("app/highscore.pagination.next", ['count' => $highscore->perPage()]) }} &gt;&gt;</a>
                                    @endif
                                </div>
                            @endif

                            <div class="clearfloat"></div>
                            <div class="ranks-update-time">{{ __('app/highscore.update-time') }} {{ $highscore->max('date')->translatedFormat('d F Y H:i:s') }}</div>
                        @endif
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
