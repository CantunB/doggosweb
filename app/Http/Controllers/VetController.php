<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVetRequest;
use App\Http\Requests\UpdateVetRequest;
use App\Models\Vet;
use Illuminate\Http\Request;
use File;
class VetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veterinarios = Vet::all();
        return view('vet.index', compact('veterinarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veterinario = new Vet($request->all());
        $avatarName = '';
        if ($request->has('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/veterinarios');
            $avatar->move($avatarPath, $avatarName);
        }
        $veterinario->avatar = $avatarName;
        $veterinario->save();
        return redirect()->route('veterinarios.index')->with('sucess', 'Nueva veterinario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vet  $vet
     * @return \Illuminate\Http\Response
     */
    public function show(Vet $vet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vet  $vet
     * @return \Illuminate\Http\Response
     */
    public function edit(Vet $veterinario)
    {
        return view('vet.edit', compact('veterinario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVetRequest  $request
     * @param  \App\Models\Vet  $vet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veterinario = Vet::findOrFail($id);
        $avatarName = $veterinario->avatar;
        $image_foto = public_path("images/veterinarios/".$veterinario->avatar);
        if ($request->has('avatar')) {
            if(file_exists($image_foto)){
                File::delete( $image_foto);
            }
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/veterinarios');
            $avatar->move($avatarPath, $avatarName);
        }
        $veterinario->update($request->all());
        $veterinario->avatar = $avatarName;
        $veterinario->update();
        return redirect()->route('veterinarios.index')->with('sucess', 'Veterinario actualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vet  $vet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veterinario = Vet::findOrFail($id);
        $image_foto = public_path("images/veterinarios/".$veterinario->avatar);
            if(file_exists($image_foto)){
                File::delete( $image_foto);
            }
        $veterinario->delete();
        return redirect()->route('veterinarios.index')->with('success','Se dio de baja al veterinario');
    }
}
