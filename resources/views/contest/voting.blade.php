@extends('layouts.app')

@section('content')
    <div id="download" class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Competitia Cosplay - Toate intrarile</h2>
                    <div class="download-inner-content">
                        <p id="downloadText">
                            Toate intrarile in concurs de pana acum pot fi vazute aici. Din 30.08.2012 vei putea sa-ti votezi favoritii.                    </p>
                        <div class="gallerybox">
                            <h4>Costume</h4>
                            <div id="screenshots" class="comic">
                                <a class="first" style="position: relative;" id="0|qXOfnZnCu-c%2C" href="https://web.archive.org/web/20120606081839/http://gf2.geo.gfsrv.net/cdn72/97fb72978fd1ce8f5a6ce748f532fc.jpg" rel="group">
                                    <img src="https://web.archive.org/web/20120606081839im_/http://gf3.geo.gfsrv.net/cdn59/87cc791b03033933cc088afd97d790.jpg" alt="Screenshots"/>
                                </a>
                            </div>
                            <br class="clearfloat"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#screenshots a").fancybox({
                target:         '#gallery',
                expose:         '#000',
                titlePosition:    'inside',
                titleFormat:     formatTitle,
                autoScale: false
            }).gallery({
                next:   '.forward',
                prev:   '.back',
                speed: 800
            });
            function formatTitle(title, currentArray, currentIndex, currentOpts) {
                var data = currentArray[currentIndex]['id'].split('|');
                return '<div id="tip7-title"><p></p><a href="{{ url("contest/details/") }}' + data[1] + '" class="btn-big">Detalii</a></div>';
            }
        });
    </script>
@endsection
