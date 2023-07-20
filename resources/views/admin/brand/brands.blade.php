@extends('layout.main')

@section('content')

    <div class="p-4">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            <tbody>
            @foreach ($brands as $brand)
                <tr class="table table-bordered">
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <a href="/admin/brands/delete/{{ $brand->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <form method="post" action="{{ route('createBrand') }}">
        @csrf
         Name Brand
        <div>
            <input name="brand_name">
        </div>
        <button type="submit">Create</button>
    </form>


@endsection
