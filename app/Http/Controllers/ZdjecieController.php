<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zdjecie;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ZdjecieController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['public']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);

        return view('zdjecie.index')->with('zdjecia', $user->zdjecia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zdjecie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nazwa' => 'required',
            'plik' => 'image|max:4999'
        ]);

        $nazwaPlikuZRozszerzeniem = $request->file('plik')->getClientOriginalName();
        $nazwaPliku = pathinfo($nazwaPlikuZRozszerzeniem, PATHINFO_FILENAME);
        $rozszerzenie = $request->file('plik')->getClientOriginalExtension();
        $nazwaPlikuDoZachowania = $nazwaPliku.'_'.time().'.'.$rozszerzenie;

        $path = $request->file('plik')->storeAs(
            'public/zdjecia',
            $nazwaPlikuDoZachowania
            );

        $zdjecie = new Zdjecie;
        $zdjecie->nazwa = $request->input('nazwa');
        $zdjecie->nazwaPliku = $nazwaPlikuDoZachowania;
        $zdjecie->publiczne = $request->input('publiczne') === 'publiczne';
        $zdjecie->user_id = auth()->user()->id;

        $zdjecie->save();

        return redirect('/zdjecie')->with('success', 'Zdjecie zapisane');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    public function public()
    {
        $zdjecia = Zdjecie::where('publiczne', true)->get();

        return view('zdjecie.public')->with('zdjecia', $zdjecia);
    }
}
