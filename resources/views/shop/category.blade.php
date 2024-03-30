@extends('layouts.shop')

@section('content')
    <div id="mainContent">
        <h1>{{ $category->name }}</h1>
        <div class="dynContent" style="position:relative">
            @foreach ($category->items as $item)
                <div class="item">
                    <div class="itemDesc">
                        <div @class(["thumbnailBgSmall", "discount thumbnailBgSmall-discount-ie6" => $item->old_price > 0])>
                            <a href="{{ route('shop.item', ['id' => $item->id]) }}" title="More information" class="openinformation">
                                <img src="{{ asset("assets/shop/img/item/{$item->image}.png") }}" onerror="this.src='{{ asset('assets/shop/img/error.png') }}';" width="63px" height="63px" alt="More information"/>
                            </a>

                            @if ($item->old_price)
                                <div class="discountPercentCategory">
                                    <a href="{{ route('shop.item', ['id' => $item->id]) }}" title="More information" class="openinformation"></a>
                                </div>
                            @endif
                        </div>

                        <p>
                            <a href="{{ route('shop.item', ['id' => $item->id]) }}" title="More information" class="openinformation">
                                <span class="itemTitle">{ data.name|raw }</span>
                            </a>
                            <span class="line"></span>

                            {{ $item->description ?? "No description is currently available for this item." }}

                            <br class="clearfloat" />
                        </p>
                    </div>
                    <div class="purchaseOptionsWrapper">
                        <div @class(["itemPrice", "discount itemPrice-discount-ie6" => $item->old_price])>
                            <div @class(["priceValue", "discount discount priceValue-discount-ie6" => $item->old_price])>
                                {{ $item->quantity }} pcs. for:

                                @if (!$item->old_price)
                                    <span class="price">{{ $item->price }} {{ $item->pricing->description() }}</span>
                                @endif
                            </div>

                            @if ($item->old_price)
                                <div class="price discount price-discount-ie6">{{ $item->price }} {{ $item->pricing->description() }}</div>
                                <div class="discountOldPriceCategory">{{ $item->old_price }} {{ $item->pricing ->description() }}</div>
                                <div class="discountPercentCircleCategory"></div>
                            @endif
                        </div>

                        <a href="{{ route('shop.item', ['id' => $item->id]) }}"
                            title="More information"
                            @class(["purchaseInfo", "openinformation", "discount purchaseInfo-discount-ie6" => $item->old_price])
                        >
                            Details
                        </a>
                        <br class="clearfloat" />
                    </div>
                </div>
            @endforeach
        </div>
        <div class="endContent"></div>
    </div>
@endsection
