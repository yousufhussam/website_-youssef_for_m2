@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/content/howto.first-steps.title') }}</h2>
                    <div class="firststeps-inner-content">
                        <ul class="tabs-nav tabs2">
                            <li id="tab1" class="selected"><a href="{{ url('main/howto') }}">{{ __('app/content/howto.tabs.first-steps') }}</a></li>
                            <li id="tab2"><a href="{{ url('main/tutorials') }}">{{ __('app/content/howto.tabs.tutorials') }}</a></li>
                        </ul>
                        <div class="firststepsbox-1">
                            <h4>{{ __('app/content/howto.first-steps.subtitle-1') }}</h4>
                            <p>{{ __('app/content/howto.first-steps.text-1') }}</p>
                        </div>
                        <div class="firststepsbox-2">
                            <h4>{{ __('app/content/howto.first-steps.subtitle-2') }}</h4>
                            <p>{{ __('app/content/howto.first-steps.text-2') }}</p>
                        </div>
                        <div class="firststepsbox-3">
                            <h4>{{ __('app/content/howto.first-steps.subtitle-3') }}</h4>
                            <p>{{ __('app/content/howto.first-steps.text-3') }}</p>
                            <p>{{ __('app/content/howto.first-steps.text-4') }}</p>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
@endsection
