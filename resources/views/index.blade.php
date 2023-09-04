@extends('layouts.master')
@section('content')

    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-6">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                      alt="..."/></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$article->updated_at}}</div>
                        <h2 class="card-title h4">{{$article->title}}</h2>
                        <p class="card-text">{{$article->slug}}</p>
                        <a class="btn btn-primary" href="/articles/{{$article->slug}}">Read more →</a>
                    </div>
                </div>

            </div>
        @endforeach
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
