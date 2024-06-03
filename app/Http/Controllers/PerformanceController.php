<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PerformanceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $performances = Performance::paginate();

        return view('performance.index', compact('performances'))
            ->with('i', ($request->input('page', 1) - 1) * $performances->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $performance = new Performance();

        return view('performance.create', compact('performance'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PerformanceRequest $request): RedirectResponse
    {
        Performance::create($request->validated());

        return Redirect::route('performances.index')
            ->with('success', 'Performance created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $performance = Performance::find($id);

        return view('performance.show', compact('performance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $performance = Performance::find($id);

        return view('performance.edit', compact('performance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerformanceRequest $request, Performance $performance): RedirectResponse
    {
        $performance->update($request->validated());

        return Redirect::route('performances.index')
            ->with('success', 'Performance updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Performance::find($id)->delete();

        return Redirect::route('performances.index')
            ->with('success', 'Performance deleted successfully');
    }
}
