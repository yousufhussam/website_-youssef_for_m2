@extends('layouts.app')

@section('content')
    <!-- center column -->
    <div class="col-2">
        <div class="content content-last">
            <div class="content-bg">
                <div class="content-bg-bottom">
                    <h2>Contul tău</h2>
                    <div class="administration-inner-content">
                        <div class="input-data-box">
                            <h4>Datele utilizatorului</h4>

                            <ul>
								<li>Nume de utilizator: gigelfrone</li>
								<li>Email: <span id="yourEmail">gigelfrone@gmail.com</span></li>
								<li>Monede Dragon: 123 <a href="#" class="load-link">(top up)</a></li>
								<li>Semnele Dragonului: 20</li>
								<li class="long-li-code">Cod de ștergere caracter: <span class="delete-code">încă nespecificat</span></li>
                            </ul>

                            <div class="administration-box"><a href="#" class="btn">Încarcă MD</a><p>Îmbunătățește-ți contul folosind Monede Dragon</p></div>
                            <div class="administration-box"><a href="#" class="btn">Caracter</a><p>Lista caracterelor</p></div>
                            {{-- <div class="administration-box"><a href="#" class="btn">Prieteni</a><p>Recruteaza prieteni si vezi statusul noilor prieteni recrutati</p></div> --}}
                            <div class="administration-box"><a href="?s=emailchange" class="btn">Email</a><p>Schimbă adresa de email</p></div>
                            <div class="administration-box"><a href="#passwordchangerequest" class="btn">Parola</a><p>Schimbă parola</p></div>
                            <div class="administration-box"><a href="?s=pwchange" class="btn">Schimba Datele</a><p>Schimba datele contului</p></div>
                            <div class="administration-box"><a href="?s=storagepasswordlost" class="btn">Parola Depozit</a><p>Cere parola de la Depozit</p></div>
                            <div class="administration-box"><a href="?s=displaycode" class="btn">Parola Stergere</a><p>Codul pentru ştergerea personajelor</p></div>
                            <div class="administration-box"><a href="#" class="btn">Anularea contului</a><p>Anularea contului</p></div>

                        </div>
                        <div class="box-foot"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">&nbsp;</div>
    </div>
@endsection
