<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citizen;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.register.index');
    }

    public function form(RegisterFormRequest $request) 
    {

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'mother' => 'required',
        //     'cns' => 'required',
        //     'born_day' => 'required|date',
        //     'gender' => 'required',
        //     'email' => 'email',
        //     'cep' => 'required',
        //     'state' => 'required',
        //     'city' => 'required',
        //     'district' => 'required',
        //     'adress_type' => 'required',
        //     'adress' => 'required',
        //     'number' => 'required',
        // ]);

        // if ($validator->fails()) 
        // {
        //     return dd($validator);
        // }
        
        Citizen::create($request->all());

        // dd($retorno);

        toastr()->success('Cidadão Cadastrado com Sucesso!');

        return redirect()->route('site.form');
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
        //
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
