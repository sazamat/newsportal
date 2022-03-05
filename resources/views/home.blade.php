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

                    {{ __('You are logged in!') }}
                        <div class="mx-auto">
                            <a href="/news" class="btn btn-success tracking-wide text-black  px-6 py-2 inline-block mt-4 shadow-lg rounded hover:shadow">Continue to  news</a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

