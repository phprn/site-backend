@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="float-left mt-1">Notícias</h6>
                        <div class="float-right">
                            <button class="btn btn-primary"><a href="{{url()->previous()}}" class="text-white">Voltar</a></button>
                        </div>
                    </div>
                    <div class="card-body">

                        <h1 class="font-weight-bold"> {{ $result->title }}</h1>
                        <hr>
                        <p>{{ $result->content }}</p>

                    </div>
                </div>
                <div class="pagination mt-3">

                </div>
            </div>
        </div>
    </div>
@endsection
