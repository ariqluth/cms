@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
    <div class="float-left mb-4 ">
        <a class="btn btn-success" href="{{ route('articles.create') }}"> Create a new article</a>
        <a class="btn btn-warning" href="{{ route('cetak_pdf') }}"> Compress PDF</a>
    </div>
        <table class="table table-bordered" style="width:95%;margin: 0
        auto;">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        <td><a href="{{ route('articles.edit', ['article' => $article->id]) }}"> {{ $article->title }}</a></td>
        <td>{{ $article->content }}</td>
        <td><img width="150px" src="{{asset('storage/'.$article->freatured_image)}}"></td>

    </tr>
    @endforeach
</table>
@endsection