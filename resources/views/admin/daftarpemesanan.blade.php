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
					<div class="success" data-success="{{Session::get('success')}}"></div>
					<table class="table datatable-basic">
						<thead>
							<tr class="text-center">
								<th>Name</th>
								<th>Email</th>
								<th>No. Handphone</th>
								<th>No. Tiket</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($daftar as $item)
                                <tr class="text-center">
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->hp }}</td>
                                    <td>{{ $item->tiket }}</td>
                                    <td><span class="badge {{$item->status != 'Sudah Check In'? 'badge badge-danger':'badge badge-success'}}">{{$item->status}}</span></td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{ route('daftarUpdate', $item->id) }}"
																onclick="event.preventDefault();
																	document.getElementById('daftarUpdate-form').submit();">
																	<i class="icon-pencil7"></i>{{ __('Update') }}
													</a>
													<form id="daftarUpdate-form" action="{{ route('daftarUpdate', $item->id) }}" method="POST" class="d-none">
														@method('patch')
														@csrf
													</form>
													<a href="/daftarDelete/{{ $item->id }}" class="dropdown-item delete"><i
                                                        class="icon-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
							    </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->
@endsection