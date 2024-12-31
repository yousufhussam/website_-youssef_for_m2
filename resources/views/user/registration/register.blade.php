@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div id="register" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/register.title') }}</h2>

                    <x-registration.progress :step="1" />

                    <div class="inner-form-border">
                        <div class="inner-form-box">
                            <h3>
                                <a id="toLogin" href="{{ url('user/login') }}" title="{{ __('app/register.to-login') }}">{{ __('app/register.to-login') }}</a>
                                {{ __('app/register.title') }}
                            </h3>
                            <div class="trenner"></div>
                            <form name="registerForm" id="registerForm" method="post" action="{{ url('user/register') }}">
                                @csrf

                                <div>
                                    <label for="username">{{ __('app/register.form.username') }}: *</label>
                                    <input type="text" class="validate[required,custom[noSpecialCharacters],length[5,16]]" id="username" name="login" title="" value="{{ old('login') }}" maxlength="16" />
                                </div>
                                <div>
                                    <label for="email">{{ __('app/register.form.email') }}: *</label>
                                    <input type="text" class="validate[required,custom[email]]" id="email" name="email" maxlength="64" title="" value="{{ old('email') }}" />
                                </div>
                                <div id="pwField">
                                    <div id="pwInfo">
                                        <h3>
                                            <img src="{{ asset('assets/main/img/help.gif') }}" alt="{{ __('app/register.form.password-requirements') }}" title="{{ __('app/register.form.password-requirements') }}"/>
                                            {{ __('app/register.form.password-info.header') }}:
                                        </h3>
                                        <ul>
                                            <li>{{ __('app/register.form.password-info.rule-1') }}</li>
                                            <li>{{ __('app/register.form.password-info.rule-2') }}</li>
                                            <li>{{ __('app/register.form.password-info.rule-3') }}</li>
                                            <li>{{ __('app/register.form.password-info.rule-4') }}</li>
                                            <li>{{ __('app/register.form.password-info.rule-5') }}</li>
                                        </ul>
                                        <p><strong>{{ __('app/register.form.password-info.special-chars') }}</strong>:<br/>
                                            @ ! # $ % &amp; ( ) { } * + ,<br/>
                                            - . / : ; &lt; &gt; = ? [ ] ^ _ | ~
                                        </p>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $('#password').focusin(function() {
                                                    $('#pwInfo').fadeIn();
                                                });
                                                $('#password').focusout(function() {
                                                    $('#pwInfo').fadeOut();
                                                });
                                                if ($('#password').val() != '') {
                                                    $('#password').keyup();
                                                }
                                            });
                                        </script>
                                    </div>
                                    <label for="password">{{ __('app/register.form.password') }}: *
                                        <span id="toPwInfo" title="{{ __('app/register.form.password-requirements') }}">
                                            {{ __('app/register.form.password-requirements') }}
                                            <img src="{{ asset('assets/main/img/help.gif') }}" alt="{{ __('app/register.form.password-requirements') }}" title="{{ __('app/register.form.password-requirements') }}" />
                                        </span>
                                    </label>
                                    <input type="password" class="validate[required,custom[onlyValidPasswordCharacters],length[5,16]]" id="password" name="password" maxlength="16" value="" />
                                    <div id="securePwd">
                                        <p>{{ __('app/register.form.password-security') }}:</p>
                                        <div class="valid-icon invalid"></div>
                                        <div class="securePwdBarBox">
                                            <div id="securePwdBar"></div>
                                        </div>
                                        <br class="clearfloat"/>
                                    </div>
                                </div>
                                <div id="checkerror">
                                    <input type="checkbox" class="validate[required]" id="tac" name="tac" value="tac"/>
                                    <span>
                                        {!! Str::inlineMarkdown(__('app/register.form.terms-and-conditions', ['termsUrl' => url('legal/terms'), 'privacyUrl' => url('legal/privacy')])) !!} *
                                    </span>
                                </div>
                                <input id="submitBtn" type="submit" value="{{ __('app/register.form.register-btn') }}" class="btn-big"/>

                                <script type="text/javascript">
                                    @error('login')
                                        $.validationEngine.buildPrompt("#username", "{{ $message }}", "error");
                                    @enderror
                                    @error('email')
                                        $.validationEngine.buildPrompt("#email", "{{ $message }}", "error");
                                    @enderror
                                    @error('password')
                                        $.validationEngine.buildPrompt("#password", "{{ $message }}", "error");
                                    @enderror
                                    @error('tac')
                                        $.validationEngine.buildPrompt("#tac", "{{ $message }}", "error");
                                    @enderror
                                </script>
                            </form>
                            <p id="regLegend">{{ __('app/register.form.required') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
