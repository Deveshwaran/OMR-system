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
            

            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{ route('createMarriageRegistration') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <h5 class="card-title">Groom's Details</h5>

              <div class="col-lg-6">

                <div class="col-md-12">
                  <label for="first_name" class="form-label">First Name</label>
                  <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name">
                  @error('first_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="last_name" class="form-label">Last Name</label>
                  <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name">
                  @error('last_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob">
                  @error('dob')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="religion" class="form-label">Religion</label>
                  <input type="text" class="form-control @error('religion') is-invalid @enderror" id="religion" name="religion">
                  @error('religion')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

              </div>

              <div class="col-lg-6">

                <div class="col-md-12">
                  <label for="permanent_address" class="form-label">Permanent Address</label>
                  <input type="text" class="form-control @error('permanent_address') is-invalid @enderror" id="permanent_address" name="permanent_address">
                  @error('permanent_address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="present_address" class="form-label">Present Address</label>
                  <input type="text" class="form-control @error('present_address') is-invalid @enderror" id="present_address" name="present_address">
                  @error('present_address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="nric" class="form-label">NRIC</label>
                  <input type="text" class="form-control @error('nric') is-invalid @enderror" id="nric" name="nric">
                  @error('nric')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="pic" class="form-label">Upload Photo</label>
                  <input id="pic" type="file" class="form-control @error('pic') is-invalid @enderror" name="pic" autofocus>
                  @error('pic')
                      <strong>{{ $message }}</strong>
                  @enderror
                </div>

              </div>

              <h5 class="card-title">Bride's Details</h5>

              <div class="col-lg-6">

                <div class="col-md-12">
                  <label for="first_name2" class="form-label">First Name</label>
                  <input type="text" class="form-control @error('first_name2') is-invalid @enderror" id="first_name2" name="first_name2">
                  @error('first_name2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="last_name2" class="form-label">Last Name</label>
                  <input type="text" class="form-control @error('last_name2') is-invalid @enderror" id="last_name2" name="last_name2">
                  @error('last_name2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="dob2" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control @error('dob2') is-invalid @enderror" id="dob2" name="dob2">
                  @error('dob2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="religion2" class="form-label">Religion</label>
                  <input type="text" class="form-control @error('religion2') is-invalid @enderror" id="religion2" name="religion2">
                  @error('religion2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

              </div>

              <div class="col-lg-6">

                <div class="col-md-12">
                  <label for="permanent_address2" class="form-label">Permanent Address</label>
                  <input type="text" class="form-control @error('permanent_address2') is-invalid @enderror" id="permanent_address2" name="permanent_address2">
                  @error('permanent_address2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="present_address2" class="form-label">Present Address</label>
                  <input type="text" class="form-control @error('present_address2') is-invalid @enderror" id="present_address2" name="present_address2">
                  @error('present_address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="nric2" class="form-label">NRIC</label>
                  <input type="text" class="form-control @error('nric2') is-invalid @enderror" id="nric2" name="nric2">
                  @error('nric2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12 mt-3">
                  <label for="pic2" class="form-label">Upload Photo</label>
                  <input id="pic2" type="file" class="form-control @error('pic2') is-invalid @enderror" name="pic2" autofocus>
                  @error('pic2')
                      <strong>{{ $message }}</strong>
                  @enderror
                </div>

              </div>

              <h5 class="card-title">Witnesses Details</h5>

              <div class="col-lg-6">

                <div class="col-md-12">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12">
                  <label for="name2" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name2') is-invalid @enderror" id="name2" name="name2">
                  @error('name2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

              </div>

              <div class="col-lg-6">

                <div class="col-md-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                  @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-md-12">
                  <label for="address2" class="form-label">Address</label>
                  <input type="text" class="form-control @error('address2') is-invalid @enderror" id="address2" name="address2">
                  @error('address2')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

              </div>

              <h5 class="card-title">Marriage Details</h5>

              <div class="col-md-6 mt-3">
                <label for="marriage_date" class="form-label">Marriage Date</label>
                <input type="date" class="form-control @error('marriage_date') is-invalid @enderror" id="marriage_date" name="marriage_date">
                @error('marriage_date')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>

            </form><!-- End Multi Columns Form -->

          </div>
        </div>

    </div>

  </div>
</section>

@endsection

@push('scripts')
  <script>document.getElementById("apply").classList.remove("collapsed");</script>
@endpush