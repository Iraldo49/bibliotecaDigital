<?php

namespace App\Http\Controllers;


use Auth;
use App\Models\Livro;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       
        //  $livros = Livro::latest()->paginete(5);

        //  return view('index',compact('livros'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);


        $livros = Livro::all();
        return view('index', compact('livros'));
      
        
    //    return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
               'titulo' => 'Required',
               'autor' => 'Required',
               'descricao' => 'Required',
               'genero' => 'Required',
               'ano_l' => 'Required',
               'capa' => 'Required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);


        $input = $request->all();
   
        if ($image = $request->file('capa')) {
            $destinationPath = 'imagens/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['capa'] = "$profileImage";
        }
     
        Livro::create($input);
      
        return redirect()->route('index')
                        ->with('success','Livro cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        return view('show',compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        
        return view('edit',compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'Required',
            'autor' => 'Required',
            'descricao' => 'Required',
            'genero' => 'Required',
            'ano_l' => 'Required',
            'capa' => 'Required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
     ]);


     $input = $request->all();

     if ($image = $request->file('capa')) {
         $destinationPath = 'imagens/';
         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
         $image->move($destinationPath, $profileImage);
         $input['capa'] = "$profileImage";
     }
  
     Livro::create($input);
   
     return redirect()->route('index')
                     ->with('success','Livro cadastrado com sucesso.');
 }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
      
        return redirect()->route('index')
                        ->with('success','livro removido com sucesso!');
    }
}
