<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
class ProfilesController extends Controller
{
     public function getProfilesById($studentId)
    {
        $profiles = students::find($studentId);
        return view('profile', ['profile' => $profiles]);
    }
}
