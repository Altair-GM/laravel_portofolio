@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>

            <tr>
                <th>Title</th>
                <th>Text</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr>
                    <td>{{ $work->title1 }}</td>
                    <td>{{ $work->txt }}</td>
                    <td><img src="{{ asset('/storage/'.$work->img) }}" alt=""></td>
                    <td>
                        <a href="{{ route('works.edit', $work->id) }}">Edit</a>
                        <form action="{{ route('works.delete', $work->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
