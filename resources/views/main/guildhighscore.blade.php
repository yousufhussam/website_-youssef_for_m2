@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2" id="guildHighscore">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/highscore.title') }}</h2>
                    <div class="ranks-inner-content"><br/>
                        <div class="ranks-dropdowns-box">
                            <form action="{{ url('main/guildhighscore') }}" name="highscore-form" method="POST">
                                @csrf

                                {{-- Temporarily disabled until multi-server support is implemented; added guild leader instead
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
                                        <option value="-1" selected>{{ __('app/highscore.search.all-empires') }}</option>
                                        @foreach (\App\Models\Enums\EmpireEnum::cases() as $empire)
                                            <option value="{{ $empire->value }}" @selected($empireChoice === $empire->value)>
                                                {{ $empire->name() }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="ranks-select-box">
                                    <label>{{ __('app/highscore.search.find-guild') }}</label>
                                    <div class="ranks-input">
                                        <input type="text" value="{{ $guildChoice ?? '' }}" name="guild-choice"/>
                                    </div>
                                </div>
                                <div class="ranks-select-box">
                                    <label>{{ __('app/highscore.search.find-guild-leader') }}</label>
                                    <div class="ranks-input">
                                        <input type="text" value="{{ $guildLeaderChoice ?? '' }}" name="guild-leader-choice"/>
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
                                        <a href="{{ route('guild-highscore-page', ['empireChoice' => $empireChoice, 'page' => $highscore->currentPage() - 1, 'guild-choice' => $guildChoice ?? null, 'guild-leader-choice' => $guildChoice ?? null]) }}">&lt;&lt; {{ __("app/highscore.pagination.prev", ['count' => $highscore->perPage()]) }}</a>
                                    @endif
                                </div>
                                <div class="ranks-nav next next-top">
                                    @if ($highscore->hasMorePages())
                                        <a href="{{ route('guild-highscore-page', ['empireChoice' => $empireChoice, 'page' => $highscore->currentPage() + 1, 'guild-choice' => $guildChoice ?? null, 'guild-leader-choice' => $guildChoice ?? null]) }}">{{ __("app/highscore.pagination.next", ['count' => $highscore->perPage()]) }} &gt;&gt;</a>
                                    @endif
                                </div>
                            @endif

                            <br class="clearfloat"/>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="guildrank-th-1">{{ __("app/highscore.header.rank") }}</th>
                                    <th class="guildrank-th-2">{{ __("app/highscore.header.guild-name") }}</th>
                                    <th class="guildrank-th-3">{{ __("app/highscore.header.guild-leader") }}</th>
                                    <th class="guildrank-th-4">{{ __("app/highscore.header.empire") }}</th>
                                    <th class="guildrank-th-5">{{ __("app/highscore.header.level") }}</th>
                                    <th class="guildrank-th-6">{{ __("app/highscore.header.guild-points") }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($highscore as $entry)
                                        <tr @class(["rankfirst" => $entry->id == 1, "zebra" => $loop->odd])>
                                            <td @class(["guildrank-td-1-1" => $loop->odd, "guildrank-td-2-1" => $loop->even])>
                                                {{ $entry->id }}
                                            </td>
                                            <td @class(["guildrank-td-1-2" => $loop->odd, "guildrank-td-2-2" => $loop->even])>
                                                {{ $entry->name }}
                                            </td>
                                            <td @class(["guildrank-td-1-3" => $loop->odd, "guildrank-td-2-3" => $loop->even])>
                                                {{ $entry->master }}
                                            </td>
                                            <td @class(["guildrank-td-1-4" => $loop->odd, "guildrank-td-2-4" => $loop->even])>
                                                @if ($entry->empire == \App\Models\Enums\EmpireEnum::SHINSOO)
                                                    <img src="{{ asset("assets/main/img/empire1.png") }}" width="34" alt="{{ $entry->empire->longName() }}" title="{{ $entry->empire->longName() }}" />
                                                @elseif ($entry->empire == \App\Models\Enums\EmpireEnum::CHUNJO)
                                                    <img src="{{ asset("assets/main/img/empire2.png") }}" width="34" alt="{{ $entry->empire->longName() }}" title="{{ $entry->empire->longName() }}" />
                                                @elseif ($entry->empire == \App\Models\Enums\EmpireEnum::JINNO)
                                                    <img src="{{ asset("assets/main/img/empire3.png") }}" width="34" alt="{{ $entry->empire->longName() }}" title="{{ $entry->empire->longName() }}" />
                                                @endif
                                            </td>
                                            <td @class(["guildrank-td-1-5" => $loop->odd, "guildrank-td-2-5" => $loop->even])>
                                                {{ $entry->level }}
                                            </td>
                                            <td @class(["guildrank-td-1-6" => $loop->odd, "guildrank-td-2-6" => $loop->even])>
                                                {{ $entry->ladder_point }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @if ($highscore->lastPage() > 1)
                                <div class="ranks-nav prev">
                                    @if ($highscore->currentPage() > 1)
                                        <a href="{{ route('guild-highscore-page', ['empireChoice' => $empireChoice, 'page' => $highscore->currentPage() - 1, 'guild-choice' => $guildChoice ?? null, 'guild-leader-choice' => $guildChoice ?? null]) }}">&lt;&lt; {{ __("app/highscore.pagination.prev", ['count' => $highscore->perPage()]) }}</a>
                                    @endif
                                </div>
                                <div class="ranks-nav next">
                                    @if ($highscore->hasMorePages())
                                        <a href="{{ route('guild-highscore-page', ['empireChoice' => $empireChoice, 'page' => $highscore->currentPage() + 1, 'guild-choice' => $guildChoice ?? null, 'guild-leader-choice' => $guildChoice ?? null]) }}">{{ __("app/highscore.pagination.next", ['count' => $highscore->perPage()]) }} &gt;&gt;</a>
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
