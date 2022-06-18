@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Verify e-mail address</h1>
                        <p>You must verify e-mail address to access page</p>

                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                Resend verification E-mail
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
