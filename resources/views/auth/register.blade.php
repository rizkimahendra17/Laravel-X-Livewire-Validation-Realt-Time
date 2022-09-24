@extends('layouts.app')

@push('style')
    @livewireStyles()
@endpush

@push('scripts')
    @livewireScripts()
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        @livewire('register')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
