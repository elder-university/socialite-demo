<div class="card mb-4">
    <div class="card-header">Create a Comment</div>
    <div class="card-body">
        <form action="{{ route('comments.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="form-group">
                <textarea rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</div>
