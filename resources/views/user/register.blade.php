@extends('layouts.user')

@section('content')

<div class="pagetitle">
  <h1>Marriage Registration</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Marriage Registration</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-12">

      <div class="card">
        <div class="card-body">
        
            <h5 class="card-title">Type of Marriage</h5>

             <!-- Multi Columns Form -->
            <form class="row g-3" action="{{ route('showResultPage') }}" method="POST">
              @csrf

              <div class="col-md-6">
                <label for="nric" class="form-label">NRIC</label>
                <input type="text" class="form-control @error('nric') is-invalid @enderror" id="nric" name="nric">
                @error('nric')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="col-md-6">
                <label for="type" class="form-label">Marriage Type</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Voluntary</option>
                  <option>Authorized</option>
                </select>
              </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>

          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>

  </div>
</section>

@endsection

@push('scripts')
  <script>document.getElementById("register").classList.remove("collapsed");</script>
@endpush