<?php

namespace App\Http\Controllers;

use App\Models\SymptomLog;
use Illuminate\Http\Request;

class SymptomLogController extends Controller
{
    public function create()
{
    return view('logs.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'date' => 'required|date',

        'emotional_lability' => 'required|integer|min:1|max:5',
        'irritability' => 'required|integer|min:1|max:5',
        'focus' => 'required|integer|min:1|max:5',
        'distractability' => 'required|integer|min:1|max:5',
        'impulsivity' => 'required|integer|min:1|max:5',
        'energy' => 'required|integer|min:1|max:5',
        'task_initiation' => 'required|integer|min:1|max:5',
        'physical_anxiety' => 'required|integer|min:1|max:5',
        'mood' => 'required|integer|min:1|max:5',
    ]);

    $validated['user_id'] = auth()->id();

    SymptomLog::create($validated);

    return redirect()->route('logs.index');
}
}
