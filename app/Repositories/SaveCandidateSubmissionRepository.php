<?php


namespace App\Repositories;


use App\CandidateFile;
use App\CandidateSubmission;
use App\Http\Requests\CandidateSubmissionRequest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class SaveCandidateSubmissionRepository
{

    public function storeCandidateSubmission(CandidateSubmissionRequest $request) : ?array
    {

        $candidateFile = new CandidateFile();
        $candidateSubmission = new CandidateSubmission();

        DB::beginTransaction();

        try {

            /** @var File $file */
            $this->saveFile($request, $candidateFile);

            $this->saveCandidateSubmission($request, $candidateSubmission, $candidateFile);

            DB::commit();
        } catch (Exception $e) {

            Log::error($e->getMessage());
            DB::rollBack();
        } finally {

            return [
                'file' => $candidateFile,
                'submission' => $candidateSubmission,
            ];
        }
    }

    private function saveFile(CandidateSubmissionRequest $request, CandidateFile $candidateFile): void
    {

        $file = $request->get('file');
        $candidateFile->name = $file->getBasename();
        $candidateFile->file = $file;
        $candidateFile->mime = $file->getMimeType();
        $candidateFile->size = $file->getSize();
        $candidateFile->save();
    }

    private function saveCandidateSubmission(CandidateSubmissionRequest $request, CandidateSubmission $candidateSubmission, CandidateFile $candidateFile): void
    {

        $candidateSubmission->name = $request->get('name');
        $candidateSubmission->surname = $request->get('surname');
        $candidateSubmission->email = $request->get('email');
        $candidateSubmission->phone = $request->get('phone');
        $candidateSubmission->experience = $request->get('experience');
        $candidateSubmission->skill = $request->get('skill');
        $candidateSubmission->salary = $request->get('salary');
        $candidateSubmission->file = $candidateFile->id;
        $candidateSubmission->description = $request->get('description');
        $candidateSubmission->save();
    }
}
