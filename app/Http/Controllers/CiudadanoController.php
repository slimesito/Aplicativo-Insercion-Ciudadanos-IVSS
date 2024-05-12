<?php

namespace App\Http\Controllers;

use App\Models\Ciudadano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CiudadanoController extends Controller
{

    public function store(Request $request)
    {
        $nacionalidad = $request->input('nacionalidad');
        $cedula = $request->input('ID_CIUDADANO');
        $cedula = str_pad($cedula, 9, '0', STR_PAD_LEFT);
        $cedulaCompleta = $nacionalidad . $cedula;
        $request->merge(['ID_CIUDADANO' => $cedulaCompleta]);

        $request->validate([
            'ID_CIUDADANO' => 'required|unique:oracle.CIUDADANO',
            'PRIMER_NOMBRE' => 'required|max:255',
            'SEGUNDO_NOMBRE' => 'max:255',
            'PRIMER_APELLIDO' => 'required|max:255',
            'SEGUNDO_APELLIDO' => 'max:255',
            'SEXO' => 'required|in:M,F',
            'ID_ESTADO_CIVIL' => 'required|in:1,2,3,4,5,6',
            'FECHA_NACIMIENTO' => 'required|date',
            'FECHA_FALLECIMIENTO' => 'date|nullable',
        ]);

        $request['PRIMER_NOMBRE'] = strtoupper($request->PRIMER_NOMBRE);
        $request['SEGUNDO_NOMBRE'] = strtoupper($request->SEGUNDO_NOMBRE);
        $request['PRIMER_APELLIDO'] = strtoupper($request->PRIMER_APELLIDO);
        $request['SEGUNDO_APELLIDO'] = strtoupper($request->SEGUNDO_APELLIDO);

        Ciudadano::create($request->all());

        return redirect('/')->with('status', 'Ciudadano registrado satisfactoriamente!');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        $ciudadanos = Ciudadano::where('ID_CIUDADANO', '=', $query)->get();

        if ($ciudadanos->isEmpty()) {
            return redirect()->back()->with('message', 'No se encontraron resultados para la búsqueda.');
        }

        return view('show', compact('ciudadanos'));
    }

    public function edit($ID_CIUDADANO)
    {
        $ciudadano = Ciudadano::find($ID_CIUDADANO);
        $ciudadano->fecha_nacimiento = date('Y-m-d', strtotime($ciudadano->fecha_nacimiento));

        return view('update', compact('ciudadano'));
    }

    public function update(Request $request, $id_ciudadano)
    {
        $request->validate([
            'PRIMER_NOMBRE' => 'required|max:255',
            'SEGUNDO_NOMBRE' => 'max:255',
            'PRIMER_APELLIDO' => 'required|max:255',
            'SEGUNDO_APELLIDO' => 'max:255',
            'SEXO' => 'required|in:M,F',
            'ID_ESTADO_CIVIL' => 'required|in:1,2,3,4,5,6',
            'FECHA_NACIMIENTO' => 'date',
            'FECHA_FALLECIMIENTO' => 'date|nullable',
        ]);

        $ciudadano = Ciudadano::findOrFail($id_ciudadano);

        $ciudadano->update([
            'PRIMER_NOMBRE' => strtoupper($request->PRIMER_NOMBRE),
            'SEGUNDO_NOMBRE' => strtoupper($request->SEGUNDO_NOMBRE),
            'PRIMER_APELLIDO' => strtoupper($request->PRIMER_APELLIDO),
            'SEGUNDO_APELLIDO' => strtoupper($request->SEGUNDO_APELLIDO),
            'SEXO' => $request->SEXO,
            'ID_ESTADO_CIVIL' => $request->ID_ESTADO_CIVIL,
            'FECHA_NACIMIENTO' => $request->FECHA_NACIMIENTO,
            'FECHA_FALLECIMIENTO' => $request->FECHA_FALLECIMIENTO,
        ]);

        $ciudadano->update($request->all());
        $pdo = DB::connection('oracle')->getPdo();
        $pdo->commit();

        return redirect('/')->with('status', 'Datos del ciudadano actualizados correctamente!');
    }
    
}
