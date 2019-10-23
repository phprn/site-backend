@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Eventos
                        <a href="{{ route('events.create') }}" class="btn btn-primary float-right">Novo Evento</a>
                    </div>
                    <div class="card-body">
                        @if (session('sucesso'))
                            <div class="alert alert-success">
                                {{ session('sucesso') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead>
                                <tr>
                                    <th width="60%">Descrição</th>
                                    <th width="20%" class="text-center">Data</th>
                                    <th width="20%" class="text-center">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($result as $info)
                                    <tr>
                                        <td>{{ $info->title }}</td>
                                        <td class="text-center">
                                            <small>{{ date('d/m/Y', strtotime($info->data_in))}}</small>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm mr-1">
                                                <a href="{{ route('events.show', $info->id) }}" class="text-white"><i class="fas fa-search"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-dark btn-sm mr-1">
                                                <a href="{{ route('events.edit', $info->id) }}" class="text-white"><i class="fas fa-edit"></i></a>
                                            </button>
                                            <form action="{{route('events.destroy',$info->id)}}" method="POST" style="display: inline-block">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-danger btn-sm" rel="tooltip" onClick="if(confirm('Deseja realmente excluir?'))
    return true; else return false;"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <p>Nenhum evento cadastrado</p>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pagination mt-3">
                    {{ $result->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
