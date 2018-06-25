@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Props Component</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <prop-component :urldata="{{ json_encode($data) }}"></prop-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">AJAX Component</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ajax-component></ajax-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Line Chart.JS</div>

                <div class="card-body">
                    <line-chart-component></line-chart-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Circle Chart.JS</div>

                <div class="card-body">
                    <pie-chart-component></pie-chart-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Random Chart.JS</div>

                <div class="card-body">
                    <random-chart-component></random-chart-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Real time Chart.JS</div>

                <div class="card-body">
                    <realtime-chart-component></realtime-chart-component>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Real time Chat</div>

                <div class="card-body">
                    <realtime-chat-component></realtime-chat-component>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->check())
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Real time Private Chat</div>

                    <div class="card-body">
                        <h4>{{ $user->email }}</h4>

                        <socket-private-component :users="{{ $users }}" :user="{{ $user }}"></socket-private-component>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
