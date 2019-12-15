@extends('layouts.app')
@section('content')
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-1 text-gray-800">Applicants</h1>
<!-- Content Row -->
<div class="row">
    <div class="col-lg-6">
        @if(!empty($applicants))
            @foreach($applicants as $applicant)


            @foreach ($users as $user)
                @if (($user->id == $applicant->applicant_id))
                  <?php $name = $user->f_name.' '.$user->l_name; $contact= $user->email; $email = $user->contact_int; ?>
                @else
                  <?php $name = 'Apply Now'; $disabled= ''; $color = 'primary'; ?>
                @endif
            @endforeach


                <div class="card mb-4 py-6 border-left-{{$applicant->job_type_id == 1 ? 'success': ($applicant->job_type_id == 2 ? 'warning':'danger')}}">
                    <div class="card-body">
                        <h3><i class="far fa-user-circle"></i> {{$name}}</h3>
                        <div style="margin-left:0px;">
                            <h6><i class="fas fa-envelope-open"></i> <span> {{$email}}</span></h6>
                            <h6><i class="fas fa-phone"></i> {{$contact}}</h6>
                          </div>
                        <div class="row">
                            <div class="col-md-9">
                              <div style="display:flex;">
                               <a href="{{url('/jobs/'.$applicant->id)}}" class="btn btn-info btn-icon-split">
                                  <span class="icon text-white-50">
                                  <i class="fas fa-info-circle"></i>
                                  </span>
                                  <span class="text">SMS</span>
                              </a>&nbsp; &nbsp;
                             
                              <a href="{{url('/jobs/'.$applicant->id)}}" class="btn btn-warning btn-icon-split">
                                  <span class="icon text-white-50">
                                  <i class="fas fa-warning-circle"></i>
                                  </span>
                                  <span class="text">View Profile</span>
                              </a>&nbsp; &nbsp;

                                       
                              <form method="POST" action=" {{url('apply') }}">
                                {{  csrf_field() }}
                                <button type="submit"  class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-user-check"></i></span>
                                    <span class="text">
                                      Call
                                    </span>
                                </button>
                              </form>
                              </div>
                            </div>
                            <div class="col-md-3">
                              
                            </div>
                        </div>
                        
                    </div>
                </div> 
            @endforeach()
        @else
                <div class="well mb-4 py-10 border-left-primary">
                    <div class="card-body">
                    <p class="mb-4">Yoouza!! You havent posted a job or you dont have an applicant</p>
                    <img src="https://i.pinimg.com/564x/fd/78/c4/fd78c47f2a009df65b5b5a46f4437399.jpg">
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