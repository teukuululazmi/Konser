@extends('layouts.master')
@section('content')
    <!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Daftar Pemesanan</h5>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
								<a class="list-icons-item" data-action="reload"></a>
								<a class="list-icons-item" data-action="remove"></a>
							</div>
						</div>
					</div>

					<div class="card-body">
                        <strong>Berikut daftar pemesanan tiket konser.</strong>
					</div>

					<table class="table datatable-button-print-basic">
						<thead>
							<tr class="text-center">
								<th>Name</th>
								<th>Email</th>
								<th>No. Handphone</th>
								<th>No. Tiket</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($laporan as $item)
                                <tr class="text-center">
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->hp }}</td>
                                    <td>{{ $item->tiket }}</td>
                                    <td><span class="badge {{$item->status != 'Sudah Check In'? 'badge badge-danger':'badge badge-success'}}">{{$item->status}}</span></td>
							    </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->
@endsection