<?php

namespace App\Http\Controllers\Form;

use App\Models\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\Form\StoreRequest;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['forms' => Form::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data['thief_photo'] = $data['thief_photo']->store('public/image');

        Form::create($data);

        return redirect()->route('form.index');
    }
}
