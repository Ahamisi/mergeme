@extends('layouts.app')
@section('content')
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-1 text-gray-800">Latest Jobs</h1>
<!-- Content Row -->
<div class="row">
    <div class="col-lg-11">
        @if(!empty($jobs))
            @foreach($jobs as $job)
                <div class="card mb-3 py-2 border-left-{{$job->job_type_id == 1 ? 'success': ($job->job_type_id == 2 ? 'warning':'danger')}}">
                    <div class="card-body">
                        <h3><i class="far fa-user-circle"></i> {{$job->job_heading}}</h3>
                        <div class="row">
                            <div class="col-md-9">
                              <p>{{ substr($job->job_description,0,160)}}....</p>
                              <div style="display:flex;">
                               <a href="{{url('/jobs/'.$job->id)}}" class="btn btn-info btn-icon-split">
                                  <span class="icon text-white-50">
                                  <i class="fas fa-info-circle"></i>
                                  </span>
                                  <span class="text">Read more</span>
                              </a>&nbsp; &nbsp;
                                       @foreach ($applied as $apply)
                                          @if (($apply->job_id == $job->id) && ($apply->applicant_id == Auth::user()->id))
                                           <?php $application = 'Applied'; $disabled= 'disabled'; $color = 'success'; ?>
                                          @else
                                           <?php $application = 'Apply Now'; $disabled= ''; $color = 'primary'; ?>
                                          @endif
                                      @endforeach
                              <form method="POST" action=" {{url('apply') }}">
                                {{  csrf_field() }}
                                <button type="submit" {{$disabled}} class="btn btn-{{$color}} btn-icon-split">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-user-check"></i></span>
                                    <span class="text">
                                      {{$application}}
                                    </span>
                                </button>
                                <input name="job_id" value="{{$job->id}}" type="hidden">
                                <input name="applicant_id" value="{{Auth::user()->id }}" type="hidden">
                                <input name="job_owner" value="{{$job->posted_by_id}}" type="hidden">


                              </form>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <h6>Salary Range: <span>&#8358; {{$job->pay}} / year</span></h6>
                            <h6><i class="fas fa-map-marker-alt"></i> {{$job->job_location}}</h6>
                            </div>
                        </div>
                        
                    </div>
                </div> 
            @endforeach()
        @else
                <div class="well mb-4 py-10 border-left-primary">
                    <div class="card-body">
                    <p class="mb-4">Yoouza!! no current openings check some other time</p>
                    <img src="https://i.pinimg.com/564x/fd/78/c4/fd78c47f2a009df65b5b5a46f4437399.jpg" alt="">
                    </div>
                </div> 
        @endif


  <!-- Border Left Utilities -->
  </div>

  <!-- Border Bottom Utilities -->
  

</div>

</div>
</div>
<!-- /.container-fluid -->
@endsection