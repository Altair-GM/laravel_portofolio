@extends('layouts.admin')

@section('content')
<form  action="/skill/{{$edit->id}}/update"  method="POST">
	@csrf
	@method("PUT")
	
    {{-- Skill 1 --}}
    <div  class="mb-3">
		<label  for="ingredient"  class="form-label">Skill 1 Pourcentage</label>
		<input  type="number" min="0" max="100"  value={{$edit->skill1}}  name="skill1"  class="form-control"  id="ingredient"  aria-describedby="emailHelp">
	</div>
	<div  class="mb-3">
		<label  for="quantity"  class="form-label">Skill 1 Texte</label>
		<input  type="text"  value={{$edit->skill1_txt}}  name="skill1_txt"  class="form-control"  id="quantity"  aria-describedby="emailHelp">
	</div>
	
    {{-- Skill 2 --}}
    <div  class="mb-3">
		<label  for="ingredient"  class="form-label">Skill 2 Pourcentage</label>
		<input  type="number" min="0" max="100"  value={{$edit->skill2}}  name="skill2"  class="form-control"  id="ingredient"  aria-describedby="emailHelp">
	</div>
	<div  class="mb-3">
		<label  for="quantity"  class="form-label">Title2</label>
		<input  type="text"  value={{$edit->skill2_txt}}  name="skill2_txt"  class="form-control"  id="quantity"  aria-describedby="emailHelp">
	</div>
	
    {{-- Skill 3 --}}
    <div  class="mb-3">
		<label  for="ingredient"  class="form-label">Skill 3 Pourcentage</label>
		<input  type="number" min="0" max="100"  value={{$edit->skill3}}  name="skill3"  class="form-control"  id="ingredient"  aria-describedby="emailHelp">
	</div>
	<div  class="mb-3">
		<label  for="quantity"  class="form-label">Skill 3 Texte</label>
		<input  type="text"  value={{$edit->skill3_txt}}  name="skill3_txt"  class="form-control"  id="quantity"  aria-describedby="emailHelp">
	</div>
	
    {{-- Skill 4 --}}
    <div  class="mb-3">
		<label  for="ingredient"  class="form-label">Skill 4 Pourcentage</label>
		<input  type="number" min="0" max="100"  value={{$edit->skill4}}  name="skill4"  class="form-control"  id="ingredient"  aria-describedby="emailHelp">
	</div>
	<div  class="mb-3">
		<label  for="quantity"  class="form-label">Skill 4 Texte</label>
		<input  type="text"  value={{$edit->skill4_txt}}  name="skill4_txt"  class="form-control"  id="quantity"  aria-describedby="emailHelp">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection