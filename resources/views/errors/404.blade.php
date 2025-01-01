@extends('layouts.app')

@section('content')
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/404.title') }}</h2>
                    <div class="pass-lost-inner-content">
                        <div class="input-data-box">
                            <h4>{{ __('app/404.header') }}</h4>
                            <p>{{ __('app/404.message') }}</p>
                        </div>
                        <br class="clearfloat"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
@endsection
