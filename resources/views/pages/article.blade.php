@extends('templates.main')

@section('main')
    <h2>Article</h2>
    @foreach ($article as $item)
        @include('components.article',[
            'id' => $item['id'],
            'name' => $item['name'],
            'age' => $item['age'],
            'description' => $item['description'],
        ])
    @endforeach
@endsection