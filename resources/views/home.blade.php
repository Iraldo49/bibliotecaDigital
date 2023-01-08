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
          <a  href="{{url('index')}}">

            <span class="title">Adicionar Livro</span>
          </a>
        </li>

      </ul>
    </div>

    <div class="seach">
      <input type="text" placeholder="Search.." style="position: absolute; width: 440px; height: 51px; left: 10px;
      top: 0px; background: #FFFFFF; border-radius: 10px;">
    </div>

    <div class="card">
      <h3 style="text-align: center; font-weight: bold; color:#278B31 ;">20.124</h3>
      <p style="text-align: center;  font-weight: bold;">Livros Disponíveis</p>
      <div class="container">

      </div>
    </div>
    <div class="card2">
      <h3 style="text-align: center; font-weight: bold; color:#2c42a5 ;">13.450</h3>
      <p style="text-align: center;  font-weight: bold;">Livros Lidos</p>
      <div class="container">

      </div>
    </div>
    <div class="card3">
      <h3 style="text-align: center; font-weight: bold; color:#c78d0f ;">17.124</h3>
      <p style="text-align: center;  font-weight: bold;">Autores</p>
      <div class="container">

      </div>
    </div>

    <p class="Populares ">Mais Populares </p>
  </div>
  {{-- <div class="card-livro">
    <img src="Imagens/Livro 1.jpeg" alt="Avatar" style="width:100%">
    <div class="container">
      <h6><b>Antes de Nascer o Mundo</b></h6>
      <p>Mia Couto</p>
    </div>
  </div>
  <div class="card-livro1">
    <img src="Imagens/Livro 2.jpeg" alt="Avatar" style="width:100%">
    <div class="container">
      <h6><b>Antes de Nascer o Mundo</b></h6>
      <p>Mia Couto</p>
    </div>
  </div>

  <div class="card-livro2">
    <img src="Imagens/Livro 3.jpeg" alt="Avatar" style="width:100%">
    <div class="container">
      <h6><b>Antes de Nascer o Mundo</b></h6>
      <p>Mia Couto</p>
    </div>
  </div>

  <div class="card-livro3">
    <img src="Imagens/Livro 4.jpeg" alt="Avatar" style="width:100%">
    <div class="container">
      <h6><b>Antes de Nascer o Mundo</b></h6>
      <p>Mia Couto</p>
    </div>
  </div>
  </div>
  </div>
  </div> --}}

  <div id="events-container" class="col-md-12">

    <div id="container" class="row">
      @foreach ($livros as $livro)
        <div class="card col-md-3">
          <img src="/imagens/{{ $livro->capa }}" >
            <div class="card-body">
                <h5 class="card-title">{{ $livro->titulo }}</h5>
            
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>



  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection