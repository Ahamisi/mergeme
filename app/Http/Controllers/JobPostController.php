<?php
namespace App\Http\Controllers;

use App\JobPost;
use App\JobApplicant;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Session;
use Redirect;
use Auth;





class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jobs = JobPost::all();
        // $jobs = DB::table('job_posts')->get();
        $jobs = DB::table('job_posts')->paginate(15);
        $applied = JobApplicant::where('applicant_id','=',Auth::user()->id)->get();

        return view('jobs.index',['jobs' => $jobs,'applied' => $applied]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jobtypes = DB::table('job_types')->get();
        return view('jobs.create',['jobtypes' => $jobtypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->valiate($request, [
        //     'job_header' => 'required',
        //     'job_description' => 'required',
        //     'job_location' => 'required',
        // ]);
        $fields = array (
            'posted_by_id' => $request->input('posted_by_id'),
            'job_type_id' => $request->input('job_type_id'),
            'job_heading' => $request->input('job_header'),
            'job_location' => $request->input('job_location'),
            'job_description' => $request->input('job_description'),
            'pay' => $request->input('pay'),
            'company_id' => $request->input('company_name')
        );
        if(JobPost::create($fields)){
            Session::flash('message', 'Successfully Posted!');
            return Redirect::to('/jobs');
        }else{
            Session::flash('message', 'Unable to Post Job!');
            return Redirect::to('/jobs_post');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $job = JobPost::find($id);
        return view('jobs.show',['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
