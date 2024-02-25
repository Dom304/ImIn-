<?php

namespace App\Http\Controllers;

use App\Http\Controllers\APIController;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobsController extends APIController
{
    public function list(Request $request)
    {
        try {
            $jobs_list = Job::list();
            if ($this->json_response_check($request)) {
                return $this->return_success($request, $jobs_list);
            } else {
                return view('dashboard', $jobs_list);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }


    public function view(Request $request, $catalog_id)
    {
        try {
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }


    public function create(Request $request)
    {
        try {

            $title = $request->input('title');
            $description = $request->input('description');
            $status = $request->input('status');
            $category = $request->input('category');
            $tags = $request->input('tags');

            if (Job::create($title, $description, $status, $category, $tags)) {
                $jobId = uniqid();
                User::updateUserJobsAdded($jobId);
            } else {
                echo "Failed to add job.";
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, 'Failed to create a new catalog.', false, 500);
        }
    }

    public function edit($catalog_id)
    {
    }


    public function update(Request $request)
    {

        try {
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, 'Failed to update this catalog.', false, 500);
        }
    }

    public function delete(Request $request, $catalog_id)
    {
        try {
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, 'Failed to delete this Section.', false, 500);
        }
    }
}
