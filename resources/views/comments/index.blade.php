@extends('layouts.app')

@section('content')
    @include('comments.partials.create')
    @foreach($comments as $comment)
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                {{ $comment->user->name }}
                @include('comments.partials.destroy')
            </div>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</h6>
                <p class="card-text">{{ $comment->body }}</p>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-around">
        {{ $comments->links() }}
    </div>
@endsection
