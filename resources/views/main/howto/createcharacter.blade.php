<div id="tutorialScoller">
    <div class="scrollable">
        <div class="items">
            <!-- 1-5 -->
            <div>
                <img src="{{ asset('img/tutorial/1_1.jpg') }}" width="480" height="360" alt="" />
                <p class="pager">1 / 4</p>
                <p class="txt">Exista mai multe lumi in joc si canale diferite (CH). In fiecare lume poti crea pana la patru caractere cu care poti juca numai pe lumile unde au fost create. Si bineinteles ca poti juca doar cu un singur caracter o data.<br />
                    Poti alege sa joci pe canale diferite cu acel caracter. Pe canalul ales poti interactiona cu alti jucatori, lupta alaturi sau impotriva lor si experimenta aventuri. De asemenea poti comunica (chat) cu jucatori de pe alte canale. <br />
                    Interactiunea si schimbul cu jucatorii de pe canalele diferite nu sunt posibile.<br />
                    Dupa ce ai ales o lume (server) si un canal (CH), apasa butonul "OK", tasteaza ID-ul si parola si confirma-le apasand butonul "Conectare".</p>
            </div>
            <div>
                <img src="{{ asset('img/tutorial/1_2.jpg') }}" width="480" height="360" alt="" />
                <p class="pager">2 / 4</p>
                <p class="txt">Inainte de a crea un caracter nou, alege un Imperiu din cele trei posibile. Iti vei incepe jocul in Imperiul ales. Apasa butonul "Creeaza".</p>
            </div>
            <div>
                <img src="{{ asset('img/tutorial/1_3.jpg') }}" width="480" height="360" alt="" />
                <p class="pager">3 / 4</p>
                <p class="txt">Alege un Imperiu si apasa butonul "Alege" apoi vei putea selecta si tipul caracterului tau.</p>
            </div>
            <div>
                <img src="{{ asset('img/tutorial/1_4.jpg') }}" width="480" height="360" alt="" />
                <p class="pager">4/ 4</p>
                <p class="txt">Exista 4 clase diferite in joc, fiecare cu caracteristici individuale.<br />
                    Poti sa te folosesti de sageti pentru a alege clasa. Cand caracterul tau este afisat in fata, poti folosi linkul din cutie (cu verde marcat) pentru a schimba aspectul caracterului prin alegerea intre 1 si 2. Intr-un final caracterul tau are nevoie de un nume. Dupa ce ai ales numele apasa pe " Creeaza " pentru a da viata caracterului. Acum poti apasa pe Start pentru a intra in joc.</p>
            </div>
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
