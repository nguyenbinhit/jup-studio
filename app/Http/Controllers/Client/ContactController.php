<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\Contact\StoreRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
  /**
     * Display a listing of the resource.
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View {

        $sort = $request->input('sort', $this->sort);
        $limit = $request->input('limit', $this->count);
        $sortBy = $request->input('sortBy', $this->sortBy);
        $search = $request->input('s');
        $contacts = Contact::orderBy($sortBy, $sort)->paginate($limit)->withQueryString();

        return view('admins.body.extras-contact', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @return View
     */
    public function store(StoreRequest $request): View {
        logger($request);
        $data = $request->safe()->all();
        $contact = Contact::create($data);
        die;
        // return response()
    }
}
