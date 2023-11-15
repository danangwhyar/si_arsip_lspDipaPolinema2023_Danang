@extends('layouts.main', ['title' => 'Arsip', 'page_heading' => 'Arsip Surat >> Lihat'])

@section('contents')
<section class="row">

    <div class="row">
        <div class="col-md-9">
            <div class="page-heading">
                <h3>Arsip Surat >> Lihat</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="page-heading">
                <nav style=" margin-left:81px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

	@include('utilities.alert-flash-message')
	<div class="col card px-3 py-3">
				<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <strong style="margin-right:90px;"><label for="no_surat" class="form-label">Nomor</label></strong> <label for="no_surat" class="form-label"> : {{ $arsip->no_surat }}</label> <br>
                    <strong style="margin-right:78px;"><label for="kategori_id" class="form-label">Kategori</label></strong> <label for="kategori_id" class="form-label"> : {{ $arsip->kategori->nama_kategori }}</label> <br>
                    <strong style="margin-right:104px;"><label for="judul_arsip" class="form-label">Judul</label></strong> <label for="judul_arsip" class="form-label"> : {{ $arsip->judul_arsip }}</label> <br>
                    <strong style="margin-right:50px;"><label for="updated_at" class="form-label">Waktu Arsip</label></strong> <label for="updated_at" class="form-label"> : {{ $arsip->updated_at }}</label> <br>
                </div>
            </div>
        </div>

       
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <embed src="{{ asset('assets/' . $arsip->file_arsip) }}" width="100%" height="600px"></embed>
                </div>
            </div>
        </div>
        <div class="button">
            <a href="{{ route('arsip.index') }}" class="btn btn-secondary" style="margin-right: 10px;">
                << Kembali
            </a>
            <a href="{{ route('arsip.download', $id) }}" class="btn btn-warning" style="margin-right: 10px;">
                <i class="bi bi-cloud-download"></i> Unduh
            </a>
            <a href="{{ route('arsip.edit', $id) }}" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i> Edit/Ganti File
            </a>
        </div>
	</div>
</section>
@endsection

@push('js')
@include('menu.arsip.script')
<script>
	
	</script>
@endpush


	
	