@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h4>{{$produk->nama}}</h4><hr>
						 {{$produk->harga}} |
							Stok : {{$produk->stok}} |
							Berat : {{$produk->berat}} gr |
							Warna : {{$produk->warna}} |
							seller : {{$produk->seller->username}} 
							Tanggal_produk : {{$produk->created_at->diffforhumans()}}|
						</p>
						{!! nl2br($produk->deskripsi) !!}
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection