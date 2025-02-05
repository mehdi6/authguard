<?php

namespace App\Http\Controllers\StandardUser;

use App\Models\Authenticator;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class StandardAuthenticatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $authenticators = Authenticator::latest()
            ->when($request->has('search'), fn($query) => $query->where('name', 'like', "%{$request->search}%"))
            ->where('user_id', auth()->id())
            ->paginate(10)
            ->withQueryString();
        return Inertia::render('StandardUser/Authenticators/Index', [
            'authenticators' => $authenticators
        ]);
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
    public function show(Authenticator $authenticator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Authenticator $authenticator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Authenticator $authenticator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Authenticator $authenticator)
    {
        //
    }
}
