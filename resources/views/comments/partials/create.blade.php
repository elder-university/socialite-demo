<form action="{{ route('comments.store') }}" method="POST" class="mb-4">
    @csrf
    <div class="form-group">
        <label for="body">Comment</label>
        <textarea name="body" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
    </div>
</form>
