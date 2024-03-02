@extends('templates.main')

@section('main')
    <h2>Articles</h2>
    <div class="main__article">
        @foreach ($articles as $item)
            @include('components.articles',[
                'id' => $item['id'],
                'name' => $item['name'],
                'age' => $item['age'],
                'description' => $item['description']
            ])
        @endforeach
    </div>
@endsection