<div id="tutorialScoller">
    <div class="scrollable">
        <div class="items">
            <!-- 1-5 -->
            @for ($i = 1; $i <= 5; $i++)
                <div>
                    <img src="{{ asset("assets/main/img/tutorial/4_{$i}.jpg") }}" width="480" height="360" alt="" />
                    <p class="pager">{{ $i }} / 5</p>
                    <p class="txt">{!! __("app/content/howto.crafting-stones.text-{$i}") !!}</p>
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
