<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\JobPost;
use App\JobApplicant;
use Redirect;
use Auth;

class jobApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applicants = DB::table('job_applicants')
            ->join('job_posts', 'posted_by_id', '=', 'job_owner')
            ->where('posted_by_id','=',Auth::user()->id)->get();
        // $applicants = JobPost::where('posted_by_id','=',Auth::user()->id)->get();
        $users = User::all();
        return view('jobs.applicants',array('applicants' => $applicants, 'users' => $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        JobApplicant::create(
            array(
                'job_id' => $request->input('job_id'),
                'applicant_id' => $request->input('applicant_id'),
                'posted_by_id' => $request->input('posted_by_id'),

            )
            );

            return Redirect::to('/jobs');

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
