@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Membros - Edição</div>
                    <div class="card-body">
                        <form action="{{route('members.update', $member->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nome"><strong>Nome</strong></label>
                                <input name="nome" type="text" class="form-control" id="nome"  placeholder="Descrição" value="{{ old('nome', $member->nome) }}">
                            </div>
                            <div class="form-group">
                                <label for="github"><strong>GitHub</strong></label>
                                <input name="github" type="text" class="form-control" id="github"  placeholder="Localização" value="{{ old('github', $member->github) }}">
                            </div>
                            <div class="form-group">
                                <label for="linkedin"><strong>LinkedIn</strong></label>
                                <input name="linkedin" type="text" class="form-control" id="linkedin"  placeholder="Localização" value="{{ old('linkedin', $member->linkedin) }}">
                            </div>
                            <div class="form-group">
                                <label for="site"><strong>Site Pessoal</strong></label>
                                <input name="site" type="text" class="form-control" id="site"  placeholder="Localização" value="{{ old('site', $member->site) }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
