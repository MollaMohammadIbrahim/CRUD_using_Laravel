@extends('layouts.main');

@section('content')

<form method="POST" action="{{route("books.update",['book'=>$book])}}">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Id</label>
      <input name = "id" value = "{{$book->id}}" type="text" class="form-control">
      @error('id')
        <span class = "error text-danger"> {{$message}}</span>
      @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Title</label>
        <input name = "Title" value = "{{$book->Title}}" type="text" class="form-control">
        @error('Title')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <input name = "Author" value = "{{$book->Author}}" type="text" class="form-control">
        @error('Author')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ISBN</label>
        <input name = "ISBN" value = "{{$book->ISBN}}" type="text" class="form-control">
        @error('ISBN')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input name = "Price" value = "{{$book->Price}}" type="text" min="0" class="form-control">
        @error('Price')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>


    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('books.index')}}" class = "btn btn-info">Cancel</a>
  </form>

@endsection
