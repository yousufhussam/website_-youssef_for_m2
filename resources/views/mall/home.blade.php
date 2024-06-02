@extends('layouts.mall')

@section('content')
    <div id="wideMainContent">
        <div class="landing wheelLanding">
            <h1>Item suggestions:</h1>

            @foreach ($suggestions as $item)
                <div @class(['promotedItem', 'withDescription' => $item->other == 'recommend_desc'])>
                    <h4>{{ $item->proto->locale_name }}</h4>
                    <div class="promotedItemImg">
                        <a href="{{ route('mall.item', ['id' => $item->id]) }}" class="openinformation" title="More information">
                            <img src="{{ route('mall.item.image', ['id' => $item->id]) }}" alt="{{ $item->proto->locale_name }}" />
                        </a>
                    </div>

                    @if ($item->old_price)
                        <div class="discountPercentPromoted">
                            <a href="{{ route('mall.item', ['id' => $item->id]) }}" class="openinformation" title="More information"></a>
                        </div>
                        <div class="discountPercentCirclePromoted"></div>
                        <p class="discountOldPricePromoted">{{ $item->old_price }}&nbsp;{{ $item->pricing->description() }}</p>
                    @endif

                    <div @class(['promotedItemBtns', 'promotedItemBtns-discount' => $item->old_price])>
                        @if ($item->old_price)
                            <p class="pdiscount">
                                {{ $item->quantity }} pcs: <span class="price discount price-discount-ie6">{{ $item->price }} {{ $item->pricing->description() }}</span>
                            </p>
                            <div class="divdiscount">
                                <a href="{{ route('mall.item', ['id' => $item->id]) }}" title="More information" class="detail-discount openinformation">Details</a>
                            </div>
                        @else
                            <p>{{ $item->quantity }} pcs. only: <span class="price">{{ $item->price }} {{ $item->pricing->description() }}</span></p>
                            <a href="{{ route('mall.item', ['id' => $item->id]) }}" title="More information" class="detail openinformation">Details</a>
                        @endif
                    </div>

                    @if ($item->description && $item->other == 'recommend_desc')
                        <p class="promotedItemDescr">{{ $item->description }}</p>
                    @endif
                </div>
            @endforeach

            <div id="wheelLandingButton" class="ad">
                <h2 style="margin-top: 100px">The Wheel of Fortune</h2>
                <p>
                    Try your luck and turn the Wheel of Fortune.
                    Get your hand on some of the best items for your character!
                </p>
                <a href="{{ url('mall/wheel') }}" class="goToWheel">To the Wheel</a>
            </div>

            <a class="buyDR" href="{{ url('mall/faq', ['section' => 'donate']) }}">You don't have Dragon Coins?</a>
        </div>
        <div class="endContent"></div>
    </div>
@endsection
