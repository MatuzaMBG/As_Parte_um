<form action="{{ url('diretor') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="name" placeholder="Name" required>
    <button type="submit">Create Product</button>
</form>