<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ExerciseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $roleName = auth()->user()->role ? auth()->user()->role->rolename : 'Student';

        if ($roleName == 'Admin') {
            // The user is an admin, fetch all exercises along with the users who did them
            $exercises = Exercise::with('user')->paginate();
        } else {
            // The user is a student, fetch only their exercises
            $exercises = Exercise::where('user_id', auth()->id())->paginate();
        }

        return view('exercise.index', compact('exercises'))
            ->with('i', ($request->input('page', 1) - 1) * $exercises->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $exercise = new Exercise();
        $user = auth()->user(); // Get the currently authenticated user

        return view('exercise.create', compact('exercise', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExerciseRequest $request): RedirectResponse
    {
        Exercise::create($request->validated());

        return Redirect::route('exercises.index')
            ->with('success', 'Exercise created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $exercise = Exercise::find($id);

        return view('exercise.show', compact('exercise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $exercise = Exercise::find($id);
        $user = auth()->user(); // Get the currently authenticated user

        return view('exercise.edit', compact('exercise', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExerciseRequest $request, Exercise $exercise): RedirectResponse
    {
        $exercise->update($request->validated());

        return Redirect::route('exercises.index')
            ->with('success', 'Exercise updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Exercise::find($id)->delete();

        return Redirect::route('exercises.index')
            ->with('success', 'Exercise deleted successfully');
    }
}
