@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Metin2 - Comunitate</h2>
                    <div class="firststeps-inner-content">
                        <div class="community">
                            <p>Fiind un joc multiplayer, Metin2 nu te va lasa singur pe campul de lupta. Pe Forum poti intalni numerosi jucatori ce iti pot raspunde la toate intrebarile sau cand ai o problema. De asemenea, cu care poti face schimb de idei. Poti obtine mai multe informatii despre jocul Metin2 pe Wiki.
                                Alatura-te comunitatii Metin2!</p>
                            <a href="{{ url('main/code-of-conduct') }}" class="tutorial-btn">Ghid Comunitate</a>
                            <a href="{{ url('main/board') }}" class="tutorial-btn" target="_blank">Forum</a>
                            <a href="{{ url('main/support') }}" class="tutorial-btn" target="_blank">Ticketservice</a>
                            <a href="{{ url('main/wiki') }}" class="tutorial-btn" target="_blank">Wiki</a>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
