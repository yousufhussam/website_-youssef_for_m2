@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <div class="about-inner-content">
                        <h2>Informatii Generale</h2>
                        <div class="securitybox-info">
                            <p>Gameforge trateaza foarte serios securitatea conturilor voastre. Pentru asta, am adunat la un loc cateva informatii importante pentru a va ajuta si invata sa fiti precauti atunci cand vine vorba sa deveniti o<em class="highlighted">victima a conturilor furate sau a metodelor de fraudare</em>. Daca se intampla asta sau pentru a pre-intampina acest lucru, puteti citii ce sa faceti in astfel de cazuri.</p>
                        </div>
                        <ul class="tabs-nav tabs4-big">
                            <li id="tab1">
                                <a href="{{ url('main/account') }}">Furtul de Cont</a>
                            </li>
                            <li id="tab2" class="selected">
                                <a href="{{ url('main/pc') }}">Securitate PC</a>
                            </li>
                            <li id="tab3">
                                <a href="{{ url('main/cheat') }}">Frauda</a>
                            </li>
                            <li id="tab4">
                                <a href="{{ url('main/help') }}">Ajutor!</a>
                            </li>
                        </ul>
                        <div class="securitybox">
                            <!--<h4></h4>-->
                            <p>Pentru a avea contul protejat de neplaceri, este foarte important sa ai calculatorul securizat. Poti gasi o lista cu cativa pasi utili de urmat pentru <em class="highlighted">protectie optima</em> aici, pe care ti-o recomandam sa o implementezi.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Asigura-te ca sistemul de operare (Windows) este updatat cu ultima versiune.</h4>
                            <p>Pentru a face asta, acceseaza urmatorul site: <a href="http://windowsupdate.microsoft.com/" target="_blank">http://windowsupdate.microsoft.com</a></p>
                        </div>
                        <div class="securitybox">
                            <h4>Updateaza browserul la ultima versiune.</h4>
                            <p>Te rugam tine minte ca Metin2 foloseste <em class="highlighted">Internet Explorer</em>. Din acest motiv, trebuie sa te asiguri ca Internet Explorer este updatat la zi, chiar daca de obicei folosesti un alt browser.<br/><br/>

                                Aici ai cateva linkuri pentru updateul browserelor cel mai des folosite:<br/><br/>
                                <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home" target="_blank">Internet Explorer</a><br/>
                                <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a><br/>
                                <a href="http://www.opera.com/browser/download/" target="_blank">Opera</a><br/>
                                <a href="http://www.apple.com/safari/download/" target="_blank">Safari</a><br/>
                                <a href="https://www.google.com/chrome/index.html" target="_blank">Chrome</a></p>
                        </div>
                        <div class="securitybox">
                            <h4>Asigura-te ca pluginurile browserului si aplicatiile acestuia sunt updatate la zi.</h4>
                            <p>Cele mai populare plug-inuri sunt <a href="http://www.adobe.com/products/reader.html" target="_blank">Adobe Reader</a>, <a href="http://www.java.com/en/download/manual.jsp" target="_blank">Java</a> si <a href="http://www.adobe.com/products/flashplayer.html" target="_blank">Flash Player</a>.<br/><br/>
                                Cele mai populare servicii de mesagerie sunt <a href="http://explore.live.com/messenger" target="_blank">Windows Live Messenger</a>,
                                <a href="http://www.icq.com/en" target="_blank">ICQ</a>, <a href="http://uk.messenger.yahoo.com/" target="_blank">Yahoo Messenger</a> si <a href="http://www.skype.com/intl/en/home" target="_blank">Skype</a>.</p>
                        </div>
                        <div class="securitybox">
                            <h4>Foloseste un soft anti-virus.</h4>
                            <p>Aici ai o lista cu cel mai des folosite anti-virusuri: <br/><br/>

                                <a href="http://www.avira.com/en/avira-free-antivirus" target="_blank">http://www.avira.com/en/avira-free-antivirus</a><br/>
                                <a href="http://www.avast.com/en-gb/index" target="_blank">http://www.avast.com/en-gb/index</a><br/>
                                <a href="http://free.avg.com/gb-en/homepage" target="_blank">http://free.avg.com/gb-en/homepage</a><br/>
                                <a href="http://www.bitdefender.co.uk/ " target="_blank">http://www.bitdefender.co.uk/</a><br/>
                                <a href="http://www.f-secure.com/en/web/home_gb" target="_blank">http://www.f-secure.com/en/web/home_gb</a><br/>
                                <a href="http://www.gdatasoftware.co.uk/">http://www.gdatasoftware.co.uk/</a><br/>
                                <a href="http://www.kaspersky.co.uk/" target="_blank">http://www.kaspersky.co.uk/</a><br/>
                                <a href="http://www.mcafee.com/uk/" target="_blank">http://www.mcafee.com/uk/</a><br/>
                                <a href="http://www.norman.com/" target="_blank">http://www.norman.com</a><br/>
                                <a href="http://www.pandasecurity.com/uk/" target="_blank">http://www.pandasecurity.com/uk/</a><br/>
                                <a href="http://www.sunbeltsoftware.com/" target="_blank">http://www.sunbelt-software.com</a><br/>
                                <a href="http://www.symantec.com/en/uk/" target="_blank">http://www.symantec.com/en/uk/</a></p>
                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
