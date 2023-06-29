<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class FileManagerController extends BaseController
{
    public function index() {
        return view('admins.body.apps-filemanager',
        ['images'=> Image::all()]);
    }
}
