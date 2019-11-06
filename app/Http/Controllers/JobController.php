<?php

namespace App\Http\Controllers;
use DB;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=DB::table('jobs')->get();
        if(count($data)>0)
        {
            return view('all_job',$data);
        }
        else
        {
            return view('all_job');
        }

        
    }

     public function job_post()
    {
        return view('new_job_post');
    }


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
        $job = new Job();
        $job->companyName=$request->input('companyName');
        $job->jobTitle=$request->input('jobTitle');
        $job->vacancy=$request->input('vacancy');
        $job->jobType=$request->input('type');
        $job->educationalRequirement=$request->input('education');
        $job->jobLocation=$request->input('location');
        $job->jobCatagory=$request->input('category');
        $job->experience=$request->input('experience');
        $job->salary=$request->input('salary');
        $job->email=$request->input('email');
        $job->description=$request->input('description');
        
        $job->save();
        echo "Job Posted Succesfully";
        return view('new_job_post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
