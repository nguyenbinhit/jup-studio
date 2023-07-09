<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\Contact\StoreRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index() {
        return view('admins.body.extras-contact', ['contacts' => Contact::all()]);
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
