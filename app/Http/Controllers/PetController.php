<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use File;
class PetController extends Controller
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
            $mascotas = Pet::where('status', '!=' , '1')->get();
        return view('pet.index',compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dar_adopcion = new Pet($request->all());
        $avatarName = null;
        if ($request->has('foto')) {
            $avatar = $request->file('foto');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/mascotas');
            $avatar->move($avatarPath, $avatarName);
        }
        $dar_adopcion->foto = $avatarName;
        $dar_adopcion->save();
        return redirect()->route('dar_adopcion.index')->with('sucess', 'Nueva adopcion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Pet::findOrFail($id);
        return view('pet.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $mascota)
    {
        return view('pet.edit',compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetRequest  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mascota = Pet::findOrFail($id);
        $avatarName = $mascota->foto;
        $image_foto = public_path("images/mascotas/".$mascota->foto);
        if ($request->has('foto')) {
            if(file_exists($image_foto)){
                File::delete( $image_foto);
            }
            $avatar = $request->file('foto');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/mascotas');
            $avatar->move($avatarPath, $avatarName);
        }
        $mascota->update($request->all());
        $mascota->foto = $avatarName;
        $mascota->update();
        return redirect()->route('dar_adopcion.index')->with('sucess', 'Mascota actualizada');

        // $news->delete();
        // return redirect('admin/dashboard')->with('message','خبر موفقانه حذف  شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
