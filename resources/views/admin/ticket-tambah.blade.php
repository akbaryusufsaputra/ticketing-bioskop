@extends('layouts.appadmin')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-body">
                    <table>
                        <form action="/admin/ticket/store" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <h5 class="card-title">Judul</h5>
                            <input class="form-control" type="text" name="title" required><br>
                            <h5 class="card-title">Deskripsi</h5>
                            <input class="form-control" type="text" name="description" required><br>
                            <h5 class="card-title">Rating</h5>
                            <input class="form-control" type="text" name="rating" required><br>
                            <h5 class="card-title">Kategori</h5>
                            <select class="form-control" name="category" required>
                                <option></option>
                                <option>Horror</option>
                                <option>Comedy</option>
                                <option>Romance</option>
                            </select>
                            <br>
                            <h5 class="card-title">Harga</h5>
                            <input class="form-control" type="text" name="harga" required><br>
                            <h5 class="card-title">Image</h5>
                            <input class="form-control" type="file" name="image" required><br>

                            <input class="btn btn-primary" type="submit" value="Simpan Data">
                            <a href="/admin/ticket" class="btn btn-danger" style="margin-left: 10px;">Kembali</a>
                        </form>
                        </table>
                </div>
            </div>
</div>
@endsection
