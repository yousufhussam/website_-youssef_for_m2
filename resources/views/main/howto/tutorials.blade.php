@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>{{ __('app/content/howto.tutorials.title') }}</h2>
                    <div class="firststeps-inner-content">
                        <ul class="tabs-nav tabs2">
                            <li id="tab1"><a href="{{ url('main/howto') }}">{{ __('app/content/howto.tabs.first-steps') }}</a></li>
                            <li id="tab2" class="selected"><a href="{{ url('main/tutorials') }}">{{ __('app/content/howto.tabs.tutorials') }}</a></li>
                        </ul>
                        <div class="tutorialsbox">
                            <p>{{ __('app/content/howto.tutorials.text') }}</p>
                            <a href="{{ url('main/tutorials/createcharacter') }}" rel="#overlay" class="tutorial-btn">{{ __('app/content/howto.tutorials.create-character') }}</a>
                            <a href="{{ url('main/tutorials/introduction') }}" rel="#overlay" class="tutorial-btn">{{ __('app/content/howto.tutorials.introduction') }}</a>
                            <a href="{{ url('main/tutorials/crafting-scrolls') }}" rel="#overlay" class="tutorial-btn">{{ __('app/content/howto.tutorials.crafting-scrolls') }}</a>
                            <a href="{{ url('main/tutorials/crafting-stones') }}" rel="#overlay" class="tutorial-btn">{{ __('app/content/howto.tutorials.crafting-stones') }}</a>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".tutorialsbox a[rel]").overlay({
                target: '#overlay',
                expose: 'black',
                onBeforeLoad: function() {
                    // grab wrapper element inside content
                    var wrap = this.getContent().find(".contentWrap");

                    // load the page specified in the trigger
                    wrap.load(this.getTrigger().attr("href"));
                }
            });
        });
    </script>
@endsection
