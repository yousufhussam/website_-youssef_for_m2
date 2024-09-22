@extends('layouts.teaser-dc')

@section('content')
    <!-- Media - Wallpapers - later e.g. Screenshots etc. -->
    <div id="media">
        <div class="bar">Trailer</div>
        <div class="col4" style="margin-left:45px">
            <a class="youtube" href="https://www.youtube.com/watch?v=WzUOlatuOTs" rel="prettyPhoto">
                <img src="{{ asset("assets/teaser/dc/img/media/trailer-1-thumb.jpg") }}" width="123px" alt="Trailer 1" />
            </a>
        </div>
        <div class="col4">
            <a class="youtube" href="https://www.youtube.com/watch?v=JHHpzTDxeoE" rel="prettyPhoto">
                <img src="{{ asset("assets/teaser/dc/img/media/trailer-2-thumb.jpg") }}" width="123px" alt="Trailer 2" />
            </a>
        </div>
        <div class="col4">&nbsp;</div>
        <div class="col4">&nbsp;</div>

        <div class="clear"></div>

        <div class="bar">Lucrari de arta</div>
        <div class="col4" style="margin-left:45px">
            <a href="{{ asset("assets/teaser/dc/img/media/artwork-1.jpg") }}" rel="prettyPhoto[pp_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/artwork-1-thumb.jpg") }}" width="123px" alt="Lucrari de arta Catacomba Diavolului" />
            </a>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/artwork-2.jpg") }}" rel="prettyPhoto[pp_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/artwork-2-thumb.jpg") }}" width="123px" alt="Lucrari de arta Catacomba Diavolului" />
            </a>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/artwork-3.jpg") }}" rel="prettyPhoto[pp_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/artwork-3-thumb.jpg") }}" width="123px" alt="Lucrari de arta Catacomba Diavolului" />
            </a>
        </div>
        <div class="col4">&nbsp;</div>

        <div class="clear"></div>

        <div class="bar">Wallpaper</div>
        <div class="col4" style="margin-left:45px"><img src="{{ asset("assets/teaser/dc/img/media/wallpaper-1-thumb.jpg") }}" width="123px" alt="Wallpaper Catacomba Diavolului"/></div>
        <div class="col4"><img src="{{ asset("assets/teaser/dc/img/media/wallpaper-2-thumb.jpg") }}" width="123px" alt="Wallpaper Catacomba Diavolului"/></div>
        <div class="col4"><img src="{{ asset("assets/teaser/dc/img/media/wallpaper-3-thumb.jpg") }}" width="123px" alt="Wallpaper Catacomba Diavolului"/></div>
        <div class="col4"><img src="{{ asset("assets/teaser/dc/img/media/wallpaper-4-thumb.jpg") }}" width="123px" alt="Wallpaper Catacomba Diavolului"/></div>

        <div class="clear"></div>

        <div class="col4" style="margin-left:45px">
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-1-1920x1200.jpg") }}" target="_blank">1920 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-1-1920x1080.jpg") }}" target="_blank">1920 x 1080</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-1-1600x1200.jpg") }}" target="_blank">1600 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-1-1280x960.jpg") }}" target="_blank">1280 x 960</a><br/>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-2-1920x1200.jpg") }}" target="_blank">1920 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-2-1920x1080.jpg") }}" target="_blank">1920 x 1080</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-2-1600x1200.jpg") }}" target="_blank">1600 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-2-1280x960.jpg") }}" target="_blank">1280 x 960</a><br/>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-3-1920x1200.jpg") }}" target="_blank">1920 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-3-1920x1080.jpg") }}" target="_blank">1920 x 1080</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-3-1600x1200.jpg") }}" target="_blank">1600 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-3-1280x960.jpg") }}" target="_blank">1280 x 960</a><br/>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-4-1920x1200.jpg") }}" target="_blank">1920 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-4-1920x1080.jpg") }}" target="_blank">1920 x 1080</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-4-1600x1200.jpg") }}" target="_blank">1600 x 1200</a><br/>
            <a href="{{ asset("assets/teaser/dc/img/media/wallpaper-4-1280x960.jpg") }}" target="_blank">1280 x 960</a><br/>
        </div>

        <div class="clear"></div>

        <div class="bar">Screenshot-uri</div>
        <div class="col4" style="margin-left:45px">
            <a href="{{ asset("assets/teaser/dc/img/media/screenshot-1.jpg") }}" rel="prettyPhoto[scr_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/screenshot-1-thumb.png") }}" width="123px" alt="Screenshot Catacomba Diavolului Metin2"/>
            </a>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/screenshot-2.jpg") }}" rel="prettyPhoto[scr_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/screenshot-2-thumb.png") }}" width="123px" alt="Screenshot Catacomba Diavolului Metin2"/>
            </a>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/screenshot-3.jpg") }}" rel="prettyPhoto[scr_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/screenshot-3-thumb.png") }}" width="123px" alt="Screenshot Catacomba Diavolului Metin2"/>
            </a>
        </div>
        <div class="col4">&nbsp;</div>

        <div class="clear"></div>

        <div class="col4" style="margin-left:45px">
            <a href="{{ asset("assets/teaser/dc/img/media/screenshot-4.jpg") }}" rel="prettyPhoto[scr_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/screenshot-4-thumb.jpg") }}" width="123px" alt="Screenshot Catacomba Diavolului Metin2"/>
            </a>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/screenshot-5.jpg") }}" rel="prettyPhoto[scr_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/screenshot-5-thumb.jpg") }}" width="123px" alt="Screenshot Catacomba Diavolului Metin2"/>
            </a>
        </div>
        <div class="col4">
            <a href="{{ asset("assets/teaser/dc/img/media/screenshot-6.jpg") }}" rel="prettyPhoto[scr_gal]">
                <img src="{{ asset("assets/teaser/dc/img/media/screenshot-6-thumb.jpg") }}" width="123px" alt="Screenshot Catacomba Diavolului Metin2"/>
            </a>
        </div>
        <div class="col4">&nbsp;</div>

        <div class="clear"></div>
    </div>
@endsection
