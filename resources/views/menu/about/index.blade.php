@extends('layouts.main', ['title' => 'About', 'page_heading' => 'About'])

@section('contents')
    <section class="row">
        @include('utilities.alert-flash-message')
        <div class="col card px-3 py-3">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="mb-3 ms-5">
                        <img src="{{ asset('img/PP.jpg') }}" alt="" style="width: 120px;">
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <strong><label class="form-label">Aplikasi ini dibuat oleh : </label></strong><br>
                    <div class="col-sm-3 col-md-3 col-lg-3">                        
                        <strong><label class="form-label">Nama </label></strong><br>
                        <strong><label class="form-label">Prodi </label></strong><br>
                        <strong> <label class="form-label">Nim </label></strong><br>
                        <strong><label class="form-label">Tanggal</label>  </strong>                      
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <label class="form-label">: Danang Wahyu Ardana</label><br>
                        <label class="form-label">: D3 - MI PSDKU Kediri</label><br>
                        <label class="form-label">: 2131730123</label><br>
                        <label class="form-label">: 10 November 2023 </label>                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


