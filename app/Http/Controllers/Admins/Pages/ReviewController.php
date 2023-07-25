<?php

namespace App\Http\Controllers\Admins\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admins\Page\ReviewStoreRequest;
use App\Http\Requests\Admins\Page\ReviewUpdateRequest;
use App\Models\Image;
use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $limit = $request->input('limit', 5);
        $sortBy = $request->input('sortBy', $this->sortBy);
        // $search = $request->input('s'); // TODO: Add search and filter

        $reviews = Review::orderBy($sortBy, $sort)->paginate($limit)->withQueryString();

        return view('admins.body.page.review', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admins.body.page.review-store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ReviewStoreRequest $request
     * @return redirect
     */
    public function store(ReviewStoreRequest $request)
    {
        $data = $request->safe()->all();

        if (isset($data['file'])) {
            if ($data['file']) {
                $file = $data['file'];

                $path = Storage::putFileAs('public/uploads', $data['file'], $file->hashName());

                $image = Image::create([
                    'name' => $file->hashName(),
                    'alt' => $file->getClientOriginalName(),
                    'url' => $path,
                    'size' => $file->getSize(),
                ]);

                $data['image_id'] = $image->id;
            }

            unset($data['file']);
        }

        $review = Review::create($data);

        return redirect()->route('admin.pages.review.show', ['review' => $review->uuid])->with('success', 'Tạo mới thành công review: #' . $review->id . 'R' . $review->stars);
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
     *
     * @param ReviewUpdateRequest $request
     * @param Review $review
     * @return redirect
     */
    public function update(ReviewUpdateRequest $request, Review $review)
    {
        $data = $request->safe()->all();

        if (isset($data['customer_email']) && $data['customer_email'] === $review->customer_email) {
            unset($data['customer_email']);
        }

        if (isset($data['file'])) {
            if ($data['file']) {
                $file = $data['file'];

                $path = Storage::putFileAs('public/uploads', $data['file'], $file->hashName());

                $image = Image::create([
                    'name' => $file->hashName(),
                    'alt' => $file->getClientOriginalName(),
                    'url' => $path,
                    'size' => $file->getSize(),
                ]);

                $data['image_id'] = $image->id;
            }

            unset($data['file']);
        }

        $review->update($data);

        return redirect()->route('admin.pages.review.show', ['review' => $review->uuid])->with('success', 'Cập nhật thành công review: #' . $review->id . 'R' . $review->stars);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        session(['success' => 'Xoá thành công review.']);
    }
}
