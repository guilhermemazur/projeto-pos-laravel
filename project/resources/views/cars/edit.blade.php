@extends('layouts.app')

@section('breadcrumb')
<breadcrumb header="Editar Carro">
    <breadcrumb-item href="{{ route('home') }}">
        @lang('headings.common.home')
    </breadcrumb-item>

    <breadcrumb-item active>
        @lang('headings.cars.edit')
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-header">@lang('headings.cars.edit')</div>
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('cars.update', $user->id) }}">
            @method('PUT')
            @include('cars.partials._form')
            <button class="btn btn-primary" type="submit">@lang('buttons.common.edit')</button>
        </form>
    </div>
</div>
@endsection
