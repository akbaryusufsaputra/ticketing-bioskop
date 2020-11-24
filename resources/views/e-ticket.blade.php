<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body onload="window.print()">
	<div class="container">
		<div class="card">
            <div class="card-header">
            	<table>
            		@foreach($riwayat as $p)
            		<tr>
            			<td><p class="h1 blue">E-TICKET BIOSKOP ONLINE</p></td>
            			<td> <img src="{{URL::asset('/image/1.png')}}" alt="profile Pic" class="logo" ></td>
            		</tr>
            		<tr>
            			<td>Kode Pesanan Anda:</td>
            			<td>Butuh bantuan? Hubungi Kami Di:</td>
            		</tr>
            		<tr class="blue">
            			<td>{{ $p->id }}</td>
            			<td>081212-1212-1212</td>
            		</tr>
            	</table>
				<p style="margin-top: 50px;">Terima kasih <strong>{{ $p->nama }}</strong> telah memesan tiket bioskop di <strong>BIOSKOP ONLINE</strong>, E-Tiket anda telah terbit!</p>
				<div class="idbooking">
					<p class="h1">Id Booking Tiket Bioskop : {{ $p->id }}</p>
				</div>
				<div>
					<p class="h1"><strong>{{ $p->judul }}</strong></p>
					<p class="h4"><strong>Tanggal:</strong></p>
					<p class="h5">{{ $p->tanggal }}</p>
					<p class="h4"><strong>Jumlah Tiket:</strong></p>
					<p class="h5">{{ $p->jumlah }}</p>
				</div>
				<div>
					<h5><strong>HAL PENTING TERKAIT PENAYANGAN</strong></h5>
					<ul>
						<li>Mohon tiba di bioskop min. 60 menit sebelum penayangan.</li>
						<li>Tunjukkan E-Tiket dan tanda pengenal resmi anda ke staf operator.</li>
						<li>Anda dapat menggunakan E-Tiket yang didapat.</li>
					</ul>
					@endforeach
				</div>
		</div>
	</div>
</div>
</body>
</html>
