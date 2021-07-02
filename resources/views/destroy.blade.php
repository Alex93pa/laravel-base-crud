<form class="delete-btn" action="{{ route('destroy', $id) }}" method="post">
    @csrf

    @method("DELETE")

    <input type="submit" value="Delete">

</form>