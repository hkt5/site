<?php

namespace App\Http\Controllers;

use App\CandidateSubmission;
use App\Http\Requests\CandidateSubmissionRequest;
use App\Repositories\SaveCandidateSubmissionRepository;
use Illuminate\Http\Request;

class CandidateSubmissionController extends Controller
{

    public function create(CandidateSubmissionRequest $request)
    {

        $saveCandidateSubmissionRepository = new SaveCandidateSubmissionRepository();
        $data = $saveCandidateSubmissionRepository->storeCandidateSubmission($request);
        return back()->with('data', $data);
    }
}
