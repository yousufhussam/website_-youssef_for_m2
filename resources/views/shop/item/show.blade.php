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

    function disableLink(link, id)
    {
        link.style.display = 'none';
        document.getElementById(id).style.display = 'inline';
    }
</script>

<h1 class="mainHeadline">{ data.name|raw }}</h1>

<div class="dynContent detail">
    <div class="box boxLeft visual">
        <img src="{{ asset("assets/shop/img/item/{$item->image}.png") }}" onerror="this.src='{{ asset('assets/shop/img/error.png') }}';" alt="{ data.name }}" />

        @if ($item->old_price)
            <div id="discountPercent"></div>
        @endif
    </div>

    <div class="box desc descOnlyItem">
        <div class="detailBadge">
            <div class="detailBadgeInner"></div>
        </div>
        <h2>{ data.name }}</h2>
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
                        <span id="oldPriceAmount">{{ $item->old_price }}</span>&nbsp;{{ $item->pricing->description() }}
                    </div>
                    Price: <span id="priceAmount">{{$item->price }}</span>&nbsp;{{ $item->pricing->description() }}
                </div>
            @else
                <div class="sprice">
                    Price: <span id="priceAmount">{{ $item->price }}</span>&nbsp;{{ $item->pricing->description() }}
                </div>
            @endif
        </div>

        @if ($item->userCanBuy())
            <a id="buyItemLink" href="{{ route('shop.item.buy', ['id' => $item->id]) }}" title="Buy item" onclick="disableLink(this, 'linkBlank')">Buy item</a>
            <a id="linkBlank" class="blank" style="display:none" href="#">Buy item</a>
        @else
            <a id="buyItemLink" class="blank" href="#" style="cursor: default">Not enough {{ $item->pricing->description() }}</a>
        @endif

        @if ($item->pricing == \App\Models\Enums\ShopItemPricingEnum::CASH)
            <div class="buyInfo">
                You'll recieve <span id="mileageAmount">{{ $item->price }}</span> DM after buying this item!
            </div>
        @endif
    </div>

    <div class="box suggestions">
        <h2>You might be interested in:</h2>
        <ol id="suggestions">
            {% for id, info in suggestions %}
            <li class="thumbnailBgSmall{% if loop.last %} last{% endif %}">
                <a id="suggestion{ id }}" class="suggestion" href="?action=detail&id={ id }}" title="{ info.name }}">
                    <img src="img/item/{ info.image }}.png" width="63" height="63" onerror="this.src='{{ asset('assets/shop/img/error.png') }}';" alt="{ info.name }}"/>
                </a>
            </li>
            {% endfor %}
        </ol>
    </div>
</div>
