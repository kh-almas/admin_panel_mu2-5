@extends('backend.app')

@section('title', 'settings')

@section('admin-content')
    @can('web_settings')
        <div class="mt-5">
            <div class="card mx-auto p-4" style="max-width: 600px">
                <livewire:backend.form.settings />
            </div>
        </div>
    @endcan
@endsection
