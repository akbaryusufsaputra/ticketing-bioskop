@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-body">
                    <table>
                        @foreach($ticket as $p)
                        <form action="/ticket/beli" method="post">
                            {{csrf_field()}}

                            <h5 class="card-title">Nama Pelanggan</h5>
                            <input type="text" name="nama" readonly class="form-control" value="{{ Auth::user()->name }}">
                            <h5 class="card-title">Judul</h5>
                            <input class="form-control" type="text" name="judul" required value="{{ $p->title }}" readonly><br>
                            <h5 class="card-title">Tanggal</h5>
                            <input class="form-control" type="date" name="tanggal" required><br>
                            <h5 class="card-title">Jumlah</h5>
                            <input class="form-control" type="text" name="jumlah" onkeyup="transaksi();" id="jumlah" required><br>
                            <h5 class="card-title">Harga</h5>
                            <input class="form-control" type="text" name="harga" id="hargaakhir" required readonly><br>
                            <input class="form-control" type="text" id="harga" required value="{{ $p->harga }}" readonly hidden><br>
                            <h5 class="card-title">Masukkan Jumlah Pembayaran</h5>
                            <input class="form-control" type="text" name="nominalpembayaran" onkeyup="transaksii();" id="nominalpembayaran" required><br>
                            <h5 class="card-title">Kembalian</h5>
                            <input class="form-control" type="text" name="kembalian" id="kembalian" required readonly><br>

                            <input type="submit" class="btn btn-primary" name="simpan" value="Proses">
                            <a href="home" class="btn btn-danger" style="margin-left: 10px;">Kembali</a>
                            @endforeach
                        </form>
                        </table>
                </div>
            </div>
            <script>
                function transaksi(){
                var b1 = parseFloat(document.getElementById('jumlah').value);
                var b2 = parseFloat(document.getElementById('harga').value);
                var b3 = b1 * b2;
                document.getElementById("hargaakhir").value = b3;
                }
            </script>
            <script>
                function transaksii(){
                var b5 = parseFloat(document.getElementById('nominalpembayaran').value);
                var b6 = parseFloat(document.getElementById('hargaakhir').value);
                var b7 = b5 - b6;
                document.getElementById("kembalian").value = b7;
                }
            </script>
</div>
@endsection
