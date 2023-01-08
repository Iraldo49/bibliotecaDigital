@extends('layouts.app')

@section('content')

<div class="main_container" style="position: absolute;  width: 180px; height: 768px; left: 0px; top: 0px; background: #F2E5C4;">
    <div class="sidebar" >
        <h4 class="titulo"> BibliotecA digitAL <span style="font-size: 15px; color: #fff;">Painel de controle</span> </h4>
        <ul class="linkss">
            <li><a href="#">
                <span class="title">Início</span>
            
                </a>
            </li>
            <li>
                <a href="#">

                    <span class="title">Favoritos</span>
                </a>
            </li>
            <li>
                <a href="#">

                    <span class="title">Adicionar Livro</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="seach">
      <input type="text" placeholder="Search.." style="position: absolute; width: 440px;
       height: 51px; left: 10px; top: 0px;  border-radius: 10px;">
    </div>
 
    <div class="pull-right">
        <a class="btn btn-success" href="{{url('create')}}"  style="position: absolute; width: 140px;height: 38px;
        left: 1200px; top: 140px; border-radius: 10px;">Cad. novo Livro</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success" style="position: absolute; width: 1200px; height: 100px; left: 250px; top: 200px;">
        <p>{{ $message }}</p>
    </div>
@endif

    <table class="table" style="position: absolute; width: 1200px; height: 100px; left: 250px; top: 250px;">
        <thead>
            <tr>
                <th class="pt-0">ID</th>
                <th class="pt-0">Titulo</th>
                <th class="pt-0">Autor</th>
                <th class="pt-0">Descricao</th>
                <th class="pt-0">Genero</th>
                <th class="pt-0">Ano Lanc.</th>
                <th class="pt-0">Capa</th>                    
                <th class="pt-0">Actions</th>
            </tr>
            </thead>
            <tr>
                @foreach ($livros as $livro)
                <tr>
                    <td>{{$livro->id}}</td>
                    <td>{{$livro->titulo}}</td>
                    <td>{{$livro->autor}}</td>
                    <td>{{$livro->descricao}}</td>
                    <td>{{$livro->genero}}</td>
                    <td>{{$livro->ano_l}}</td>
                    <td><img src="/imagens/{{ $livro->capa }}" style="position: relative;width: 40px;height: 40px;"></td>
                    <td> 
                        <form action="{{ route('destroy',$livro->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('show', $livro->id) }}" style="font-size: 10px">Show</a>
                            <a class="btn btn-warning" href="{{ route('edit',$livro->id) }}" style="font-size: 10px">edit</a>
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger" style="font-size: 10px">Delete</button>
                        </form>
                    </td>
                </tr>
                   
                @endforeach
            </tr>
        </table>
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection