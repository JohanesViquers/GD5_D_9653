@extends('dashboard.dashboard')

@sections('content')
<br>
<h2 class="text-center">Data Departemen</h2>
<br><br>

<table class="table table-bordered">
    <tr>
        <th>Nama Departemen</th>
        <th>Nama Manager</th>
        <th>Jumlah Pegawai</th>
</tr>

@if(count($data_departemen))
@foreach($data_departemen as $dpt)

<tr>
    <td>{{$dpt->nama_depertemen }}</td>
    <td>{{$dpt->nama_manager }}</td>
    <td>{{$dpt->jumlah_pegawai }}</td>
</tr>
@endforeach
@else
<tr>
    <td align="center" colspan="3">Empty Data!! Have a Nice Day & #180709653</td>
</tr>
@endif
</table>
@endsection