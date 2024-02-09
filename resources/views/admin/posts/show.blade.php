@extends('layouts.admin')



@section('content')
<h1>{{$post->title}}</h1>
<p>{{$post->content}}</p>
<a href="{{route('admin.posts.index')}}" class="btn btn-secondary">Torna alla lista</a>
@endsection