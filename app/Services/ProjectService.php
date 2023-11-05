<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectService {

    public function updateProjectFiles(Project $project,Request $request)
    {
            $getUploadFilePathsFromRequest = handleFiles(\request()->segment(2), $request->file('project_files'));
            $fileFromDatabase = jsonDecode($project->project_files);

            if (count($fileFromDatabase ?? []) > 0 || $fileFromDatabase != null) {
                $encoded_file_paths =  jsonEncode(array_merge($fileFromDatabase, $getUploadFilePathsFromRequest));
            } else {
                $encoded_file_paths = jsonEncode($getUploadFilePathsFromRequest);
            }
            return $encoded_file_paths;

    }
}
