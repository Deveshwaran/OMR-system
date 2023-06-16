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

            @if(empty($marriage))

              <h5 class="card-title">Data does not exist</h5>
            
            @else
        
              <h5 class="card-title">Marriage Details</h5>

              <div class="profile">
                <div class="profile-overview">

                  <div class="row">
                    <div class="col-lg-6">

                      <div class="row">
                        <div class="col-lg-6 col-md-4 label ">Date of Application</div>
                        <div class="col-lg-6 col-md-8">{{ $marriage->created_at->format('F d, Y - h:i A') }}</div>
                      </div>
              
                      <div class="row">
                        <div class="col-lg-6 col-md-4 label ">Date of Registration</div>
                        <div class="col-lg-6 col-md-8">{{ $marriage->marriage_date->format('F d, Y') }}</div>
                      </div>
                    
                    </div>

                    <div class="col-lg-6">

                      <div class="row">
                        <div class="col-lg-6 col-md-4 label ">Status</div>
                        <div class="col-lg-6 col-md-8">{{ $marriage->status }}</div>
                      </div>

                      @if($marriage->status=='Confirmed')

                        <div class="row">
                          <div class="col-lg-6 col-md-4 label ">E-Certificate</div>
                          <div class="col-lg-6 col-md-8">
                            <a href="{{ route('showCertPage', $marriage->id) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View E-Certificate">
                              <i class="bi bi-eye-fill">
                                View
                              </i>
                            </a>
                          </div>
                        </div>

                      @endif
                    
                    </div>

                  </div>

                </div>
              </div>


            <div class="row">
              <div class="col-lg-6">
              <h5 class="card-title">Applicant details</h5>
              <div class="profile">
                <div class="profile-overview">
               
                  <div class="row">
                    <div class="col-lg-6 col-md-4 label ">IC No</div>
                    <div class="col-lg-6 col-md-8">{{$marriage->nric}}</div>
                  </div>
                  
                    <div class="row">
                      <div class="col-lg-6 col-md-4 label ">Name</div>
                      <div class="col-lg-6 col-md-8">{{ $marriage->first_name . " ". $marriage->last_name }}</div>
                    </div> 
                </div>

              </div>
              </div>

              <div class="col-lg-6">
                <h5 class="card-title">Partner details</h5>
                <div class="profile">
                  <div class="profile-overview">
                 
                    <div class="row">
                      <div class="col-lg-6 col-md-4 label ">IC No</div>
                      <div class="col-lg-6 col-md-8">{{$marriage->nric2}}</div>
                    </div>
                    
                      <div class="row">
                        <div class="col-lg-6 col-md-4 label ">Name</div>
                        <div class="col-lg-6 col-md-8">{{ $marriage->first_name2 . " ". $marriage->last_name2 }}</div>
                      </div> 
                  </div>
  
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <h5 class="card-title">Wali details 1</h5>
                  <div class="profile">
                    <div class="profile-overview">
                   
                      <div class="row">
                        <div class="col-lg-6 col-md-4 label ">Name </div>
                        <div class="col-lg-6 col-md-8">{{$marriage->name}}</div>
                      </div>
                      
                        <div class="row">
                          <div class="col-lg-6 col-md-4 label ">Address</div>
                          <div class="col-lg-6 col-md-8">{{ $marriage->address }}</div>
                        </div> 
                    </div>
    
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <h5 class="card-title">Wali details 2</h5>
                    <div class="profile">
                      <div class="profile-overview">
                     
                        <div class="row">
                          <div class="col-lg-6 col-md-4 label ">Name </div>
                          <div class="col-lg-6 col-md-8">{{$marriage->name2}}</div>
                        </div>
                        
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Address</div>
                            <div class="col-lg-6 col-md-8">{{ $marriage->address2 }}</div>
                          </div> 
                      </div>
      
                    </div>
                    </div>
            </div>
            
            @endif

        </div>
      </div>

      @if(!empty($marriage))

      <div class="card">
        <div class="card-body">

          @if($marriage->file1!=NULL)

            <h5 class="card-title">Documents Uploaded</h5>

          @else

          <h5 class="card-title">Upload Documents</h5>
          <form method="POST" action="{{ route('uploadFiles', $marriage->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="try" value="lol">
              <div class="col-md-12 mt-3">
                <label for="file1" class="form-label">Mariage Registration Form (CLICK HERE)</label>
                <input id="file1" type="file" class="form-control @error('file1') is-invalid @enderror" name="file1" required autofocus>
                @error('file1')
                    <strong>{{ $message }}</strong>
                @enderror
              </div>

              <div class="col-md-12 mt-3">
                <label for="file2" class="form-label">Marriage Approval Declaration  Number (Authorized Marriage)</label>
                <input id="file2" type="file" class="form-control @error('file2') is-invalid @enderror" name="file2" required autofocus>
                @error('file2')
                    <strong>{{ $message }}</strong>
                @enderror
              </div>

              <div class="col-md-12 mt-3">
                <label for="file3" class="form-label">Application Copy Number (Voluntary Marriage)</label>
                <input id="file3" type="file" class="form-control @error('file3') is-invalid @enderror" name="file3" required autofocus>
                @error('file3')
                    <strong>{{ $message }}</strong>
                @enderror
              </div>

              <div class="col-md-12 mt-3">
                <label for="file4" class="form-label">Copy of Identity Card (Applicant & Partner)</label>
                <input id="file4" type="file" class="form-control @error('file4') is-invalid @enderror" name="file4" required autofocus>
                @error('file4')
                    <strong>{{ $message }}</strong>
                @enderror
              </div>

              <div class="col-md-12 mt-3">
                <label for="file5" class="form-label">Residency Declaration Letter</label>
                <input id="file5" type="file" class="form-control @error('file5') is-invalid @enderror" name="file5" required autofocus>
                @error('file5')
                    <strong>{{ $message }}</strong>
                @enderror
              </div>

              <div class="col-md-12 mt-3">
                <label for="file6" class="form-label">Payment Proof</label>
                <input id="file6" type="file" class="form-control @error('file6') is-invalid @enderror" name="file6" required autofocus>
                @error('file6')
                    <strong>{{ $message }}</strong>
                @enderror
              </div>


              <div class="float-end">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </div>
            </form>

          @endif
          
          
        
        </div>
      </div>

      @endif

    </div>

  </div>
</section>

@endsection

@push('scripts')
  <script>document.getElementById("register").classList.remove("collapsed");</script>
@endpush