@extends('layouts.admin')
@section('content')
		<!-- PAGE CONTENT -->
		<div class="page-content--bgf7">

			<!-- WELCOME -->
			<section class="welcome p-t-10">
				<div class="container">
					<div class="row">
						<div class="col-md-12"><center>
							<h1 class="tittle-4"> Daftar Pinjam
								<span>Barang di Laboratorium</span>
								</h1> </center>
								<hr class="line-seprate">
							</div>
						</div>
					</div>
				</section>
				<!-- END WELCOME -->
				<div class="main-content">
				<div class="section__content section__content--p30">
				<div class="container-fluid">
				<div class="row">
				@foreach($barangs as $data)
								<div class="col-md-4">
									<div class="card">
										<div class="card-body">
											<div class="mx-auto d-block"></div>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="{{ asset('assets/img/gambar/'.$data->gambar)  }}" style="width: 220px; height: 190px;" alt="Card image cap">
<h3 class="text-sm-center mt-2 mb-1"> {{ $data->nama}}</h3>
<h5 class="text-sm-center mt-2 mb-1"> Stok :{{ $data->stok}}</h5>
<div class="location text-sm-center">
	Keadaan : {{ $data->keadaan}}</div>
</div>
<div class="card-text text-sm-center">
	<!-- Button Memicu Modal -->
<button data-toggle="modal" data-target="#myModal" style="font-size: 18px">Pinjam<i class="fa fa-handshake"></i></button>
	<!-- End Button -->
</div>
	

										</div>
									</div>
									@endforeach
								</div>

							</div>
							
						</div>
						
					</div>
					
				</div>
			
		</div>

<!-- Form Data Sewa -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal Content -->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">SIRETOLAB</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('peminjaman.create')}}" method="post"></form>
				<div class="panel-title pull-right"><a class="btn btn-success" href="{{ route('peminjaman.create') }}">Pinjam</a>

			  </div>
			</div>
		</div>
		<!-- -->
	</div>
</div>
<!-- End -->
@endsection