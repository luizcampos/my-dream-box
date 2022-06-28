<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Goal;

class EventController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){

        $goals = Goal::all();
        return view('home', ['goals' => $goals]); //enviar para a view Welcome todos os eventos do Banco de dados -
        //tabela goals da model Goal
    }

    public function createGoal(){
        return view('events.createGoal');
    }

    public function create(){
        return view('events.createGoal');
    }

    public function store(Request $request){
        $goal = new Goal;

        $goal->goal_title = $request->title;
        $goal->goal_cash_total = $request->total;
        $goal->goal_date = $request->dateGoal;
        $goal->goal_cash_today = $request->cash;

        $goal->save();

        return redirect('home')->with('msg', 'Eba! Sua meta foi criada!');
    }

    public function destroy($id){
        Goal::findOrFail($id)->delete();

        return redirect('home')->with('msg', 'Sua meta foi excluída');
    }

    public function edit($id){
        
        $goal = Goal::findOrFail($id);
        return view('events.pageEditGoal', ['event' => $goal]);

    }

    public function update(Request $request){
        Goal::findOrFail($request->id)->update($request->all());

        return redirect('home')->with('msg', 'Pronto. Sua meta foi editada!');
    }
}
