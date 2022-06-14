<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
class AdoptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Pet::where('id_propietario',Auth::user()->id)->get();
        return view('for_adoption.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('for_adoption.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdoptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatarName = null;
        if ($request->has('foto')) {
            $avatar = $request->file('foto');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/mascotas');
            $avatar->move($avatarPath, $avatarName);
        }
        $dar_adopcion = new Pet($request->all());
        $dar_adopcion->foto = $avatarName;
        $dar_adopcion->save();
        return redirect()->route('dar_adopcion.index')->with('sucess', 'Nueva adopcion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Pet::findOrFail($id);
        return view('for_adoption.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('posts.edit',compact('post'));
        $mascota = Pet::findOrFail($id);
        $adopcion = new Adoption;
        $adopcion->id_new_propietario = Auth::user()->id;
        $adopcion->id_mascota = $mascota->id;
        $adopcion->status = 1;
        $adopcion->save();

        $mascota->status = 1;
        $mascota->save();
        return redirect()->route('home')->with('sucess', 'Adopcion realizada');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdoptionRequest  $request
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdoptionRequest $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota = Pet::findOrFail($id);
        $image_path = public_path("images/mascotas/".$mascota->foto);
        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $mascota->delete();
        return redirect()->route('dar_adopcion.index')->with('success','Se dio de baja a la mascota');
    }
}
