<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Clientes::all(),200); //Aquí mostramos en pantalla todos los clientes.
        
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
                    
                'nombre_cli' => ['required','string','max:100'],
                'id_empr' =>['Required','exists:empresas,id'],
                'id_aboga' => ['required','exists:abogados,id'],
                'id_ayu' =>['required','exists:ayudantes,id']
            ]);
        
                //guardar datos
                $clientes = Clientes::create($datos);
        
                //respuesta al cliente en mensaje
                return response()->json([
                    'succes' => true,
                    'message' =>'Cliente creado exitosamente',
                    'data' => $clientes          
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
        $clientes = Clientes::find($id);

        if (!$clientes) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($clientes, 200);
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        {
            $clientes = Clientes::find($id);
            //condiciono que si no encuentra el numero especificado le muestre un mensaje informandolo
            if (!$clientes) {
            return response()->json(['message' => 'Clientes no encontrado'], 404);
            }
            // Validamos los datos ingresados
            $datos = $request->validate([
                'nombre_cli' => ['required','string','max:100'],
                'id_empr' =>['Required','exists:empresas,id'],
                'id_aboga' => ['required','exists:abogados,id'],
                'id_ayu' =>['required','exists:ayudantes,id']
            ]);
            // Actualizar datos del cliente
            $clientes->update($datos);
            // le informamos que los datos fueron actualizados
            return response()->json([
            'success' => true,
            'message' => 'Nombre de cliente actualizado correctamente'
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
        $clientes = Clientes::find($id);

        if (!$clientes) {
            return response()->json(['message' => 'Cliente no encontrada'], 404);
        }
        // Eliminar empresa
        $clientes->delete();
        // muestrele al cliente un mensaje indicandole que se borró correctamente
        return response()->json([
        'success' => true,
        'message' => 'Cliente eliminado correctamente'
        ], 200);
    }
}
