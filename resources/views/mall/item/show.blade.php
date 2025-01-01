<script type="text/javascript">
    function changePrice(details) {
        var detailValues = details.split(':');
        price = detailValues[0];
        oldPrice = detailValues[1];
        amount = detailValues[2];
        document.getElementById('priceAmount').innerHTML = price;
        document.getElementById('mileageAmount').innerHTML = amount * 99;
        document.getElementById('buyItemLink').href = document.getElementById('buyItemLink').href.replace(/\/\d+?\?/, '/' + amount + '?');
    }

    function disableLink(link, id) {
        link.style.display = 'none';
        document.getElementById(id).style.display = 'inline';
    }
</script>

<h1 class="mainHeadline">{{ $item->proto->locale_name }}</h1>

<div class="dynContent detail">
    <div class="box boxLeft visual">
        <img src="{{ route('mall.item.image-large', ['id' => $item->id]) }}" alt="{{ $item->proto->locale_name }}"/>

        @if ($item->old_price)
            <div id="discountPercent"></div>
        @endif
    </div>

    <div class="box desc descOnlyItem">
        <div class="detailBadge">
            <div class="detailBadgeInner"></div>
        </div>
        <h2>{{ $item->proto->locale_name }}</h2>
        <div class="scrollpane scrollpaneOnlyItem">
            <p>{{ $item->description ?? "No description is currently available for this item." }}</p>
        </div>
    </div>

    <div @class(["box", "boxRight", "buy", "discount" => $item->old_price, "onlyItem"])>
        <div class="priceSelect">
            @if ($item->old_price)
                <div class="discountPercentCircle">
                    <div id="discountPercentCircle"></div>
                </div>
                <div class="sprice-discount">
                    <div id="oldPriceAmountDiv">
                        <span id="oldPriceAmount">{{ $item->old_price }}</span>&nbsp;{{ $item->pricing->name() }}
                    </div>
                    Price: <span id="priceAmount">{{$item->price }}</span>&nbsp;{{ $item->pricing->name() }}
                </div>
            @else
                <div class="sprice">
                    Price: <span id="priceAmount">{{ $item->price }}</span>&nbsp;{{ $item->pricing->name() }}
                </div>
            @endif
        </div>

        @if ($item->userCanBuy())
            <a id="buyItemLink" href="{{ route('mall.item.buy', ['id' => $item->id]) }}" title="Buy item"
               onclick="disableLink(this, 'linkBlank')">Buy item</a>
            <a id="linkBlank" class="blank" style="display:none" href="#">Buy item</a>
        @else
            <a id="buyItemLink" class="blank" href="#" style="cursor: default">Not
                enough {{ $item->pricing->name() }}</a>
        @endif

        @if ($item->pricing == \App\Models\Enums\MallItemPricingEnum::CASH)
            <div class="buyInfo">
                You'll recieve <span id="mileageAmount">{{ $item->price }}</span> DM after buying this item!
            </div>
        @endif
    </div>

    <div class="box suggestions">
        <h2>You might be interested in:</h2>
        <ol id="suggestions">
            @foreach($suggestions as $suggestion)
                <li @class(['thumbnailBgSmall', 'last' => $loop->last])>
                    <a id="suggestion-{{ $suggestion->id }}" class="suggestion" href="{{ route('mall.item', ['id' => $suggestion->id]) }}" title="{{ $suggestion->proto->locale_name }}">
                        <img src="{{ route('mall.item.image', ['id' => $suggestion->id]) }}" width="63" height="63" alt="{{ $suggestion->proto->locale_name }}"/>
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
</div>
