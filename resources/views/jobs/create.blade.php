@extends('layouts.app')
@section('content')
<style>
        .has-error{
            color: #f00 !important;
        }
        .has-error input{
            border-color: #f00 !important;
        }
        select{
            padding: 0.6rem 1rem;
            border-radius: 10rem;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-12 col-md-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Post Job</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <form method="post" action="{{ action('JobPostController@store') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('job_header') ? ' has-error' : '' }}">
                            <input name="job_header" required placeholder="enter job header" class="form-control">
                            @if ($errors->has('job_header'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_header') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input name="company_name" required placeholder="company name" class="form-control">
                        </div>
                        <div class="form-group"{{ $errors->has('job_description') ? ' has-error' : '' }}>
                            <textarea name="job_description" required id="summary-ckeditor" class="form-control">

                            </textarea>
                            @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input name="pay" required placeholder="Salary or Commission" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="job_type_id" class="form-control">
                                @foreach ($jobtypes as $type)
                                    <option value="{{$type->id}}">{{$type->job_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('job_location') ? ' has-error' : '' }}">
                            <input name="job_location" required placeholder="enter job location" class="form-control">
                                @if ($errors->has('job_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_location') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <input type="hidden" name="posted_by_id" value="{{Auth::user()->id}}">
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Submit</span>
                                </button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    
@endsection
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
{{-- <script>
    CKEDITOR.replace('summary-ckeditor');
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script> --}}
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>