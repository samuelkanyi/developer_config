<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;

class TutorialController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tutorials = Tutorial::all();
        return view('tutorial.index')->with('tutorials', $tutorials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('tutorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //validate the form
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('cover_image')) {
            $fileToStore = $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->storeAs('public', $fileToStore);
        } else {
            $fileToStore = 'noimage.jpg';
        }

        $tutorial = new Tutorial;
        $tutorial->title = $request->input('title');
        $tutorial->body = $request->input('body');
        $tutorial->user_id = auth()->user()->id;
        $tutorial->cover_image = $fileToStore;
        $tutorial->save();
        return redirect('tutorial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $tutorial = Tutorial::find($id);
        return view('tutorial.show')->with('tutorial', $tutorial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $tutorial = Tutorial::find($id);
        return view('tutorial.edit')->with('tutorial', $tutorial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $tutorial = Tutorial::find($id);
        
        $tutorial->title = $request->input('title');
        $tutorial->body = $request->input('body');
        $tutorial->user_id = auth()->user()->id;
        $tutorial->save();
        return redirect('tutorial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();
        return redirect('home');
    }

}
