@extends('layouts.admin')

@section('content')
<form  action="/contact/update"  method="POST" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	<div  class="mb-3">
		<label  for="ingredient"  class="form-label">Adresse</label>
		<input  type="text"  value={{$edit->adresse}}  name="adresse"  class="form-control"  id="ingredient"  aria-describedby="emailHelp">
	</div>
	<div  class="mb-3">
		<label  for="quantity"  class="form-label">Numéro</label>
		<input  type="text"  value={{$edit->num}}  name="num"  class="form-control"  id="quantity"  aria-describedby="emailHelp">
	</div>

	<div  class="mb-3">
		<label  for="quantity"  class="form-label">Email</label>
		<input  type="email"  value={{$edit->mail}}  name="mail"  class="form-control"  id="quantity"  aria-describedby="emailHelp">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection