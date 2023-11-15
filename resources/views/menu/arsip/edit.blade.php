@extends('layouts.main', ['title' => 'Arsip', 'page_heading' => 'Arsip Surat >> Edit'])

@section('contents')
<section class="row">

    <div class="row">
        <div class="col-md-9">
            <div class="page-heading">
                <h3>Arsip Surat >> Edit</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="page-heading">
                <nav style=" margin-left:34px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Lihat</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

	@include('utilities.alert-flash-message')
    <div class="alert alert-primary" role="alert">
        <label class="form-label">Edit surat yang telah terbit pada form ini untuk diarsipkan..</label><br>
        <label class="form-label"> Gunakan file berformat<span class="badge text-bg-warning">PDF</span>.</label>
    </div>
	<div class="col card px-4 py-4">
		<form action="{{ route('arsip.update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="no_surat" class="form-label col-sm-2">Nomor Surat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('no_surat') is-invalid @enderror"
                        name="no_surat" id="no_surat"  value="{{ $arsip->no_surat }}"
                        placeholder="Masukkan Nomor Surat..">
        
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
                        <option disabled>Kategori undangan...</option>
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
                        name="judul_arsip" id="judul_arsip"  value="{{ $arsip->judul_arsip }}"
                        placeholder="Masukkan Judul Arsip..">
        
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
                    <input type="file" name="file_arsip" class="form-control" accept=".pdf"  value="{{ $arsip->file_arsip}}"
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



	
	