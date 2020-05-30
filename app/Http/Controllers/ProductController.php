<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request){
        //dd($request->prm1);
        $this->request = $request;
        //$this->middleware('auth');
        /*$this->middleware('auth')->only([
            'create','store'
        ]);*/
        /*$this->middleware('auth')->except([
            'index','show'
        ]);*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;
        $teste2 = 321;
        $teste3 = [];
        $products = ['Tv','Geladeira','Forno','Sofá'];

        return view('admin.pages.products.index', compact('teste','teste2','teste3','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // dd($request->only('name','description'));
        // dd($request->except('_token'));
        //dd($request->name);
        // dd($request->has('teste'));
        //dd($request->input('teste','default'));
        if ($request->file('photo')->isValid()) {
            // dd($request->photo->extension());
            // dd($request->photo->getClientOriginalName());
            // dd($request->file('photo')->store('products'));
            $nameFile = $request->name.'.'.$request->file('photo')->extension();
            dd($request->file('photo')->storeAs('products',$nameFile));
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
        return "Detalhe do produto de id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('admin.pages.products.edit',compact('id'));
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
        dd("Editando o produto {$id}");
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
