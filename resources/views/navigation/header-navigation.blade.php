
<i class="bi bi-cart3 ft-25"></i>

<div class="float-right">
    <a class="btn btn-link " href="{{  route('home') }}">
        Home
    </a>
    <a class="btn btn-link" href="{{  route('clothes') }}">
        Clothes
    </a>
    @if(auth()->user())
        @if(auth()->user()->admin)
            <a class="btn btn-link" href="{{ route('admin') }}">
                Admin
            </a>
            <a class="btn btn-link" href="{{ route('users') }}">
                Users
            </a>
            <a class="btn btn-link" href="{{ route('categories') }}">
                Categories
            </a>
            <a class="btn btn-link" href="{{ route('brands') }}">
                Brands
            </a>
        @endif
        <a class="btn btn-link" href="{{ route('logout') }}">
            Log Out
        </a>
    @else
        <a class="btn btn-link" href="{{ route('login') }}">
            Login
        </a>
        <a class="btn btn-link" href="{{ route('registration') }}">
            Register
        </a>
        <a class="btn btn-link" href="{{ route('categories) }}">
            Categories
        </a>
    @endif

</div>


@if(auth()->check())
    {{ auth()->user()->email }}
@endif
