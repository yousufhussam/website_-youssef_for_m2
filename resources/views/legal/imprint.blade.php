@extends('layouts.legal')

@section('content')
    <table width="520" cellspacing="0" cellpadding="0" align="center">
        <tbody><tr>
            <td>
                <br><br>	<br><br><b><u>Nota legala</u></b><br><br>Gameforge 4D GmbH<br>
                Albert-Nestler-Strasse 8<br>
                76131 Karlsruhe<br>
                Germania<br>
                <br>
                Fon: +49 (0)700 GAMEFORGE (+49 (0)700 426336743)<br>
                <b>-Nici un ajutor pentru Joc sau Plata in Joc la acest numar-</b><br>
                Fax: +49 (0)721 354808152<br>
                <br>
                Contact: info@gameforge4d.com<br>
                <br>
                Tribunalul Districtual din Mannheim, HRB 111190 <br>
                ID fiscal: DE247446041 <br>
                Directori administrativi: Carsten van Husen<br><br>Conţinutul site-urilor externe conectate la site-ul curent al Gameforge poate fi oricând modificat. De aceea, noi nu putem fi făcuţi responsabili pentru link-urile externe. Vă rugăm să ne înştiinţaţi atunci când descoperiţi un conţinut nepermis sau site-uri care conectate la cel actual.<br>
                <br>
                Gameforge 4D GmbH îşi rezervă toate drepturile asupra codurilor-sursă, textelor, imaginilor şi altor conţinuturi protejate prin legea dreptului de autor.		</td>
        </tr>
        <tr>
            <td align="left">
                <br>
                <br>
                <b><u>Navigare:</u></b>
                <br>
                <br>
                &nbsp;-&nbsp;<a href="{{ url('legal/terms') }}">Termeni si Conditii Gameforge 4D GmbH</a>&nbsp;-&nbsp;<br/>
                &nbsp;-&nbsp;<a href="{{ url('legal/imprint') }}">Date contact Gameforge 4D GmbH</a>&nbsp;-&nbsp;<br/>
                &nbsp;-&nbsp;<a href="{{ url('legal/privacy') }}">Protectia Informatiilor Gameforge 4D GmbH</a>&nbsp;-&nbsp;<br/>
                <br>
                <br>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
