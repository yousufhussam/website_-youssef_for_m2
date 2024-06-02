@extends('layouts.mall')

@section('content')
    <div id="mainContent">
        <h1>{{ $category->name }}</h1>
        <div class="dynContent" style="position:relative">
            @forelse ($category->items->sortBy('id') as $item)
                <div class="item">
                    <div class="itemDesc">
                        <div @class(["thumbnailBgSmall", "discount thumbnailBgSmall-discount-ie6" => $item->old_price > 0])>
                            <a href="{{ route('mall.item', ['id' => $item->id]) }}" title="More information" class="openinformation">
                                <img src="{{ route('mall.item.image', ['id' => $item->id]) }}" width="63px" height="63px" alt="More information"/>
                            </a>

                            @if ($item->old_price)
                                <div class="discountPercentCategory">
                                    <a href="{{ route('mall.item', ['id' => $item->id]) }}"
                                       title="More information" class="openinformation"></a>
                                </div>
                            @endif
                        </div>

                        <p>
                            <a href="{{ route('mall.item', ['id' => $item->id]) }}" title="More information" class="openinformation">
                                <span class="itemTitle">{{ $item->proto->locale_name }}</span>
                            </a>
                            <span class="line"></span>

                            {{ $item->description ?? "No description is currently available for this item." }}

                            <br class="clearfloat"/>
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

                        <a href="{{ route('mall.item', ['id' => $item->id]) }}" title="More information" @class(["purchaseInfo", "openinformation", "discount purchaseInfo-discount-ie6" => $item->old_price])>
                            Details
                        </a>
                        <br class="clearfloat"/>
                    </div>
                </div>
            @empty
                <div class="item" id="confirmBox">
                    <div class="itemDesc confirmDesc">
                        <div class="thumbnailBgSmall">
                            <img src="{{ asset('assets/mall/img/warning.png') }}" width="63px" height="63px"
                                 alt="Error"/>
                        </div>

                        <p>
                            <span class="confirmTitle">Empty category</span>
                        </p>

                        <p>This category does not contain any items.</p>

                        <br class="clearfloat"/>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="endContent"></div>
    </div>
@endsection
