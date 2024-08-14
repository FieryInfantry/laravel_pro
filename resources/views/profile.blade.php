@extends ('layout')

@section('content')
<h2>Profile</h2>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $email }}" disabled>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Name</label>
    <input type="email" class="form-control" id="exampleInputPassword1" value="{{ $name }}" disabled>
  </div>
</form>
@endsection