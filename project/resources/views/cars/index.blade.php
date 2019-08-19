@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="Carros">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings.common.home')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.cars.index')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-md-12">
        <data-list data-source="{{ route('pagination.cars') }}"
                   delete-message="Tem certeza que deseja apagar este registro ?"
                   url-create="{{ route('cars.create') }}"
                   label-create="Novo Carro"
                   />
   </div>
</div>
@endsection

@section('custom-template')
    <template id="data-list" slot-scope="modelScope">
        <div>
            <div class="row my-2">
                <div class="col-md-6">
                    <a v-if="urlCreate" :href="urlCreate">
                        <button class="btn btn-primary">@{{labelCreate}}</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <input type="text" v-model="query" class="form-control"
                        placeholder="Buscar ..." >
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        @include('cars.partials._head')
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in items" :key="index">
                        @include('cars.partials._body')
                        <td>@include('shared.partials._buttons_actions')</td>
                    </tr>
                </tbody>
            </table>
            @include('shared.partials._pagination')
        </div>
    </template>
@endsection
