@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="new-line-for-git-test">
                        <h2>Test header</h2>

                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, eveniet facilis modi necessitatibus tenetur totam?</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
