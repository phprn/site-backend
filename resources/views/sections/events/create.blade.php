@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Eventos - Adição</div>
                    <div class="card-body">
                        <form action="{{ route('events.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="title"><strong>Descrição</strong></label>
                                <input name="title" type="text" class="form-control" id="title"  placeholder="Descrição" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="localization"><strong>Localização</strong></label>
                                <input name="localization" type="text" class="form-control" id="localization"  placeholder="Localização" value="{{ old('localization') }}">
                            </div>
                            <div class="form-group">
                                <label for="date"><strong>Data</strong></label>
                                <input name="date" type="date" class="form-control" id="date" placeholder="Data"
                                       value="">
                            </div>
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea name="description" class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
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
