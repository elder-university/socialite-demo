<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        {{ $comment->user->name }}
        @can('destroy', $comment)
            @include('comments.partials.destroy')
        @endcan
    </div>
    <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</h6>
        <p class="card-text">{{ $comment->body }}</p>
    </div>
</div>
