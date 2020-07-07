<?php

namespace App\Http\Controllers\Eds;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eds;
use App\Employees;
use Illuminate\Validation\Rule;

class EdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showAll = session('onlyActive');

        $data = Eds::with('employees:id,first_name,patronymic,surname', 
                        'tokens:id,type,serial,employee_id', 
                        'tokens.employees:id,surname');
        if(!$showAll){
            $data = $data->where('status', true);
        };
 
        $data = $data->orderBy('status', 'desc')
                    ->orderBy('purpose')
                    ->orderBy('expired')
                    ->get();
       
        return view('eds/index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //scopes
        $employees = Employees::edsEmployees()->get();
        // $eds = Eds::active()->get();

        return view('eds/form', ['purposes' => Eds::$purposes, 'companies' => Eds::$companies,
                                    'employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'purpose' => 'required|numeric',
            'company' => 'required|numeric',
            'created' => 'required|date',
            'expired' => 'required|date|after:created',
            'employee' => ['required',
                            'numeric',
                            Rule::unique('eds','employee_owner')->where(function($query) use ($request){
                                return $query->where('purpose', $request->purpose)
                                            ->where('created', $request->created);
                            })],   
        ]);

        $data = Eds::create([
            'purpose' => $request->purpose,
            'employee_owner' => $request->employee,
            'company' => $request->company,
            'created' => $request->created,
            'expired' => $request->expired,
            'status' => true,
        ]);
            
        return redirect('/eds');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Eds::findOrFail($id);

        $data->update(['status' => !$request->status]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::transaction(function() use($id){
            $data = Eds::findOrFail($id);
            //Удаляем записи связи из таблицы eds_tokens
            $data->tokens()->detach();

            $data->delete();
        });

        return redirect('/eds');
    }

    //Меняет режим просмотра index страницы
    public function changeViewMode(){

        $showAll = session('onlyActive');
        session(['onlyActive' => ($showAll ? false : true)]);

        return redirect('/eds');

    }
}
