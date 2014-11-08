@extends('site.layouts.default')

{{-- Content --}}
@section('content')
@foreach ($items as $item)
<h1>url</h1>{{{ $item->url() }}}
<h1>item name</h1>{{ String::title($item->name) }}
<h1>description</h1>{{ String::tidy(Str::limit($item->description, 200)) }}
<h1>username</h1>{{{ $item->author->username }}}
<h1>date</h1>{{{ $item->date() }}}
<h1>comments</h1>{{$item->comments()->count()}}
<h1>comments count</h1>{{ \Illuminate\Support\Pluralizer::plural('Comment', $item->comments()->count()) }}

@endforeach

{{ $items->links() }}

@stop
