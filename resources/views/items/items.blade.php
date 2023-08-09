@extends('layout.main')

@section('content')

{{--<div class="background_items">--}}
    <div class="product-section container p1">
        <div class="p-4">
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr class="table table-bordered">
                        <td>
                            <div class="product-section-image">
                                <img src="{{asset('./images/t-shirt_image.jpg')}}">
                            </div>
                        </td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



    </div>
{{--</div>--}}


    @if(auth()->user() && auth()->user()->admin)

        <br><br>
        <div class="p1">

            <form method="POST" action="admin/items/create">
                @csrf
                <div class="font-weight-bold p-2">
                    Adauga un product nou
                </div>

                <div class="p-2 border border-secondary bg-light">

                    <div>
                        <input name="title"
                            placeholder="Titlu ..."
                            type="text"
                            class="w-100 pb-2 px-2"/>
                    </div>

                    <div class="d-flex flex-row">

                        <div class="p-2" style="width: 250px;">
                            <div class="pb-2">
                                <div>Brand</div>
                                <select name="brand"
                                        class="w-100">
                                    <option></option>
                                    @foreach ($branduri as $brand)
                                        <option value="{{$brand->id}}">
                                            {{$brand->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <div>Category</div>
                                <select name="category"
                                        class="w-100">
                                    <option></option>
                                    @foreach ($categorii as $cat)
                                        <option value="{{$cat->id}}">
                                            {{$cat->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="p-2 w-100">
                            <div>Details</div>
                            <textarea class="w-100 p-2"
                                      placeholder="Descriere ..."
                                      style="height: 130px;"
                                      name="description"></textarea>

                        </div>
                    </div>
                    <div class="text-right p-2">
                        <input type="submit"
                               class="font-weight-bold p-2"
                               value="Adauga" />
                    </div>
                </div>

            </form>
            <div style="height: 200px"></div>

        </div>

    @endif

@endsection()

