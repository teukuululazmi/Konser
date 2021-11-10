@extends('layouts.master')
@section('content')
    <!-- Form inputs -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pemesanan Tiket</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Harap memasukan data - data yang diperlukan untuk pemesanan.</p>
                        <div class="success" data-success="{{Session::get('success')}}"></div>
						<form action="{{ route('pemesananPost') }}" method="POST">
                            @csrf
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-10">
										<input type="text" name="name" value="{{ auth()->user()->name }}" readonly class="form-control">
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Email</label>
									<div class="col-lg-10">
										<input type="email" name="email" required class="form-control">
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-2">No. Handphone</label>
									<div class="col-lg-10">
										<input type="number" name="hp" required class="form-control">
									</div>
								</div>
							</fieldset>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>
				<!-- /form inputs -->
@endsection