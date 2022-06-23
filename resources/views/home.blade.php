@extends('layouts.main')

@section('container')
<section id="hero">
    <div class="container col-xxl-12 py-3">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6">
            <img src="{{  asset('img/banner.png') }}" class="d-block mx-auto img-fluid" alt="Bootstrap Themes" width="560" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="title-hero fw-bold mb-3">Lupakan tugasmu, <br> Temukan liburanmu!</h1>
            <p class="subtitle-hero">We provide what you need to enjoy your <br>
                holiday with family. Time to make another <br>
                memorable moments.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <div class="input-group input-hero" style="display: block;">
                    <form action="/city">
                    <select class="form-select" id="inputGroupSelect04" name="search">
                        <option disabled >Choose your location</option>
                        @foreach ($cities as $city)
                      <option value="{{ $city->id }}">{{ $city->name }}</option>
                      @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2 btn-hero">Find Now</button>
                {{-- <a href="/city/surakarta">cek</a> --}}
            </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection