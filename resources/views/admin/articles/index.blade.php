@extends('layouts.master')

@section('content')

    <table class="table">
        <thead>

        <tr>
            <th>ردیف</th>
            <th>عنوان</th>
            <th>
                <button class="btn btn-info"><a href="/admin/articles/create">ایجاد مقاله جدید</a></button>
            </th>
            <th>عملیات</th>
        </tr>
        </thead>

        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>
                <td>
                    <form action="/admin/articles/{{$article->slug}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">حذف</button>
                    </form>
                </td>
                <td>
                    <form action="/admin/articles/{{$article->slug}}/edit" method="post">
                        @csrf
                        @method('get')
                        <button class="btn btn-info">ویرایش</button>
                    </form>
                </td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
