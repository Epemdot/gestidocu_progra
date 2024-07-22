<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Abogados;
use Illuminate\Http\Request;

class AbogadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Abogados::all(),200); //Aquí mostramos en pantalla todas las empresas.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //public function store(Request $request)
    {   
        //validar datos
        $datos = $request->validate([
            
        'nombre_abo' => ['required','string','max:100'],
        'id_emp' => ['required','exists:empresas,id']
    ]);

        //guardar datos
        $abogados = Abogados::create($datos);

        //respuesta al cliente en mensaje
        return response()->json([
            'succes' => true,
            'message' =>'Abogado creado exitosamente',
            'data' => $abogados,       
        ],201);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
        //public function show($id)
    {
        $abogados = abogados::find($id);

        if (!$abogados) {
            return response()->json(['message' => 'abogado no encontrado'], 404);
        }

        return response()->json($abogados, 200);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //  public function update(Request $request, $id)
    {
        // Le pido que busque el id del abogado que necesita actualizar
        $Abogados = Abogados::find($id);
            //condiciono que si no encuentra el numero especificado le muestre un mensaje informandolo
            if (!$Abogados) {
            return response()->json(['message' => 'Abogado no encontrado'], 404);
            }
            // Validamos los datos ingresados
            $datos = $request->validate([
                'nombre_abo' => ['required', 'string', 'max:100'],
            ]);
            // Actualizar datos del abogado
            $Abogados->update($datos);
            // le informamos que los datos fueron actualizados
            return response()->json([
            'success' => true,
            'message' => 'Nombre de abogado actualizado correctamente'
            ], 200);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //{
        // Le pido que busque el id de la empresa que necesita eliminar
        $Abogados = Abogados::find($id);
        if (!$Abogados) {
            return response()->json(['message' => 'Abogado no encontrado'], 404);
        }
        // Eliminar empresa
        $Abogados->delete();
        // muestrele al cliente un mensaje indicandole que se borró correctamente
        return response()->json([
        'success' => true,
        'message' => 'Abogado eliminado correctamente'
        ], 200);
    }
}
