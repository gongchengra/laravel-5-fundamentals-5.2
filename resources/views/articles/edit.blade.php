@extends('app')

@section('content')

<h1>Edit: {{ $article->title }}</h1>

<hr>

{!! Form::model($article, ['method' => 'patch', 'action' => ['ArticleController@update', $article->id]]) !!}
@include('articles.form', ['submitBtnText' => 'Update Article'])
{!! Form::close() !!}

@include('errors.list')
@endsection
