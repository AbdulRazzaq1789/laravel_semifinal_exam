<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $assignments = Assignment::query()->when($search, function ($query, $search) {
            $query->where('title', 'like', "%{$search}%");
        })->latest()->paginate(100);
        return view('assignments.index', compact('assignments', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::orderBy('name')->get();
        return view('assignments.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => ['required', 'string', 'max:50'],
                'course_id' => ['required', 'string', Rule::exists('courses', 'id')],
                'deadline' => ['required', 'date'],
                'total_marks' => ['required', 'integer', 'min:0', 'max:100'],
            ],
            [],
            [
                'course_id' => 'course',
            ]
        );

        Assignment::create($validated);

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        $courses = Course::orderBy('name')->get();
        return view('assignments.edit', compact('assignment', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        $validated = $request->validate(
            [
                'title' => ['required', 'string', 'max:50'],
                'course_id' => ['required', 'string', Rule::exists('courses', 'id')],
                'deadline' => ['required', 'date'],
                'total_marks' => ['required', 'integer', 'min:0', 'max:100'],
            ],
            [],
            [
                'course_id' => 'course',
            ]
        );

        $assignment->update($validated);

        return redirect()->route('assignments.index')->with('info', 'Assignment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index')->with('info', 'Assignment deleted successfully!');
    }
}
