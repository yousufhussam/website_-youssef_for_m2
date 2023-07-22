@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>
                    <div class="pass-lost-inner-content">
                        <div class="input-data-box">
                            <h4>Schimbă adresa de email.</h4>
                            <p>Încă nu am primit confirmarea noii adrese de email. Verifică, te rog, noua ta căsuţă poştală electronică.</p>
                        </div>
                        <br class="clearfloat">
                        <a class="btn back-btn" href="{{ url('user/administration') }}">inapoi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
