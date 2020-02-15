<form action="{{ route('comments.destroy', $comment) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete Comment" class="btn btn-dark">
</form>
