<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Aquí mostramos en pantalla todas las empresas.
     */
    public function index()
    {
        return response()->json(Empresa::all(),200); //Aquí mostramos en pantalla todas las empresas.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //validar datos
        $datos = $request->validate([
            
        'nombre_emp' => ['required','string','max:100']
    ]);

        //guardar datos
        $empresa = Empresa::create($datos);

        //respuesta al cliente en mensaje
        return response()->json([
            'succes' => true,
            'message' =>'Empresa creada exitosamente'          
        ],201);
    }

    /**
     * Display the specified resource.
     */
   /* public function show(Empresas $empresas)
    {
        //mostrar empresa
    return response()->json($empresas,200); 

    profe no me funcionaba con esta linea, el valor que me registraba era [] sin datos
    
    }*/
            public function show($id)
    {
        $empresa = Empresa::find($id);

        if (!$empresa) {
            return response()->json(['message' => 'Empresa no encontrada'], 404);
        }

        return response()->json($empresa, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, Empresas $empresas)
    {
        //validar datos
        $datos = $request->validate(['nombre_emp' => ['required','string','max:100']]);
        //actualizar datos de la empresa
        $empresas->update($datos);

        //respuesta del cliente
        return response()->json([
            'succes' => true,
            'message' =>'Empresa actualizada correctamente' 
        ],200);
    }
    */
    public function update(Request $request, $id)
    {
        // Le pido que busque el id de la empresa que necesita actualizar
        $empresa = Empresa::find($id);
            //condiciono que si no encuentra el numero especificado le muestre un mensaje informandolo
            if (!$empresa) {
            return response()->json(['message' => 'Empresa no encontrada'], 404);
            }
            // Validamos los datos ingresados
            $datos = $request->validate([
                'nombre_emp' => ['required', 'string', 'max:100']
            ]);
            // Actualizar datos de la empresa
            $empresa->update($datos);
            // le informamos que los datos fueron actualizados
            return response()->json([
            'success' => true,
            'message' => 'Empresa actualizada correctamente'
            ], 200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Le pido que busque el id de la empresa que necesita eliminar
        $empresa = Empresa::find($id);
            if (!$empresa) {
                return response()->json(['message' => 'Empresa no encontrada'], 404);
            }
            // Eliminar empresa
            $empresa->delete();
            // muestrele al cliente un mensaje indicandole que se borró correctamente
            return response()->json([
            'success' => true,
            'message' => 'Empresa eliminada correctamente'
            ], 200);
    }
}