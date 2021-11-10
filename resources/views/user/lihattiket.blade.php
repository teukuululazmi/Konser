@extends('layouts.master')
@section('content')
    <div class="col-xl-3 col-sm-6">
		<div class="card bg-pink-400" style="background-image: url({{ asset('global_assets/images/backgrounds/panel_bg.png') }}); background-size: contain;">
			<div class="card-body text-center">
				<div class="card-img-actions d-inline-block mb-3">
					<img class="img-fluid rounded-circle" src="{{ asset('global_assets/images/placeholders/placeholder.jpg') }}" width="170" height="170" alt="">
				</div>
                 @foreach ($lihat as $item)
                    <h6 class="font-weight-semibold mb-0">{{ ($item->name ? $item->name :'Belum Memesan') }}</h6>
		   		    <span class="d-block opacity-75">{{ $item->tiket ? $item->tiket:'Tiket Belum Tersedia' }}</span>
                @endforeach
			</div>
		</div>
	</div>
@endsection