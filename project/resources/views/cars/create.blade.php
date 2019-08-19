@extends('layouts.app')

@section('breadcrumb')
<breadcrumb header="Criar Carro">
    <breadcrumb-item href="{{ route('home') }}">
        @lang('headings.common.home')
    </breadcrumb-item>

    <breadcrumb-item active>
        @lang('headings.cars.create')
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-header">@lang('headings.cars.create')</div>
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('cars.store') }}">
            @include('cars.partials._form')
            <button class="btn btn-primary" type="submit">@lang('links.common.create')</button>
        </form>
    </div>
</div>
@endsection
