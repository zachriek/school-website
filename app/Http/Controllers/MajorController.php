<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function show(Major $major)
    {
        return view('pages.base.majors.show', [
            'major' => $major
        ]);
    }
}
