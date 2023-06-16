@extends('layouts.staff')

@section('content')

<div class="pagetitle">
  <h1>Marriage Details</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Home</a></li>
      <li class="breadcrumb-item active">Marriage Details</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-12">

      <div class="card">
        <div class="card-body">
        
            <h5 class="card-title">Marriage Details</h5>

            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Applied Date</th>
                  <th scope="col">Applicant</th>
                  <th scope="col">IC No.</th>
                  <th scope="col">Partner</th>
                  <th scope="col">IC No.</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($marriages as $marriage)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $marriage->created_at->format('d/m/Y') }}</td>
                    <td>{{ $marriage->first_name . ' ' . $marriage->last_name }}</td>
                    <td>{{ $marriage->nric }}</td>
                    <td>{{ $marriage->first_name2 . ' ' . $marriage->last_name2 }}</td>
                    <td>{{ $marriage->nric2 }}</td>
                    <td>{{ $marriage->status }}</td>
                    <td>
                      @if($marriage->status!='Confirmed')
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#changeStatus{{$marriage->id}}">Confirm</button>

                        <div class="modal fade" id="changeStatus{{$marriage->id}}" tabindex="-1">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Are you sure?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form method="POST" action="{{ route('confirmStatus', $marriage->id) }}">
                                @csrf
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-success">Yes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div><!-- End Basic Modal-->

                      @else
                        No Action
                      @endif
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>

          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>

  </div>
</section>

@endsection

@push('scripts')
  <script>document.getElementById("details").classList.remove("collapsed");</script>
@endpush