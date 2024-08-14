@extends ('layout')

@section('content')
<h2>Create Product</h2>
<form method="POST" action="{{ route('store_product') }}">
    @csrf
    <div class="form-floating mb-3">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name='name' id="name" placeholder="name" aria-describedby="">
    </div>
    <div class="form-floating mb-3">
      <label for="exampleInputEmail1">Image</label>
      <input type="text" class="form-control" name='image' id="image" placeholder="image" aria-describedby="">
    </div>
    <div class="form-floating mb-3">
      <label for="exampleInputEmail1">Description</label>
      <input type="text" class="form-control" name='description' id="description" placeholder="description" aria-describedby="">
    </div>
    <button class='btn-outline-success btn' type="submit">Create Product</button>
  </form>
@endsection