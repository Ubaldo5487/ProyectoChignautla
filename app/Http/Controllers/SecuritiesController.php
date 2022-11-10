<?php

namespace App\Http\Controllers;

use App\Http\Requests\SecuritiesRequest;
use App\Models\Security;
use App\Exports\SecurityExport;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SecuritiesController extends Controller
{
    public function index()
    {
        $securities = Security::all();
        return view('seguridad.index', compact('securities'));
    }

    public function create()
    {
        return view('seguridad.create');
    }

    public function store(SecuritiesRequest $request)
    {
        $security = new Security();
        $security->name = $request->except('_token');
        $security->name = $request->name;
        $security->fatherlastname = $request->fatherlastname;
        $security->motherlastname = $request->motherlastname;
        $security->phonenumber = $request->phonenumber;
        $security->age = $request->age;
        $security->colony = $request->colony;
        $security->street1 = $request->street1;
        $security->street2 = $request->street2;
        $security->area = $request->area;
        $security->problem = $request->problem;
        $security->description = $request->description;


        $existencianombre = DB::table('securities')->where('name', $security->name)->exists();
        $existenciaapellidopa = DB::table('securities')->where('fatherlastname', $security->fatherlastname)->exists();
        $existenciaapellidoma = DB::table('securities')->where('motherlastname', $security->motherlastname)->exists();
        $existenciaarea = DB::table('securities')->where('area', $security->area)->exists();
        $existenciaproblem = DB::table('securities')->where('problem', $security->problem)->exists();

        if ($existencianombre && $existenciaapellidopa && $existenciaapellidoma && $existenciaarea && $existenciaproblem) {
            return redirect()->route('seguridad.create')
            ->with('danger', 'El Registro Ya Existe');
           
        } else{
            $security->save();
            return redirect()->route('seguridad.create')
            ->with('message', 'Se ha guardado correctamente.');
        }
        
    }

    public function show(Security $security)
    {
        return view('seguridad.show', compact('security'));
    }

    public function edit(Security $security)
    {
        return view('seguridad.edit', compact('security'));
    }

    public function update(SecuritiesRequest $request, Security $security)
    {
        $security->name = $request->except('_token');
        $security->name = $request->name;
        $security->fatherlastname = $request->fatherlastname;
        $security->motherlastname = $request->motherlastname;
        $security->phonenumber = $request->phonenumber;
        $security->age = $request->age;
        $security->colony = $request->colony;
        $security->street1 = $request->street1;
        $security->street2 = $request->street2;
        $security->area = $request->area;
        $security->problem = $request->problem;
        $security->status = $request->status;
        $security->description = $request->description;

        $security->save();

        return redirect()->route('seguridad.show', $security)
        ->with('message', 'Se ha actualizado correctamente.');
    }

    public function destroy(Security $security)
    {
        $security->delete();
        return redirect()->route('seguridad.index')
        ->with('danger', 'Se ha eliminado el registro.');
    }

    public function exportToXlsx(){
        return Excel::download(new SecurityExport, 'Datos.xlsx');
    }
    
   
}
