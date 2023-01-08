
@extends('layouts.main')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            
            </div>
            <div class="pull-right">
                <a  class="btn btn-light" href="{{ url('/index') }}" style="position: absolute; width: 150px;
                height: 23px;left: 58px; top: 56px;  font-family: 'Inter'; font-style: normal;
                font-weight: 400; font-size: 15px; line-height: 18px; "> Back</a>
            </div>
        </div>
    </div>
      
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="position: absolute; width: 500px; height: 51px; left: 842px;
            top: 78px; font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 42px; line-height: 51px;">
                
                {{ $livro->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="position: absolute; width: 230px; height: 23px; left: 842px; top: 265px;
            font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 17px;line-height: 23px;">
                <strong>Autor:</strong>
                {{ $livro->autor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="position: absolute; width: 621px; height: 30px;
            left: 842px; top: 150px;font-family: 'Inter'; font-style: normal; font-weight: 400;
            font-size: 13px; line-height: 23px;
            ">
                {{-- <strong>Descricao:</strong> --}}
                {{ $livro->descricao }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"  style="position: absolute; width: 230px; height: 23px; left: 842px; top: 305px;
            font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 17px;line-height: 23px;">
                <strong>Genero:</strong>
                {{ $livro->genero }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"  style="position: absolute; width: 230px; height: 23px; left: 842px; top: 355px;
            font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 17px;line-height: 23px;">
                <strong>Ano Lancamento:</strong>
                {{ $livro->ano_l }}
            </div
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
             
                <img src="/imagens/{{ $livro->capa }}" style="position: absolute; width: 409px;
                height: 634px; left: 246px;  top: 58px;">
            </div>
        </div>
        <button type="button" class="btn btn-primary" style="position: absolute;
        width: 306px;
        height: 68px;
        left: 842px;
        top: 488px;
        
        background: #2095D7;
        border-radius: 10px;">Ler o livro</button>
    </div>
@endsection