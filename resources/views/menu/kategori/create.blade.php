@extends('layouts.main', ['title' => 'Arsip', 'page_heading' => 'Kategori Surat >> Tambah'])

@section('contents')
<section class="row">

	<div class="row">
        <div class="col-md-9">
            <div class="page-heading">
                <h3>Kategori Surat >> Tambah</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="page-heading">
                <nav style=" margin-left:42px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori Surat</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

	@include('utilities.alert-flash-message')
	<div class="alert alert-primary" role="alert">
        <label class="form-label">Tambahkan atau edit data kategori. Jika sudah selesai, jangan lupa untuk.</label><br>
        <label class="form-label">mengklik tombol<span class="badge text-bg-warning">Simpan</span>.</label>
    </div>
	<div class="col card px-3 py-3">
		<form action="{{ route('kategori.store') }}" method="POST">
			@csrf
			<div class="form-group row mb-3">
				<label for="id" class="form-label col-sm-2">ID (Auto Increment)</label>
				<div class="col-sm-5">
					<input type="number" class="form-control @error('id') is-invalid @enderror" name="id" id="id" value="{{ $ctId }}"disabled>
				</div>
			</div>
			<div class="form-group row mb-3">
				<label for="nama_kategori" class="form-label col-sm-2">Nama Kategori</label>
				<div class="col-sm-5">
					<input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" id="nama_kategori" placeholder="Masukkan nama kategori..">
					@error('nama_kategori')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="judul_kategori" class="form-label col-sm-2">Judul Kategori</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control @error('judul_kategori') is-invalid @enderror" name="judul_kategori" id="judul_kategori" placeholder="Masukkan judul kategori.."></textarea>
	
					@error('judul_kategori')
					<div class="invalid-feedback d-block">
						{{ $message }}
					</div>
					@enderror
				</div>
			</div>
			<br>
			<div class="button">
                <a href="{{ url()->previous() }}" class="btn btn-secondary" style="margin-right:10px">
                   << Kembali
                </a>
                <a type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan
                </a>
            </div>
		</form>
	</div>
</section>
@endsection



	
	