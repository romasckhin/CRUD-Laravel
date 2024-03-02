<div class="main__article__box">
    <div>{{$id}}</div>
    <div>{{$name}}</div>
    <div>{{$age}}</div>
    <div>{{$description}}</div>
    <a href="{{ route('article', $id) }}"><button>more</button></a>
</div>