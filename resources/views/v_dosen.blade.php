@extends('layout.v_template')

@section('content')
<h1> Halaman Dosen </h1>
<table>
<tr>
    <th><h4>NIP</h4></th>
    <th><h4>Nama</h4></th>
    <th><h4>Matkul</h4></th>
</tr>
@for($i=0; $i < 3; $i++)
<tr>
    <td><h5>{{$data ['dosen'] [$i] ['nip']}}</h5></td>
    <td><h5>{{$data ['dosen'] [$i] ['nama']}}</h5></td>
    <td><h5>{{$data ['dosen'] [$i] ['matkul']}}</h5></td>
</tr>
@endfor
</table>
@endsection