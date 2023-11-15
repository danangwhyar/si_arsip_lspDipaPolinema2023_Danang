@extends('layouts.main', ['title' => 'Arsip'])

@section('contents')
    <section class="row">

        <div class="row">
            <div class="col-md-10">
                <div class="page-heading">
                    <h3>Arsip Surat</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="page-heading">
                    <nav style=" margin-left:35px; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- @include('utilities.alert-flash-message') --}}
        <div class="alert alert-primary" role="alert">
            <label class="form-label">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</label><br>
            <label class="form-label">Klik <span class="badge text-bg-warning"> Lihat </span>pada kolom aksi untuk menampilkan surat.</label>
        </div>

        <div class="col card px-3 py-3">
            <div class="table-responsive">
                <table class="table table-sm w-100" id="datatable">
                    <thead>
                        <tr>
                            <th scope=" col">Nomor Surat</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Waktu Pengarsipan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="d-flex justify-content-start pb-3">
                <div class="btn-group d-gap gap-2">
                    <a href="{{ route('arsip.create') }}" class="btn btn-primary">
                        <i class="bi bi-folder-plus"></i> Arsipkan Surat..
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    @include('menu.arsip.script')
    <script></script>
@endpush