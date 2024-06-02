@extends('layouts.mall')

@section('content')
    <div id="mainContent">
        <h1>Error 404</h1>
        <div class="dynContent">
            <div class="item" id="confirmBox">
                <div class="itemDesc confirmDesc">
                    <div class="thumbnailBgSmall">
                        <img src="{{ asset('assets/mall/img/error.png') }}" width="63px" height="63px" alt="Error" />
                    </div>

                    <p>
                        <span class="confirmTitle">Website error!</span><br />
                    </p>

                    <p>The page you requested could not be found.</p>

                    <br class="clearfloat" />
                </div>
            </div>
        </div>
        <div class="endContent"></div>
    </div>
@endsection
