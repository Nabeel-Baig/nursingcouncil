<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;


function getLeadsAssignedViaRoleId($id)
{
    $users = User::whereHas('roles', function ($q) use ($id) {
        $q->where('id', $id)->whereNotNull('lead_assigned_id');
    })->get();
    return $users;
}
// ===========================

function getusersExceptTheRole($ids)
{
    $users = User::with('roles')->whereHas('roles', function ($q) use ($ids) {
        $q->whereNotIn('id', $ids);
    })->get();
    return $users;
}

// ===========================
function getUsersViaRoleId($id){
    $users = User::whereHas('roles', function ($q) use ($id){
        $q->where('id', $id);
    })->get();
    return $users;
}


if (!function_exists('handleFiles')) {
    function handleFiles(string $cmsPage, array $inputData): array
    {
        foreach ($inputData as $index => $inputDatum) {
            if (is_array($inputDatum)) {
                $inputData[$index] = handleFiles($cmsPage, $inputDatum);
            }
            if ($inputDatum instanceof UploadedFile) {
                $fileName = '/assets/uploads/' . $cmsPage . '/' . $inputDatum->hashName();
                $inputData[$index] = $fileName;
                $inputDatum->move(
                    public_path('assets/uploads/' . $cmsPage),
                    $fileName
                );
            }
        }
        return $inputData;
    }
}

function getUserViaHasRole($id, $roleId)
{

    $role = User::where('id', $id)->whereHas('roles', function ($q) use ($roleId) {
        $q->where('id', $roleId);
    })->first();
    return $role;
}

function jsonEncode($data)
{
    return json_encode($data);
}


function jsonDecode($data)
{
    return json_decode($data);
}



if (!function_exists('handleFilesIfPresent')) {
    function handleFilesIfPresent(string $cmsPage, array $inputData, Model $model): array
    {
        foreach ($inputData as $index => $inputDatum) {
            if (is_array($inputDatum)) {
                $inputData[$index] = handleFilesIfPresent($cmsPage, $inputDatum, $model);
            }
            if ($inputDatum instanceof UploadedFile) {
                $fileName = '/assets/uploads/' . $cmsPage . '/' . $inputDatum->hashName();
                $inputData[$index] = $fileName;
                if (File::exists(public_path($model->$index))) {
                    File::delete(public_path($model->$index));
                }
                $inputDatum->move(
                    public_path('assets/uploads/' . $cmsPage),
                    $fileName
                );
            }
        }
        return $inputData;
    }
}

if (!function_exists('getPercentage')) {
    function getPercentage(float $part = null, float $whole = null): int
    {
        return ($part / $whole) * 100;
    }
}

