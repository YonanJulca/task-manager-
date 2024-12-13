<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Retrieve and return all tasks
    public function index()
    {
        // Fetch all tasks from the database and return them
        return Task::all();
    }

    // Store a new task in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255', // The task title is required and must be a string up to 255 characters
            'description' => 'nullable|string',   // The task description is optional but must be a string if provided
            'completed' => 'boolean',             // The 'completed' field should be a boolean
        ]);

        // Create a new task with the validated data
        $task = Task::create($validatedData);

        // Return the created task with a 201 status (Created)
        return response()->json($task, 201);
    }

    // Show details of a specific task
    public function show(Task $task)
    {
        // Return the task data as JSON
        return response()->json($task);
    }

    // Update an existing task in the database
    public function update(Request $request, Task $task)
    {
        // Validate the updated request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255', // The task title is required and must be a string up to 255 characters
            'description' => 'nullable|string',   // The task description is optional but must be a string if provided
            'completed' => 'boolean',             // The 'completed' field should be a boolean
        ]);

        // Update the task with the validated data
        $task->update($validatedData);

        // Return the updated task with a 200 status (OK)
        return response()->json($task, 200);
    }

    // Delete a task from the database
    public function destroy(Task $task)
    {
        // Delete the task
        $task->delete();

        // Return a 204 status (No Content) indicating the task was deleted successfully
        return response()->json(null, 204);
    }
}
