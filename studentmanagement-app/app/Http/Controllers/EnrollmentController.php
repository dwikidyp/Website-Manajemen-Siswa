<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrolments = Enrollment::all();
        return view('enrolments.index')->with('enrolments', $enrolments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrolments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrolments')->with('flash_message', 'Enrolment Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrolments = Enrollment::find($id);
        return view('enrolments.show')->with('enrolments', $enrolments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrolments = Enrollment::find($id);
        return view('enrolments.edit')->with('enrolments', $enrolments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrolments = Enrollment::find($id);
        $input = $request->all();
        $enrolments->update($input);
        return redirect('enrolments')->with('flash_message', 'Enrolment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrolments')->with('flash_message', 'Enrollment Deleted!');
    }
}
