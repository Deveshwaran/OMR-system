<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OMR System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="{{ asset('/assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">OMR SYSTEM</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

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
                        
                        </div>
    
                      </div>
    
                    </div>
                  </div>
    
    
                  <div class="row">
                    <div class="col-lg-6">

                      <h5 class="card-title">Groom's Details</h5>

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

                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Date of Birth</div>
                            <div class="col-lg-6 col-md-8">{{$marriage->dob->format('d/m/Y')}}</div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Religion</div>
                            <div class="col-lg-6 col-md-8">{{ $marriage->religion }}</div>
                          </div> 

                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Permanent Address</div>
                            <div class="col-lg-6 col-md-8">{{$marriage->permanent_address}}</div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Present Address</div>
                            <div class="col-lg-6 col-md-8">{{ $marriage->present_address }}</div>
                          </div> 

                        </div>
                      </div>

                    </div>
      
                    <div class="col-lg-6">

                      <h5 class="card-title">Bride's Details</h5>

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

                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Date of Birth</div>
                            <div class="col-lg-6 col-md-8">{{$marriage->dob2->format('d/m/Y')}}</div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Religion</div>
                            <div class="col-lg-6 col-md-8">{{ $marriage->religion2 }}</div>
                          </div> 

                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Permanent Address</div>
                            <div class="col-lg-6 col-md-8">{{$marriage->permanent_address2}}</div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Present Address</div>
                            <div class="col-lg-6 col-md-8">{{ $marriage->present_address2 }}</div>
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

                  <h5 class="card-title">Uploaded Files</h5>

                  <div class="row">
                    <div class="col-lg-6">

                      <div class="profile">
                        <div class="profile-overview">
                      
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Mariage Registration Form</div>
                            <div class="col-lg-6 col-md-8">
                              <a href="{{ url('/storage/' . $marriage->file1) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View File">
                                <i class="bi bi-eye-fill"> View</i>
                              </a>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Marriage Approval Declaration  Number</div>
                            <div class="col-lg-6 col-md-8">
                              <a href="{{ url('/storage/' . $marriage->file2) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View File">
                                <i class="bi bi-eye-fill"> View</i>
                              </a>
                            </div>
                          </div> 

                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Application Copy Number</div>
                            <div class="col-lg-6 col-md-8">
                              <a href="{{ url('/storage/' . $marriage->file3) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View File">
                                <i class="bi bi-eye-fill"> View</i>
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>
      
                    <div class="col-lg-6">

                      <div class="profile">
                        <div class="profile-overview">
                      
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Copy of Identity Card (Applicant & Partner)</div>
                            <div class="col-lg-6 col-md-8">
                              <a href="{{ url('/storage/' . $marriage->file4) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View File">
                                <i class="bi bi-eye-fill"> View</i>
                              </a>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Residency Declaration Letter</div>
                            <div class="col-lg-6 col-md-8">
                              <a href="{{ url('/storage/' . $marriage->file5) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View File">
                                <i class="bi bi-eye-fill"> View</i>
                              </a>
                            </div>
                          </div> 

                          <div class="row">
                            <div class="col-lg-6 col-md-4 label ">Payment Proof</div>
                            <div class="col-lg-6 col-md-8">
                              <a href="{{ url('/storage/' . $marriage->file6) }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View File">
                                <i class="bi bi-eye-fill"> View</i>
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>

                  </div>

                  <button class="btn btn-primary float-end" onclick="window.print()"><i class="bi bi-printer-fill"></i> Print</button>

                @endif
    
            </div>
          </div>
    
        </div>
    
      </div>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets/js/main.js') }}"></script>

  @stack('scripts')
</body>

</html>