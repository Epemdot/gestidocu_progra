<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Procesos;
use Illuminate\Http\Request;

class ProcesosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return response()->json(Procesos::all(),200); //Aquí mostramos en pantalla todos los los procesos del cliente.    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            {
                //public function store(Request $request)
            {   
                //validar datos
                $datos = $request->validate([
                    
                'nombre_proc' => ['required','string','max:100'],
                'descripcion' =>['Required','string','max:300'],
                'id_cli'=>['Required','exists:clientes,id'],
            ]);
        
                //guardar datos
                $procesos = Procesos::create($datos);
        
                //respuesta al cliente en mensaje
                return response()->json([
                    'succes' => true,
                    'message' =>'Proceso creado exitosamente',
                    'data' => $procesos          
                ],201);
            }
            }
        
        }
    }

    /**
     * Display the specified resource.
     */
        public function show($id)
    {
        //public function show($id)
    {
        $procesos = Procesos::find($id);

        if (!$procesos) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($procesos, 200);
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        {
            $procesos = Procesos::find($id);
            //condiciono que si no encuentra el numero especificado le muestre un mensaje informandolo
            if (!$procesos) {
            return response()->json(['message' => 'proceso no encontrado'], 404);
            }
            // Validamos los datos ingresados
            $datos = $request->validate([
                'nombre_proc' => ['required','string','max:100'],
                'descripcion' =>['Required','string','max:300'],
                'id_cli'=>['Required','exists:clientes,id'],
            ]);
            // Actualizar datos del cliente
            $procesos->update($datos);
            // le informamos que los datos fueron actualizados
            return response()->json([
            'success' => true,
            'message' => 'procesos actualizado correctamente'
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
        $procesos = Procesos::find($id);

        if (!$procesos) {
            return response()->json(['message' => 'Proceso no encontrado'], 404);
        }
        // Eliminar empresa
        $procesos->delete();
        // muestrele al cliente un mensaje indicandole que se borró correctamente
        return response()->json([
        'success' => true,
        'message' => 'Proceso eliminado correctamente'
        ], 200);
    }
}
