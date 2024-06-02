@extends('layouts.mall')

@section('content')
    <div id="mainContent">
        <div class="userdataHeadline">
            <h1>User information</h1>
        </div>
        <div class="dynContent">
            <div class="userdataContainer">
                <div class="userdataLine">
                    <div class="titleIcon">
                        <img alt="Informatii" src="{{ asset('assets/mall/img/storage.png') }}"/>
                    </div>
                    <div class="userdataText">
                        <div class="title">
                            Obiecte depozitate ({{ $storageCount }})
                            <a class="helpSmallTopic tip" href="?p=faq" title="Mergi la pagina de ajutor aici."></a>
                        </div>
                        <div class="lineBottom">
                            <a @class(["userdataButton" => $storageCount == 0, "userdataButtonGreen" => $storageCount > 0]) href="?p=distribution">Distribuie</a>
                            <div class="description">Deschide depozitul contului tau pentru a transfera obiectele pe serverul si caracterul ales.</div>
                        </div>
                        <br class="clearfloat"/>
                    </div>
                </div>
                <div class="userdataLine">
                    <div class="titleIcon">
                        <img alt="Information" src="{{ asset('assets/mall/img/purchases.png') }}"/>
                    </div>
                    <div class="userdataText">
                        <div class="title">My purchases ({{ $boughtCount }})</div>
                        <div class="lineBottom">
                            <a @class(["userdataButton" => $boughtCount == 0, "userdataButtonGreen" => $boughtCount > 0]) href="?p=purchases">Go</a>
                            <div class="description">View your purchase history in the last month.</div>
                        </div>
                        <br class="clearfloat"/>
                    </div>
                </div>
                <div class="userdataLine">
                    <div class="titleIcon">
                        <img alt="Informatii" src="{{ asset('assets/mall/img/faq.png') }}"/>
                    </div>
                    <div class="userdataText">
                        <div class="title">FAQ - Frequently Asked Questions</div>
                        <div class="lineBottom">
                            <a class="userdataButton" href="?p=faq">Go</a>
                            <div class="description">Here you can find answers to the most frequently asked questions.</div>
                        </div>
                        <br class="clearfloat"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="endContent"></div>
    </div>
@endsection
