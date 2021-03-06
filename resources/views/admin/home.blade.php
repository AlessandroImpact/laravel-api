@extends('admin.layouts.base')

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

                    <h1>benvenuto {{$user->name}}</h1>
                    <h3>alla fine del mese mancano:{{$diffInDays}} giorni</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
