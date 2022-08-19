@extends('layouts.main')
@section('content')
<form action='/product/details/edit/{id}' method="POST">
      {{@csrf_field()}}
      <h1>Update Product</h1>
      <label>Name: </label>
      <input type="text" name="name" value="{{$products['name']}}">
      <label>Price: </label>
      <input type="text" name="price" value="{{$products['price']}}">
      <button type="submit">Update</button>

</form>
@endsection