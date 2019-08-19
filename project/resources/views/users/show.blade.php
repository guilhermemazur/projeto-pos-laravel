@extends('layouts.app')

@section('breadcrumb')
    <breadcrumb header="Visualizar usuário">
        <breadcrumb-item href="{{ route('home') }}">
            @lang('headings.users.create')
        </breadcrumb-item>

        <breadcrumb-item active>
            @lang('headings.users.show')
        </breadcrumb-item>
    </breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="form-row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name">
                        @lang('labels.common.name')
                    </label>
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            value="{{ $user->name ?? '' }}" disabled>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">
                        @lang('labels.common.email')
                    </label>
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            value="{{ $user->email ?? '' }}" disabled>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="created_at">
                        @lang('labels.common.created_at')
                    </label>
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            value="{{ format_date($user->created_at) ?? '' }}"
                            disabled>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="updated_at">
                        @lang('labels.common.updated_at')
                    </label>
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            value="{{ format_date($user->updated_at) ?? '' }}"
                            disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection