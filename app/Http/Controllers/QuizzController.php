<?php

namespace App\Http\Controllers;
use App\Models\Quizz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzController extends Controller
{	
    public function index()    {	
    	return view('pages.cuestionario');
	}

	public function store(Request $request)    {
    	try {
            $quizz = new Quizz;
            $quizz->desanimado = $request->desanimado;
            $quizz->ansioso = $request->ansioso;
            $quizz->dormir = $request->dormir;
            $quizz->energia = $request->energia;
            $quizz->concentracion = $request->concentracion;
            $quizz->apetito = $request->apetito;
            $quizz->irritable = $request->irritable;
            $quizz->danio_asimismo = $request->danio_asimismo;
            $quizz->ansiedad_generalizada = $request->ansiedad_generalizada;
            $quizz->panico = $request->panico;
            $quizz->user_id = $request->user_id;

            DB::beginTransaction();
            $quizz->save();
            DB::commit();
            session()->flash('my_message', 'Cuestionario Respondido Correctamente');
            return redirect('/home');
        } catch (Exception $e) {
            session()->flash('my_error', $e->getMessage());
            DB::rollback();
        }
    }

    public function show()    {
        $user_id = auth()->user()->id;
        $results = Quizz::where('user_id', $user_id)->latest()->get();      
        return view('pages.cuestionarioList', compact('results'));
    }

    public function destroy(Quizz $quizz)
    {
        try {
        $quizz=Quizz::find($quizz->id);
        DB::beginTransaction();
        $quizz->delete();
        DB::commit();
        session()->flash('my_message', 'Tablon Eliminado Correctamente');
        return redirect('home');
        } catch (Exception $e) {
        session()->flash('my_error', $e->getMessage());    
        DB::rollback();
        }
    }

}
