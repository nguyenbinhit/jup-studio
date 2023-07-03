<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\BaseController;
use App\Models\Image;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FileManagerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');

        $images = Image::orderBy($sortBy, $sort)->paginate($limit)->withQueryString();

        return view('admins.body.apps-filemanager', compact('images'));
    }
}
