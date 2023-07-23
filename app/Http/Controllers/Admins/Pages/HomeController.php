<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\Page\HomeUpdateRequest;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admins.body.page.home', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param HomeUpdateRequest $request
     * @param Page $page
     * @return void
     */
    public function update(HomeUpdateRequest $request, Page $page): View
    {
        $data = $request->safe()->all();
        $page->update(['metadata' => $data['metadata']]);

        return view('admins.body.page.home', ['page' => $page]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
