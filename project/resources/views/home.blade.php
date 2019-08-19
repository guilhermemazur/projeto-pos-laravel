@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total de Usuários</h5>
                    <p class="card-text">{{ $total_usuarios }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total de Marcas</h5>
                    <p class="card-text">{{ $total_marcas }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total de Carros</h5>
                    <p class="card-text">{{ $total_carros }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
