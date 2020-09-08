@extends('layouts.app')

@section('content')
<div class="container">
<form class="form-signin">
  <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <div class="form-group row">
  <label for="name" class="sr-only">Name</label>
  <input type="text" id="name" class="form-control" placeholder="Name" required>
  </div>
  
  <div class="form-group row">
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  </div>
  
  <div class="form-group row">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  </div>
 
  <div class="form-group row">
  <label for="confirmedPassword" class="sr-only">Confirm Password</label>
  <input type="password" id="confirmedPassword" class="form-control" placeholder="Confirm Password" required>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
</div>
@endsection