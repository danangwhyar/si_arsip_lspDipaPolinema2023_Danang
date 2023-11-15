@extends('layouts.main', ['title' => 'Arsip'])

@section('contents')
<section class="row">

    <div class="row">
        <div class="col-md-9">
            <div class="page-heading">
                <h3>Arsip Surat >> Tambah</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="page-heading">
                <nav style=" margin-left:60px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

	@include('utilities.alert-flash-message')
    <div class="alert alert-primary" role="alert">
        <label class="form-label">Unggah surat yang telah diterbitkan pada form ini untuk diarsipkan.</label><br>
        <label class="form-label"> Gunakan file berformat<span class="badge text-bg-warning">PDF</span>.</label>
    </div>


	<div class="col card px-4 py-4">
		<form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="no_surat" class="form-label col-sm-2">Nomor Surat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('no_surat') is-invalid @enderror"
                    name="no_surat" id="no_surat" 
                    placeholder="Nomor Surat..">

                    @error('no_surat')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori_id" class="form-label col-sm-2">Kategori</label>
                <div class="col-sm-5">
                    <select class="form-select" name="kategori_id" id="kategori_id">
                        <option disabled selected>Kategori Surat...</option>
                        @foreach ($kategori as $kategoris)
                        <option value="{{ $kategoris->id }}" {{ old('kategori_id')==="$kategoris->id" ? 'selected'
                            : '' }}>
                            {{ $kategoris->nama_kategori }}
                        </option>
                        @endforeach
                    </select>

                    @error('kategori_id')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_arsip" class="form-label col-sm-2">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('judul_arsip') is-invalid @enderror"
                        name="judul_arsip" id="judul_arsip"
                        placeholder="Judul Surat..">

                    @error('judul_arsip')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="file_arsip" class="form-label col-sm-2">File Surat (PDF)</label>
                <div class="col-sm-5">
                    <input type="file" name="file_arsip" class="form-control" accept=".pdf" 
                    placeholder="Browse File..">
                    @error('file_arsip')
                    <div class="d-block invalid-feedback">
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
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </form>
	</div>
</section>
@endsection



	
	