@extends('layout.main')

@section('content')
    <div class="p-4">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr class="table table-bordered">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/admin/categories/delete/{{ $category->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <form method="post" action="{{ route('createCategory') }}">
        @csrf
        Create category
        <div>
            <input name="category_name">
        </div>
        <button type="submit">Create</button>
    </form>

@endsection
