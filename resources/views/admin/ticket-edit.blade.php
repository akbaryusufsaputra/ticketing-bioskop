@extends('layouts.appadmin')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-body">
                    <table>
                        @foreach($ticket as $p)
                    <form action="/admin/ticket/update{{ $p->id }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{ method_field('PUT') }}

                            <h5 class="card-title">Judul</h5>
                            <input class="form-control" type="text" name="title" required value="{{ $p->title }}"><br>
                            <h5 class="card-title">Deskripsi</h5>
                            <input class="form-control" type="text" name="description" required value="{{ $p->description }}"><br>
                            <h5 class="card-title">Rating</h5>
                            <input class="form-control" type="text" name="rating" required value="{{ $p->rating }}"><br>
                            <h5 class="card-title">Kategori</h5>
                            <select class="form-control" name="category" required value="{{ $p->category }}">
                                <option></option>
                                <option value="Horror" <?php if($p->category == "Horror"){ echo "Selected";} ?>>Horror</option>
                                <option value="Comedy" <?php if($p->category == "Comedy"){ echo "Selected";} ?>>Comedy</option>
                                <option value="Romance" <?php if($p->category == "Romance"){ echo "Selected";} ?>>Romance</option>
                            </select>
                            <br>
                            <h5 class="card-title">Harga</h5>
                            <input class="form-control" type="text" name="harga" required value="{{ $p->harga }}"><br>
                            <h5 class="card-title">Image</h5>
                            <input class="form-control" type="file" name="image" required value="{{ $p->image }}"><br>

                            <input type="submit" class="btn btn-primary" name="update" value="Update">
                            <a href="/admin/ticket" class="btn btn-danger" style="margin-left: 10px;">Kembali</a>
                            @endforeach
                        </form>
                        </table>
                </div>
            </div>
</div>
@endsection
