@extends('layouts.admin')

@section('content')
    <form action="/about/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="ingredient" class="form-label">Title1</label>
            <input type="text" value={{ $edit->title1 }} name="title1" class="form-control" id="ingredient"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Title2</label>
            <input type="number" value={{ $edit->title2 }} name="title2" class="form-control" id="quantity"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">text1</label>
            <textarea type="text" name="text1" class="form-control" id="image" aria-describedby="emailHelp"
                placeholder="insérez le nom de votre fichier suivi de son extension">{{ $edit->text1 }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="file" name="img" class="form-control" id="img" aria-describedby="emailHelp"
                placeholder="insérez le nom de votre fichier suivi de son extension">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
