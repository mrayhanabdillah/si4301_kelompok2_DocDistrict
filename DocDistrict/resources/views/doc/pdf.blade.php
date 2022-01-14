<!DOCTYPE html>
<html>
<head>
    <title>{{$dldPDF->doc->title_doc}}</title>
</head>
<body>
    <h3 align="center">{{$dldPDF->doc->title_doc}}</h3>
    <br>
    <br>
    <p>Lampiran     : 1 Lembar</p>
    <p>Perihal      : {{$dldPDF->doc->title_doc}}</p>
    <br>
    <br>
    <p>Kepada Yth.<p>Bapak/Ibu Staff desa<p>Desa Cipanas</p></p></p>
    <br>
    <br>
    <p>Dengan hormat,</p>
    <p style="text-indent: 45px;">Nama : {{$dldPDF->user->nama}}</p>
    <p style="text-indent: 45px;">Alamat : {{$dldPDF->user->alamat}}</p>
    <p style="text-indent: 45px;">NIK : {{$dldPDF->user->nik}}</p>
    <p>Dengan ini mengajukan {{$dldPDF->doc->title_doc}} kepada bapak/ibu staff desa.</p>
    <p>Demikianlah surat permohonan ini saya sampaikan, atas perhatian dan pertimbangan bapak/ibu staff saya ucapkan terima kasih</p>


</body>
</html>