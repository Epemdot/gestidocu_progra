<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Ayudantes;
use Illuminate\Http\Request;

class AyudantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Ayudantes::all(),200); //Aquí mostramos en pantalla todos los ayudantes.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            //public function store(Request $request)
        {   
            //validar datos
            $datos = $request->validate([
                
            'nombre_ayu' => ['required','string','max:100'],
            'id_abog' => ['required','exists:abogados,id']
        ]);
    
            //guardar datos
            $ayudantes = Ayudantes::create($datos);
    
            //respuesta al cliente en mensaje
            return response()->json([
                'succes' => true,
                'message' =>'ayudante creado exitosamente',
                'data' => $ayudantes          
            ],201);
        }
        }
    
    }

    /**
     * Display the specified resource.
     */
        public function show($id)
        //public function show($id)
    {
        $ayudantes = Ayudantes::find($id);
        if (!$ayudantes) {
            return response()->json(['message' => 'Ayudante no encontrado'], 404);
        }
        return response()->json($ayudantes, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //  public function update(Request $request, $id)
        {

         
        // Le pido que busque el id del ayudante que necesita actualizar
        $ayudantes = Ayudantes::find($id);
            //condiciono que si no encuentra el numero especificado le muestre un mensaje informandolo
            if (!$ayudantes) {
            return response()->json(['message' => 'ayudante no encontrado'], 404);
            }
            // Validamos los datos ingresados
            $datos = $request->validate([
                'nombre_ayu' => ['required', 'string', 'max:100'],
                'id_abog' => ['required','exists:abogados,id']
            ]);
            // Actualizar datos del ayudante
            $ayudantes->update($datos);
            // le informamos que los datos fueron actualizados
            return response()->json([
            'success' => true,
            'message' => 'Nombre de ayudante actualizado correctamente'
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
        $ayudantes = Ayudantes::find($id);
        if (!$ayudantes) {
            return response()->json(['message' => 'ayudante no encontrada'], 404);
        }
        // Eliminar empresa
        $ayudantes->delete();
        // muestrele al cliente un mensaje indicandole que se borró correctamente
        return response()->json([
        'success' => true,
        'message' => 'Ayudante eliminado correctamente'
        ], 200);
    }
 }