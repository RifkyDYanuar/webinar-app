<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Team::all();
        return view('team.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teamsdata = $request->all();
        $request->validate([
            'nama_team' => 'required|string|max:255',
        ]);
       
        Team::create($teamsdata);
        return redirect()->route('team.index')->with('success', 'Team created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Team::findOrFail($id);
         $member = Member::where('team_id', $id)->get()->all();
        return view('team.detail', compact('data', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
