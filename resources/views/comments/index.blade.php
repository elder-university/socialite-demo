@extends('layouts.app')

@section('content')
    @include('comments.partials.create')
    <hr>
    @each('comments.partials.index-item', $comments, 'comment')
    <div class="d-flex justify-content-around">
        {{ $comments->links() }}
    </div>
@endsection
