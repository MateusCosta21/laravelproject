@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div class="card-header"><a class="btn btn-warning" href="{{ url('usuarios/') }}">Voltar</a></div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(Request::is('*/edit'))
                        <form action="{{url('usuarios/update')}}/{{$usuario->id}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" value="{{$usuario->nome}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">cpf</label>
                                <input type="text" name="cpf" class="form-control" value="{{$usuario->cpf}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telefone</label>
                                <input type="text" name="telefone" class="form-control" value="{{$usuario->telefone}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password"  name="senha" class="form-control" value="{{$usuario->senha}}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Data Nascimento</label>
                                <input type="text" name="data_nascimento" class="form-control" value="{{$usuario->data_nascimento}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Alterar</button>
                        </form>
                        @else

                        <form action="{{url('usuarios/add')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">cpf</label>
                                <input type="text" name="cpf" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telefone</label>
                                <input type="text" name="telefone" class="form-control" id="exampleInputEmail1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password"  name="senha" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Data Nascimento</label>
                                <input type="text" name="data_nascimento" class="form-control" id="exampleInputEmail1">
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
