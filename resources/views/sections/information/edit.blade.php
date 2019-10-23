@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Notícias - Edição</div>
                    <div class="card-body">
                        <form action="{{route('information.update', $information->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title"><strong>Título</strong></label>
                                <input name="title" type="text" class="form-control" id="title"  placeholder="Título" value="{{ old('title', $information->title) }}">
                            </div>
                            <div class="form-group">
                                <label for="content"><strong>Conteúdo</strong></label>
                                <textarea name="content" class="form-control" id="article-ckeditor" rows="10">{{ $information->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="active" class="form-control" id="status">
                                    <option value="1"  {{ $information->active === 1 ? 'selected' : '' }}>Publicado</option>
                                    <option value="0" {{ $information->active === 0 ? 'selected' : '' }}>Em análise</option>
                                </select>
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
