@extends('layouts.app')

@section('content')
    <!-- center column -->

    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Your Account</h2>
                    <div class="register-inner-content">
                        <div class="input-data-box">
                            <div class="box-img"></div>

                            <h4>Change Password</h4>
                            <p>Change your password here.</p>
                            <div class="pass-lost-box-small" style="margin-top: 0;">
                                <form action="{{ url('user/passwordchangerequest') }}" method="POST" name="registerForm">
                                    <div class="pass-lost-box-inner-content">
                                        <label>Old Password</label>
                                        <div class="input-data-input">
                                            <input type="password" name="old-password" maxlength="16" value="" />
                                        </div>
                                        <label>New Password</label>
                                        <div class="input-data-input">
                                            <input type="password" name="new-password" maxlength="16" value="" />
                                        </div>
                                        <input class="button btn-login btn-center-input" type="submit" onclick="document.forms['registerForm'].submit();return false;" value="Send"/>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <br class="clearfloat">
                        <a class="btn back-btn" href="{{ url('user/administration') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
