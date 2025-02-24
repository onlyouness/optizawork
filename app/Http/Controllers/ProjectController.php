<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('projects.index',[
            'projects'=>$projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('projects.create');
    }
    public function show(Project $project){
        
        return view('projects.index',[
            'project'=>$project,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }
    
        Project::create($validated);
    
        return redirect()->route('projects.index')->with('success', 'Project added successfully!');
    }
    
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::delete('public/' . $project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }
    
        $project->update($validated);
    
        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
