<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends BaseController
{
    /**
     * Display the specified resource.
     */
    public function show(Page $page): View
    {
        return view('admins.body.page.service', ['service' => $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
