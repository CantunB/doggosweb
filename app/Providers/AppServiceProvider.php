<?php

namespace App\Providers;

use App\Models\Adoption;
use App\Models\Pet;
use App\Models\User;
use App\Models\Vet;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.app','home'], function($view){
            // $units = Pet::where('id_propietario',Auth::user()->id);
            $mascotas = '';
            $veterinarios = '';
            $usuarios = '';
            $adopciones = '';
            if (Auth::check()) {
                if(Auth::user()->can('mascotas')){
                    $mascotas = Pet::all();
                    $adopciones = Adoption::all();
                }else{
                    $mascotas = Pet::where('id_propietario', Auth::user()->id)->get();
                    $adopciones = Adoption::where('id_new_propietario', Auth::user()->id)->get();
                }
                if(Auth::user()->can('veterinarios')){
                    $veterinarios = Vet::all();
                }
                if(Auth::user()->can('usuarios')){
                    $usuarios = User::all();
                }
            }

            // $sales = Assign
            $view->with([
                'mascotas' => $mascotas,
                'veterinarios' => $veterinarios,
                'usuarios' => $usuarios,
                'adopciones' => $adopciones,
            ]);
        });
    }
}
