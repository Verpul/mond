<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use Illuminate\Validation\Rule;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'surname' => ['required','alpha','min:3','max:20',
                             Rule::unique('employees')->where(function($query) use ($request){
                                return $query->where('first_name', $request->first_name);
                            })],
            'first_name' => 'required|alpha|min:3|max:20',
            'patronymic' => 'required|alpha|min:3|max:20',
            'position' => 'nullable|alpha|min:3|max:30',
            'email' => 'nullable|email',
            'work_phone' => 'nullable|regex:/^[0-9]{2}\-[0-9]{2}\-[0-9]{2}$/',
            'mob_phone' => 'nullable|regex:/^8\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/',
        ]);

        $data = Employees::create([
            'surname' => ucfirst(strtolower($request->surname)),
            'first_name' => ucfirst(strtolower($request->first_name)),
            'patronymic' => ucfirst(strtolower($request->patronymic)),
            'position' => $request->position,
            'email' => $request->email,
            'work_phone' => $request->work_phone,
            'mob_phone' => $request->mob_phone,
            'eds' => ($request->eds)?'1':'0'  
        ]);

        return redirect()->back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
