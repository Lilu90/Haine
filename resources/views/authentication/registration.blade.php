@extends('layout.main')

@section('content')
    <div class="card-header text-center bg-lightblue text-black">
        Registration
    </div>
    <div class="registration_background">
        <form method="POST"
              class="login_form mx-auto pt-4"
              action="/register">
            @csrf
            <div class="form-group">
                <input type="name"
                       name="name"
                       class="form-control"
                       value="{{ old('name') }}"
                       placeholder="Name ...">
                @if($errors->has('name'))
                    @foreach ($errors->get('name') as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ old('email') }}"
                       placeholder="Email ...">
                @if($errors->has('email'))
                    @foreach ($errors->get('email') as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Password ...">
                @if($errors->has('password'))
                    @foreach ($errors->get('password') as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <input
                    name="password_confirmation"
                    type="password"
                    class="form-control"
                    placeholder="Repeat Password ...">
                @if($errors->has('password_confirmation'))
                    @foreach ($errors->get('password_confirmation') as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </div>

            <button type="submit" class="btn btn-primary">
                Register
            </button>

        </form>
    </div>
@endsection
