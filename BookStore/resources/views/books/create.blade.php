@extends('layouts.main');

@section('content')

<form method="POST" action="{{route("books.store")}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Id</label>
      <input name = "id" value = "{{old('id')}}" type="text" class="form-control">
      @error('id')
        <span class = "error text-danger"> {{$message}}</span>
      @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Title</label>
        <input name = "Title" value = "{{old('Title')}}" type="text" class="form-control">
        @error('Title')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <input name = "Author" value = "{{old('Author')}}" type="text" class="form-control">
        @error('Author')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ISBN</label>
        <input name = "ISBN" value = "{{old('ISBN')}}" type="text" class="form-control">
        @error('ISBN')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input name = "Price" value = "{{old('Price')}}" type="text" min="0" class="form-control">
        @error('Price')
          <span class = "error text-danger"> {{$message}}</span>
        @enderror
      </div>


    <button type="submit" class="btn btn-primary">Create</button>

  </form>

@endsection
