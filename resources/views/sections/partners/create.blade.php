@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Parceiros - Adição</div>
                    <div class="card-body">
                        <form action="{{ route('partners.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nome"><strong>Nome</strong></label>
                                <input name="nome" type="text" class="form-control" id="nome"  placeholder="Nome" value="{{ old('nome') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="link"><strong>Link</strong></label>
                                <input name="link" type="text" class="form-control" id="link"  placeholder="Descrição" value="{{ old('link') }}">
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagem</label>
                                <input type="file" class="form-control" id="imagem" name="imagem"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
