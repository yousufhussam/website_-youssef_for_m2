@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Tutoriale</h2>
                    <div class="firststeps-inner-content">
                        <ul class="tabs-nav tabs2">
                            <li id="tab1"><a href="{{ url('main/howto') }}">Primii paşi</a></li>
                            <li id="tab2" class="selected"><a href="{{ url('main/tutorials') }}">Tutoriale</a></li>
                        </ul>
                        <div class="tutorialsbox">
                            <p>Bun venit la MMORPG Metin2 online! Dupa inregistrare vei afla mai multe despre multitudinea optiunilor acestui joc online si Imperiile sale. Tutorialul iti va explica cum sa intri in lumea MMORPG si te va ajuta sa ai un joc captivant si interesant.</p>
                            <a href="{{ url('main/tutorials/createcharacter') }}" rel="#overlay" class="tutorial-btn">Creeaza caracterul</a>
                            <a href="{{ url('main/tutorials/introduction') }}" rel="#overlay" class="tutorial-btn">Introducere</a>

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
