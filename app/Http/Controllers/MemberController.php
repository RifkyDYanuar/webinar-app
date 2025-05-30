<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
     * Simpan member.
     */
    public function simpan(Request $request,  $id)
    {
        $request->validate([
            'nama_member' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
        ]);

        // Buat member baru
        $member = new Member();
        $member->team_id = $id; // Asosiasikan dengan team_id
        $member->nama_member = $request->nama_member;
        $member->telepon = $request->telepon;
        $member->save();

        return back()->with('success', 'Member added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
