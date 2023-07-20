@extends('layout.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card-body">

                <a href="/logout">Login</a>

                <form action="{{ route('login') }}"
                      class="login_form"
                      method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="email" class="form-control"/>
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control"/>
                        @if($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn-dark btn-block">LOG IN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection('content')
