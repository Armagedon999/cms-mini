<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientId = auth()->user()->client_id;
        $herosections = \App\Models\HeroSection::where('client_id', $clientId)->get();
        return view('herosection.index', compact('herosections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('herosection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $data['client_id'] = auth()->user()->client_id;
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/'.auth()->user()->client->slug, 'public');
        }
        $hero = \App\Models\HeroSection::create($data);
        return redirect()->route('herosections.index')->with('success', 'Hero section berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\HeroSection $herosection)
    {
        $this->authorizeClient($herosection);
        return view('herosection.show', compact('herosection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\HeroSection $herosection)
    {
        $this->authorizeClient($herosection);
        return view('herosection.edit', compact('herosection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\HeroSection $herosection)
    {
        $this->authorizeClient($herosection);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/'.auth()->user()->client->slug, 'public');
        }
        $herosection->update($data);
        return redirect()->route('herosections.index')->with('success', 'Hero section berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\HeroSection $herosection)
    {
        $this->authorizeClient($herosection);
        $herosection->delete();
        return redirect()->route('herosections.index')->with('success', 'Hero section berhasil dihapus.');
    }

    private function authorizeClient($herosection)
    {
        if ($herosection->client_id !== auth()->user()->client_id) {
            abort(403, 'Unauthorized');
        }
    }
}
