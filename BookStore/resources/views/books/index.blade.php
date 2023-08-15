@extends('layouts.main');
@section('content')

<div class="create-button">
    <a href="{{route('books.create')}}" class="btn btn-success">Add Book</a>
</div>
@method('DELETE')
<div class="table-content">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">iD</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">ISBN</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book )
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->Title}}</td>
                <td>{{$book->Author}}</td>
                <td>{{$book->ISBN}}</td>
                <td>{{$book->Price}}</td>
                <td>
                    <a href="{{route('books.edit',['book'=>$book])}}" class="btn btn-success">Edit</a>
                    <form action="{{route('books.destroy',['book'=>$book])}}" method="POST" class="form d-inline">
                    @csrf
                    @method('DELETE')

                        <button class="btn btn-danger" onclick="return confirm('Are you sure to deletephp artisan help?')">Delete</button>
                        {{-- <button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button> --}}

                    </form>
                </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {{$books->links()}}
</div>

@endsection
