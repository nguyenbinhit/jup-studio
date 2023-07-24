<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ReviewController extends BaseController
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
        // $search = $request->input('s'); // TODO: Add search and filter

        $reviews = Review::orderBy($sortBy, $sort)->paginate($limit)->withQueryString();

        return view('admins.body.page.review', compact('reviews'));
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
    public function show(Review $review): View
    {
        return view('admins.body.page.review-show', ['review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
