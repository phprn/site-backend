@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left mt-1 font-weight-bold">Eventos</h3>
                        <div class="float-right">
                            <button class="btn btn-primary"><a href="{{url()->previous()}}" class="text-white">Voltar</a></button>
                        </div>
                    </div>
                    <div class="card-body">

                        <h1 class="font-weight-bold"> {{ $event->title }}</h1>
                        <h6 class="font-weight-bold"> {{ date('d/m/Y', strtotime($event->date)) }}</h6>
                        <hr>
                        <p><strong>Local:</strong>
                            <br> {{ $event->localization }}</p>
                        <p><strong>Descrição:</strong>
                            <br> {{ $event->description }}</p>

                    </div>
                </div>
                <div class="pagination mt-3">

                </div>
            </div>
        </div>
    </div>
@endsection
