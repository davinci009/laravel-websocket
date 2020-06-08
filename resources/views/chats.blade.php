@extends('layouts.app')

@section('content')
<div class="container">
    <chats :user="{{ auth()->user() }}" :datos="{{ json_encode(['datos' => 'mis datos']) }}"></chats>
</div>
@endsection
