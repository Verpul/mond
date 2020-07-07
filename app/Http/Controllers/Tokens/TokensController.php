<?php

namespace App\Http\Controllers\Tokens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tokens;
use App\Employees;
use App\Eds;
use App\Rules\Alphaspace;
use Illuminate\Validation\Rule;

class TokensController extends Controller
{
    //Показать данные
    public function index()
    {
        $data = Tokens::with('employees:id,first_name,patronymic,surname', 
                        'eds:id,purpose,employee_owner,expired,status', 
                        'eds.employees:id,surname')
                        ->orderBy('type', 'desc')
                        ->get();                  

        return view('tokens/index', ['data' => $data]);
    }

    //Показать форму создания новой записи
    public function create()
    {
        //scopes
        $employees = Employees::edsEmployees()->get();
        $eds = Eds::active()->get();

        return view('tokens/form', ['tokens' => Tokens::$types, 'employees' => $employees, 'eds' => $eds]);
    }

    //Сохранить новую запись
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|numeric',
            'serial' => 'required|min:3|max:30|unique:tokens,serial|regex:/^[\pL\-0-9]+$/u',
            'employee' => 'required|numeric'
        ]);

        \DB::transaction(function() use($request){
            $data = Tokens::create([
                'type' => $request->type,
                'serial' => $request->serial,
                'employee_id' => $request->employee,
            ]);
       
            //Если токен с ЭЦП, то добавляем его в таблицу eds_tokens
            if($request->edscheckbox){
             $data->eds()->attach($request->edscheckbox);   
            }
        });
            
        return redirect('/tokens');
    }

    public function show($id)
    {
        //
    }

    //Показать определенную запись данных для редактирования
    public function edit($id)
    {
        $data = Tokens::with('eds:id,employee_owner,purpose,expired,status','eds.employees:id,surname')
                            ->findOrFail($id);

        //scopes
        $employees = Employees::edsEmployees()->get();
        $eds = Eds::active()->get();

        return view('tokens/form', ['data' => $data, 'employees' => $employees, 'eds' => $eds]);
    }

    //Обновить определенную запись данных в БД
    public function update(Request $request, $id)
    {
        $request->validate([
            'employee' => 'required|numeric',
        ]);

        $data = Tokens::findOrFail($id);

        \DB::transaction(function() use ($request, $data){
            $data->update([
                'employee_id' => $request->employee,
            ]);

            //Добавляем новые связи с ЭЦП в таблицу eds_tokens
            $data->eds()->sync($request->edscheckbox);
        });
        
        return redirect('/tokens');
    }

    //Удалить данные Tokens
    public function destroy($id)
    {
        \DB::transaction(function() use($id){
            $data = Tokens::findOrFail($id);
            //Удаляем записи связи из таблицы eds_tokens
            $data->eds()->detach();

            $data->delete();
        });

        return redirect('/tokens');     
    }

}
