@extends('layouts.appadmin')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-body">
                    <a href="/admin/ticket/tambah">+ Tambah Tiket Baru</a>
                    <div class="head">
                        <form action="/ticket/cari" method="GET">
                            <div class="form-row">
                                <div class="col">
                                    <input class="form-control" type="text" name="cari" placeholder="Cari Judul Film" value="{{ old('cari') }}">
                                </div>
                                <div class="col">
                                    <input class="btn btn-primary" type="submit" value="CARI">
                                </div>
                              </div>
                        </form>
                    </div>


                    <table class="table table-bordered">
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Rating</th>
                            <th>Category</th>
                            <th>Harga</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($ticket as $p)
                        <tr>

                            <td>{{ $p->title }}</td>
                            <td>{{ $p->description }}</td>
                            <td>{{ $p->rating }}</td>
                            <td>{{ $p->category }}</td>
                            <td>{{ $p->harga }}</td>
                            <td><img width="150px" src="{{ url('/data_file/'.$p->image) }}"></td>

                            <td>
                                <a href="/admin/ticket/edit{{ $p->id }}"><button class="btn btn-warning">Edit</button></a>
                                <a href="/admin/ticket/hapus{{ $p->id }}"><button class="btn btn-danger">Hapus</button></a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    <a href="/admin/home"><button class="btn btn-danger"><-Kembali</button></a>
                    <button class="btn btn-primary" onclick="window.print()">Cetak</button>

                    </div>
                    </div>
                    </div>
                    <br>
                </div>
            </div>
</div>
@endsection
