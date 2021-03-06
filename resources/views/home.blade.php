@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center">
                        <a href="{{ route('chatify') }}" class="btn btn-outline-info" role="button">{{ __('Messenger') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
