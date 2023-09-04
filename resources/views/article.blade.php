@extends('layouts.master')
@section('content')

    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                          alt="..."/></a>
        <div class="card-body">
            <div class="small text-muted">{{$article->updated_at}}</div>
            <h2 class="card-title">{{$article->title}}</h2>
            <p class="card-text">{{$article->body}}</p>
        </div>
<label>دسته بندی مقالات</label>
        <ul>

            @foreach($article->categories()->get() as $category)
                <li>
                    {{$category->name}}
                </li>
            @endforeach

        </ul>
    </div>

@endsection

@section('sidebar')
    <div class="card mb-4">
        <div class="card-header">articles</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!">article 1</a></li>
                        <li><a href="#!">article 2</a></li>
                        <li><a href="#!">article 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @parent

@endsection
