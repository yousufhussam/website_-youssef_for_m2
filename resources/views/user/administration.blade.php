@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/user/administration.title') }}</h2>
                    <div class="administration-inner-content">
                        <div class="input-data-box">
                            <h4>{{ __('app/user/administration.subtitle') }}</h4>

                            <ul>
                                <li>{{ __('app/user/administration.username') }}: {{ Auth::user()->login }}</li>
                                <li>
                                    {{ __('app/user/administration.email') }}:
                                    <span id="yourEmail">{{ Auth::user()->email }}</span>
                                </li>
                                <li>
                                    {{ \App\Models\Enums\MallItemPricingEnum::CASH->longName() }}:
                                    {{ Auth::user()->cash }} {{ \App\Models\Enums\MallItemPricingEnum::CASH->name() }}
                                    <a href="#" class="load-link">{{ __('app/user/administration.cash-topup') }}</a>
                                </li>
                                <li>
                                    {{ \App\Models\Enums\MallItemPricingEnum::MILEAGE->longName() }}:
                                    {{ Auth::user()->mileage }} {{ \App\Models\Enums\MallItemPricingEnum::MILEAGE->name() }}
                                </li>

                                @if (Auth::user()->social_id)
                                    <li class="long-li-code">
                                        {{ __('app/user/administration.delete-code') }}:
                                        <span class="delete-code">{{ Auth::user()->social_id }}</span>
                                    </li>
                                @else
                                    <li class="long-li-code">
                                        {{ __('app/user/administration.delete-code') }}:
                                        <span class="delete-code">{{ __('app/user/administration.delete-code-not-available') }}</span>
                                    </li>
                                @endif
                            </ul>

                            <div class="administration-box">
                                <a href="#" class="btn">{{ __('app/user/administration.btn-topup') }}</a>
                                <p>{{ __('app/user/administration.btn-topup-desc') }}</p>
                            </div>
                            <div class="administration-box">
                                <a href="{{ url('user/characters') }}" class="btn">{{ __('app/user/administration.btn-characters') }}</a>
                                <p>{{ __('app/user/administration.btn-characters-desc') }}</p>
                            </div>
                            {{--
                                <div class="administration-box">
                                    <a href="#" class="btn">{{ __('app/user/administration.btn-recruit') }}</a>
                                    <p>{{ __('app/user/administration.btn-desc') }}</p>
                                </div>
                            --}}
                            <div class="administration-box">
                                <a href="{{ url('user/emailchange') }}" class="btn">{{ __('app/user/administration.btn-email-change') }}</a>
                                <p>{{ __('app/user/administration.btn-email-change-desc') }}</p>
                            </div>
                            <div class="administration-box">
                                <a href="{{ url('user/passwordchangerequest') }}" class="btn">{{ __('app/user/administration.btn-password-change') }}</a>
                                <p>{{ __('app/user/administration.btn-password-change-desc') }}</p>
                            </div>
                            <div class="administration-box">
                                <a href="{{ url('user/storagepasswordlost') }}" class="btn">{{ __('app/user/administration.btn-storage-password') }}</a>
                                <p>{{ __('app/user/administration.btn-storage-password-desc') }}</p>
                            </div>
                            <div class="administration-box">
                                <a href="{{ url('user/displaycode') }}" class="btn">{{ __('app/user/administration.btn-display-code') }}</a>
                                <p>{{ __('app/user/administration.btn-display-code-desc') }}</p>
                            </div>
                            <div class="administration-box">
                                <a href="#" class="btn">{{ __('app/user/administration.btn-delete-account') }}</a>
                                <p>{{ __('app/user/administration.btn-delete-account-desc') }}</p>
                            </div>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
@endsection
