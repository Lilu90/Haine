@extends('layout.main')

@section('content')
<div class="background_users">
    <br>
    <table class="users.table" >
        <thead class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>EMAIL</td>
            <td>Name</td>
            <td>Active</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr class="table table-bordered">
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->active }}</td>
                <td>
                    <a href="users/delete/{{$user->id}}">Delete</a>
                </td>
            </tr>

        @endforeach

        </tbody>


    </table>
</div>










@endsection()
