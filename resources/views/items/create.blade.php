<!DOCTYPE html>
<html>

<head>
    <title>Add Item</title>
</head>

<body>
    <h1>Add Item</h1>
    <!-- form untuk menambahkan item -->
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <!-- token csrf untuk mengamankan form -->
        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" required> <!-- input field untuk nama, wajib diisi -->
        <br> <!-- baris baru -->
        <label for="description">Description:</label> <!-- Label untuk input nama -->
        <textarea name="description" required></textarea> <!-- input field untuk nama, wajib diisi -->
        <br> <!-- baris baru -->
        <button type="submit">Add Item</button>
    </form>
    <a href="{{ route('items.index') }}">Back to List</a>
    <!-- link untuk kembali ke halaman utama -->
</body>

</html>