@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/content/community.title') }}</h2>
                    <div class="firststeps-inner-content">
                        <div class="community">
                            <p>{{ __('app/content/community.text') }}</p>
                            <a href="{{ url('main/code-of-conduct') }}" class="tutorial-btn">{{ __('app/content/community.links.guide') }}</a>
                            <a href="{{ url('main/board') }}" class="tutorial-btn" target="_blank">{{ __('app/content/community.links.forum') }}</a>
                            <a href="{{ url('main/support') }}" class="tutorial-btn" target="_blank">{{ __('app/content/community.links.support') }}</a>
                            <a href="{{ url('main/wiki') }}" class="tutorial-btn" target="_blank">{{ __('app/content/community.links.wiki') }}</a>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
@endsection
