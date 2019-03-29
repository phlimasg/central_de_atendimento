<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\unidades;
use PHPUnit\Runner\Exception;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidade = unidades::paginate(15);
        return view('uni_index', compact('unidade'));
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
            'uni_nome' => 'required | max:150',
            'uni_sendmail' => 'required | max:150 | email',
            'uni_sms' => 'nullable | max:250',
            'uni_logo_url' => 'nullable | max:250',
        ]);
        try {
            $unidade = new unidades();
            $unidade->user = 'sistema';
            $unidade->uni_nome = request()->uni_nome;
            $unidade->uni_sendmail = request()->uni_sendmail;
            $unidade->uni_sms = request()->uni_sms;
            $unidade->uni_logo_url = request()->uni_logo_url;
            $unidade->save();
            return redirect()->back();
        } catch (\Exception $e) {            
            return $e->getMessage();
        }
        
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
