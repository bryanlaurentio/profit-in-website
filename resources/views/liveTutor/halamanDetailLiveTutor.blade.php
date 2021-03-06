@extends('layouts.app')

@section('content')
{{-- kepala --}}

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
          <br>
          <br>
          <br>
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Live Tutor</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('liveTutor') }}">Live Tutor</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Live Tutor</a></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('liveTutor') }}" class="btn btn-sm btn-neutral">Kembali</a>
        </div>
        </div>
      </div>
    </div>
  </div>

{{-- content --}}
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
      <div class=" col ">
        <div class="card">
          <div class="card-header bg-transparent">
            <h1 class="mb-0" style="text-align: center">{{ $LiveTutor->nameOfLiveTutor }}</h1>
            <h3 class="mb-0" style="text-align: center">Oleh : {{ $LiveTutor->nameOfTutorInLiveTutor }}</h3>
            <p><br></p>
            <div class="row">
                <h3 class="col-sm-3"></h3>
                <h3 class="col-sm-3" style="text-align: left">Tanggal Live Tutor</h3>
                <h3 class="col-sm-6" style="text-align: left">: {{$LiveTutor->dateLiveTutor}}</h3>
                <h3 class="col-sm-3"></h3>
                <h3 class="col-sm-3" style="text-align: left">Durasi Live Tutor</h3>
                <h3 class="col-sm-6" style="text-align: left">: {{ $LiveTutor->durationLiveTutor }} Jam</h3>
                <h3 class="col-sm-3"></h3>
                <h3 class="col-sm-3" style="text-align: left">Status Live Tutor</h3>
                <h3 class="col-sm-6" style="text-align: left">: {{ $LiveTutor->statusLiveTutor }}</h3>
                <h3 class="col-sm-3"></h3>
                <h3 class="col-sm-3" style="text-align: left">Link Zoom</h3>
                <h3 class="col-sm-6" style="text-align: left"><a href="{{$LiveTutor->linkLiveTutor}}">: {{$LiveTutor->linkLiveTutor}}</a></h3>
            </div>
        </div>
          {{--<div class="card-body" style="text-align: center">
            <p style="text-align:center;">
                <iframe width="850" height="550" align="middle" src="{{ $LiveTutor->linkLiveTutor }}" title="Zoom Live Meeting" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
          </div>--}}
        </div>
      </div>
    </div>


@include('layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
