@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Membros
                        <a href="{{ route('members.create') }}" class="btn btn-primary float-right">Novo Membro</a>
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
                                    <th width="50%">Nome</th>
                                    <th width="20%">GitHub</th>
                                    <th width="10%" class="text-center">LinkedIn</th>
                                    <th width="10%" class="text-center">Site pessoal</th>
                                    <th width="10%" class="text-center">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($result as $info)
                                    <tr>
                                        <td>{{ $info->nome }}</td>
                                        <td>{{ '@' . $info->github }}</td>
                                        <td class="text-center">
                                            <a href="{{ $info->linkedin }}" target="_blank">Link</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ $info->site }}" target="_blank">Link</a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <a href="{{ route('members.edit', $info->id) }}" class="text-white"><i class="fas fa-edit"></i></a>
                                            </button>
                                            <form action="{{route('members.destroy',$info->id)}}" method="POST" style="display: inline-block">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-danger btn-sm" rel="tooltip" onClick="if(confirm('Deseja realmente excluir?'))
    return true; else return false;"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <p>Nenhum membro cadastrado</p>
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
