<div id="tutorialScoller">
    <div class="scrollable">
        <div class="items">
            <!-- 1-4 -->
            @for ($i = 1; $i <= 4; $i++)
                <div>
                    <img src="{{ asset("assets/main/img/tutorial/1_{$i}.jpg") }}" width="480" height="360" alt="" />
                    <p class="pager">{{ $i }} / 4</p>
                    <p class="txt">{!! __("app/content/howto.create-character.text-{$i}") !!}</p>
                </div>
            @endfor
        </div>
    </div>
    <a class="prevPage browse left"></a>
    <a class="nextPage browse right"></a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("div.scrollable").scrollable({
            size: 1,
            clickable: false,
            speed: 5,
            loop: false
        });
    });
</script>
