<?php

namespace App\Http\Controllers;

use App\Models\Completed;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CompletedRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CompletedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $completeds = Completed::paginate();

        return view('completed.index', compact('completeds'))
            ->with('i', ($request->input('page', 1) - 1) * $completeds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $completed = new Completed();

        return view('completed.create', compact('completed'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompletedRequest $request): RedirectResponse
    {
        Completed::create($request->validated());

        return Redirect::route('completeds.index')
            ->with('success', 'Completed created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $completed = Completed::find($id);

        return view('completed.show', compact('completed'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $completed = Completed::find($id);

        return view('completed.edit', compact('completed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompletedRequest $request, Completed $completed): RedirectResponse
    {
        $completed->update($request->validated());

        return Redirect::route('completeds.index')
            ->with('success', 'Completed updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Completed::find($id)->delete();

        return Redirect::route('completeds.index')
            ->with('success', 'Completed deleted successfully');
    }
}
