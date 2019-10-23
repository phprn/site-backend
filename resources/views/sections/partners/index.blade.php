@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Parceiros
                        <a href="{{ route('partners.create') }}" class="btn btn-primary float-right">Novo Parceiro</a>
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
                                    <th width="10%"></th>
                                    <th width="60%">Nome</th>
                                    <th width="20%" class="text-center">Link</th>
                                    <th width="10%" class="text-center">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($result as $info)
                                    <tr>
                                        <td><img alt="logo" src="{{ asset('storage/'. $info->imagem) }}" class="img-fluid"></td>
                                        <td>{{ $info->nome }}</td>
                                        <td class="text-center"><a href="{{ $info->link }}" target="_blank">Acesso</a></td>
                                        <td class="text-center">
                                            <form action="{{route('partners.destroy',$info->id)}}" method="POST" style="display: inline-block">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-danger btn-sm" rel="tooltip" onClick="if(confirm('Deseja realmente excluir?'))
    return true; else return false;"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <p>Sem parceiros cadastrados</p>
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
