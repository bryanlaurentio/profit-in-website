@extends('layouts.app')

@section('content')
{{-- header --}}
<div class="header bg-primary pb-4">
    <div class="container-fluid">
       <div class="header-body">
          <br>
          <br>
          <br>
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Membership</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('membership') }}">Pilih Membership </a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- content --}}
<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Pilih Paket Membership</h1>
                <p>
                  Berikut merupakan paket membership yang tersedia dalam aplikasi profit.in. Dengan berlangganan paket membership, kamu akan mendapatkan fasilitas yang tidak didapatkan oleh
                  pengguna non membership.
                </p>
            </div>
        </div>
            <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <p href="#" class="h2 text-center text-dark">Paket A</p>
                        <p href="#" class="h2 text-center text-dark">Durasi : 30 hari</p>
                            <p class="text-center">Rp100.000,-</p>
                        <p class="text-center"><a class="btn btn-success" href="{{ route('checkouta')}}">Beli Paket</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <p href="#" class="h2 text-center text-dark">Paket B</p>
                        <p href="#" class="h2 text-center text-dark">Durasi : 180 hari</p>
                            <p class="text-center">Rp500.000,-</p>
                        <p class="text-center"><a class="btn btn-success" href="{{ route('checkoutb')}}">Beli Paket</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 mb-4 center">
                <div class="card h-100">
                    <div class="card-body">
                        <p href="#" class="h2 text-center text-dark">Paket C</p>
                        <p href="#" class="h2 text-center text-dark">Durasi : 365 hari</p>

                            <p class="text-center">Rp900.000,-</p>
                        <p class="text-center"><a class="btn btn-success" href="{{ route('checkoutc')}}">Beli Paket</a></p>
                    </div>
                </div>
            </div>
    </div>
  </section>
  <!-- End Featured Product -->
@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
