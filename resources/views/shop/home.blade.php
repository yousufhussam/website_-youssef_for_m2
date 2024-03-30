@extends('layouts.shop')

@section('content')
    <div id="wideMainContent">
        <div class="landing wheelLanding">
            <h1>Item suggestions:</h1>

            {% for id, data in items %}
            <div @class([
                'promotedItem',
                'withDescription' => isset($item->description),
            ])>
                <h4>{ data.name|raw }</h4>
                <div class="promotedItemImg">
                    <a href="?action=detail&id={ id }" class="openinformation" title="More information">
                        <img src="img/item/{ data.image }.png" onerror="this.src='{{ asset('assets/shop/img/error.png') }}';" alt="" />
                    </a>
                </div>
                {% if data.oldPrice != 0 %}
                <div class="discountPercentPromoted">
                    <a href="?action=detail&id={ id }" class="openinformation" title="More information"></a>
                </div>
                <div class="discountPercentCirclePromoted"></div>
                <p class="discountOldPricePromoted">{ data.oldPrice }&nbsp;{ data.pricing }</p>
                {% endif %}
                <div class="promotedItemBtns{% if data.oldPrice != 0 %} promotedItemBtns-discount{% endif %}">
                    {% if data.oldPrice != 0 %}
                    <p class="pdiscount">
                        { data.count } pcs: <span class="price discount price-discount-ie6">{ data.price }&nbsp;{ data.pricing }</span>
                    </p>
                    <div class="divdiscount">
                        <a href="?action=detail&id={ id }" title="More information" class="detail-discount openinformation">Details</a>
                    </div>
                    {% else %}
                    <p>{ data.count } pcs. only: <span class="price">{ data.price }&nbsp;{ data.pricing }</span></p>
                    <a href="?action=detail&id={ id }" title="More information" class="detail openinformation">Details</a>
                    {% endif %}
                </div>
                {% if data.description is defined %}<p class="promotedItemDescr">{ data.description }</p>{% endif %}
            </div>
            {% endfor %}

            <div id="wheelLandingButton" class="ad">
                <h2 style="margin-top: 100px">The Wheel of Fortune</h2>
                <p>
                    Try your luck and turn the Wheel of Fortune.
                    Get your hand on some of the best items for your character!
                </p>
                <a href="{{ url('shop/wheel') }}" class="goToWheel">To the Wheel</a>
            </div>

            <a class="buyDR" href="{{ url('shop/faq', ['section' => 'donate']) }}">You don't have Dragon Coins?</a>
        </div>
        <div class="endContent"></div>
    </div>
@endsection
