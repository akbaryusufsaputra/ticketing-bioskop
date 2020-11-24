@extends('layouts.appadmin')

@section('content')
<div class="container">

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Film</th>
            <th>Jumlah Tiket</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        @foreach($riwayat as $p)
        <tr>

            <td>{{ $p->nama }}</td>
            <td>{{ $p->judul }}</td>
            <td>{{ $p->jumlah }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>
                <a href="/eticket{{ $p->id }}" target="_blank"><button class="btn btn-warning" >Pilih</button></a>
            </td>
        </tr>
        @endforeach

    </table>
    <a href="/admin/home"><button class="btn btn-danger"><-Kembali</button></a>
    <button class="btn btn-primary" onclick="window.print()">Cetak</button>

</div>





@endsection
