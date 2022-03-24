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
        $citizens = Citizen::all();

        return view('site.list.index', compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.register.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RegisterFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterFormRequest $request)
    {
        Citizen::create($request->all());

        toastr()->success('Cidadão Cadastrado com Sucesso!');

        return redirect()->route('register.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($citizen)
    {
        $retorno = $this->getCitizenById($citizen);

        $retorno->delete();

        toastr()->success('Cidadão Deletado com Sucesso!');

        return redirect()->route('register.index');
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($citizen)
    {
        $retorno = $this->getCitizenById($citizen);
        return view('site.register.edit', ['citizen' => $retorno]);
    }

    public function getCitizenById($citizen)
    {
        return Citizen::whereId($citizen)->firstOrFail();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RegisterFormRequest  $request
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterFormRequest $request, $id)
    {
        // $cadastro = Citizen::find($id);

        // $cadastro->update($request->all());

        // $cadastro->save();

        Citizen::find($id)->update($request->all());

        toastr()->success('Cadastro de Cidadão Atualizado com Sucesso!');

        return redirect()->route('register.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($citizen)
    {

    }
}
