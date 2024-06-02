<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ __('mall/main.title') }}</title>
    <link href="{{ asset('assets/mall/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/start.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/options.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/discount.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/tiptip.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/fancybox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/jScrollPane.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/promoted.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/pending.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/usermenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/purchase.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mall/css/wheel.css') }}" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <style type="text/css">@import url(https://gf1.geo.gfsrv.net/cdn9a/6ea1bf4927ebc189a9ad0a0e2d7140.css);</style>
    <style type="text/css">@import url(https://gf1.geo.gfsrv.net/cdn3e/8a0cdb2c5a2e9c5af58e1dcdee50e7.css);</style>
    <![endif]-->

    <!--[if lte IE 6]>
    <style type="text/css">@import url(https://gf1.geo.gfsrv.net/cdn9b/5338b6f852df99e7b508f046cc25ad.css);</style>
    <style type="text/css">@import url(https://gf3.geo.gfsrv.net/cdnb6/f0c4e2637ede70860c1a273ed38241.css);</style>
    <style type="text/css">@import url(https://gf3.geo.gfsrv.net/cdn58/97c61e083f066422a1ccf00b7e6a02.css);</style>
    <![endif]-->

    <script type="text/javascript" src="https://gf2.geo.gfsrv.net/cdnda/0517dbc738ea24aa73b64a25b30f8d.js"></script>
    <script type="text/javascript" src="https://gf2.geo.gfsrv.net/cdndc/521e7b8821399457f8d2c96bd4d764.js"></script>
    <script type="text/javascript" src="https://gf3.geo.gfsrv.net/cdnbf/7ef645db9fe9c2161d57e2a9684f8c.js"></script>
    <script type="text/javascript" src="https://gf3.geo.gfsrv.net/cdne1/74a2472b07741e6900b40d529efc36.js"></script>
    <script type="text/javascript" src="https://gf1.geo.gfsrv.net/cdn06/c121d2d644f8b6d54b747e69dc319c.js"></script>
    <script type="text/javascript" src="https://gf2.geo.gfsrv.net/cdn43/b1ad0ec9073e2ae4eefbd6ad628e13.js"></script>
    <script type="text/javascript" src="https://gf2.geo.gfsrv.net/cdn7e/497adc02ec310555ca02b97c5e5b8a.js"></script>
    <script type="text/javascript" src="https://gf3.geo.gfsrv.net/cdn26/44fc21806fac16fd1145ef90d1994a.js"></script>
    <script type="text/javascript" src="https://gf3.geo.gfsrv.net/cdnb0/c7786e501306d6ec52c7a2487bc9c3.js"></script>
    <script type="text/javascript" src="https://gf2.geo.gfsrv.net/cdnd2/87fc5271982cfc5ae878af40ce5f22.js"></script>
    <script type="text/javascript" src="https://gf2.geo.gfsrv.net/cdnae/daea90828cdbc4b0974c1328fee2d4.js"></script>
    <script type="text/javascript" src="https://gf1.geo.gfsrv.net/cdn99/ae1c0d191bffe28d878d7ec7062da2.js"></script>

    <script type="text/javascript">
        /* <![CDATA[ */
        function searchFocusGained()
        {
            if (trim(document.searchForm.searchString.value) === '{{ __('mall/main.nav.search_placeholder') }}')
            {
                document.searchForm.searchString.value = '';
            }
        }

        function searchFocusLost()
        {
            if (trim(document.searchForm.searchString.value) === '')
            {
                document.searchForm.searchString.value = '{{ __('mall/main.nav.search_placeholder') }}';
            }
        }

        function trySubmit()
        {
            searchString = trim(document.searchForm.searchString.value);

            return searchString !== '' && searchString !== '{{ __('mall/main.nav.search_placeholder') }}';
        }

        $(document).ready(function() {
            $('#breadcrumbInfoText').fadeIn(1000);

            $('.groupItem').find('h2').click(function() {
                $(this).closest('.groupItem').toggleClass('opened closed');
            });
            {{--
                $('#serverlist').change(function() {
                    $.ajax({
                        'url': 'http://ro.shop.metin2.de/ajax/callback/characters/?__token=e8e9d2bd2e3e80ecf201e882766b8405&caid=3171938' + '&csid=' + $('#serverlist').val(),
                        'success': function(data, request, status) { $('#characterlist').html(data); }
                    });
                });
            --}}
            $('#characterpick').show();

            $('#optionsBar').mouseenter(function() {
                $(this).addClass('optionsBarOv').removeClass('optionsBarNorm');
            }).mouseleave(function(){
                $(this).addClass('optionsBarNorm').removeClass('optionsBarOv');
            }).click(function(){
                $('#optionsSlider').fadeToggle('slow');
            });

            $('#optionsSlider').mouseleave(function() {
                $(this).fadeOut('slow');
            });
        });
        /* ]]> */
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="twoColFixLtHdr" scroll="no" ondblclick="return false;">
    <div id="container">
        <div id="header">
            <div class="boxSigns">
                <span class="heading">{{ __('mall/main.currency.mileage_long') }} ({{ __('mall/main.currency.mileage') }}):</span>
                <span class="marksValue">{{ Auth::user()->mileage }}</span>
                <a href="{{ url('mall/faq', ['section' => 'mileage']) }}" class="tip helpSmallIcon" title="{{ __('mall/main.nav.help_tooltip') }}" style="right: 23px;">
                    <img src="{{ asset('assets/mall/img/helpSmallIcon.png') }}" />
                </a>
            </div>

            <div class="boxCoins">
                <span class="heading">{{ __('mall/main.currency.cash_long') }} ({{ __('mall/main.currency.cash') }}):</span>
                <span class="coinsValue">{{ Auth::user()->cash  }}</span>
                <a href="{{ url('mall/faq', ['section' => 'cash']) }}" class="tip helpSmallIcon" title="{{ __('mall/main.nav.help_tooltip') }}" style="right: 7px;">
                    <img src="{{ asset('assets/mall/img/helpSmallIcon.png') }}" />
                </a>
                <a href="{{ url('mall/faq', ['section' => 'donate']) }}" class="purchaseButton" title="{{ __('mall/main.nav.buy_coins_tooltip') }}">
                    {!! nl2br(__('mall/main.nav.buy_coins_btn')) !!}
                </a>
            </div>
        </div>

        @if ($discountDesc)
            <span id="discountLong">{{ $discountDesc }}</span>
        @endif

        <div class="userdataDiv">
            @if ($storageCount > 0)
                <a title="{{ __('mall/main.nav.user_data_tooltip') }}" href="{{ url('mall/userdata') }}" class="tip userdataInfoIcon"></a>
            @else
                <a title="{{ __('mall/main.nav.user_data_tooltip') }}" href="{{ url('mall/userdata') }}" class="tip userdataIcon"></a>
            @endif
        </div>

        @if ($storageCount > 0)
            <div id="breadcrumbInfoText">
                <div id="arrowDiv">
                    <div id="arrowRight"></div>
                    <div id="arrowBorderRight"></div>
                </div>

                <span id="discountLong">{{ __('mall/main.nav.stored_items', ['storageCount' => $storageCount]) }}</span>
            </div>
        @endif

        <ul id="breadcrumb">
            <li><a href="{{ route('mall') }}">{{ __('mall/main.nav.home') }}</a></li>
        </ul>

        <div id="sidebar1">
            <div id="search">
                <form action="{{ url('mall/search') }}" method="post" name="searchForm" onsubmit="return trySubmit()">
                    @csrf

                    <input type="text" value="{{ __('mall/main.nav.search_placeholder') }}" class="type" name="searchString" onfocus="searchFocusGained()" onblur="searchFocusLost()" maxlength="42" />
                    <input type="submit" value="" class="send" />
                </form>
            </div>
            <ul id="mainMenu">
                @foreach ($categories as $category)
                    <li><a href="{{ url('mall/category', ['id' => $category->id]) }}" title="{{ $category->name }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>

        @yield('content')
    </div>
</body>
</html>
