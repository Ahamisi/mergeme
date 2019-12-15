@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card mb-3 py-2 border-bottom-{{$job->job_type_id == 1 ? 'success': ($job->job_type_id == 2 ? 'warning':'danger')}}">
              <div class="card-header"><h1 class="h3 mb-1 text-gray-800"><i class="far fa-user-circle"></i> {{$job->job_heading}}</h1></div>
              <div class="card-body">
                <p>{{$job->job_description}}</p>
                <p>Salary: <strong>{{$job->pay}}</strong>/month</p>
              </div>
              <div class="card-footer">
                <div>
                    <h5 class="btn"><i class="fas fa-map-marker-alt"></i> {{$job->job_location}}</h5>
                </div>
                <div class="float-right">
                  <a href="{{url('apply/'.$job->id.'/'.Auth::user()->id)}}" class="btn btn-primary btn-icon-split">
                      <span class="icon text-white-50">
                      <i class="fas fa-user-check"></i>                                  </span>
                      <span class="text">Apply Now</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
@endsection