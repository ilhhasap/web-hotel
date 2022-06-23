@extends('layouts.main')

@section('container')

<section id="category-hero" style="background-color: #eff6ed">
    <div class="px-4 py-5 text-center">
        <h1 class="title fw-bold">Cari Hotel</h1>
        <div class="col-lg-6 mx-auto">
          <p class="sub-title mb-2">Mau nginep kemana hari ini?</p>
          {{-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
          </div> --}}
        </div>
      </div>
</section>

<div class="container col-xxl-12 my-5">
    <div class="d-flex flex-column gap-4 justify-content-start">
        <div class="d-flex flex-row gap-4">
            @foreach ( $hotels as $hotel )
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/'.$hotel->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{!! $hotel->name !!}</h5>
                    <p class="card-text">{{ $hotel->city->name }}</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>  
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection