<!DOCTYPE html>
<html>

<head>
    <title>Edit Item</title> <!-- menetapkan judul halaman -->
</head>

<body> <!-- bagian isi halaman -->
    <h1>Edit Item</h1> <!-- judul utama halaman -->

    <!-- form untuk mengedit item -->
    <form action="{{ route('items.update', $item) }}" method="POST">

        @csrf <!-- Token CSRF untuk mengamankan form -->
        @method('PUT') <!-- Menggunakan method PUT untuk pembaruan -->

        <label for="name">Name:</label> <!-- label untuk input nama -->
        <input type="text" name="name" value="{{ $item->name }}" required>
        <!-- input field untuk nama dengan nilai default dari item yang sedang diedit -->
        <br> <!-- baris baru -->

        <label for="description">Description:</label> <!-- label untuk input deskripsi -->
        <textarea name="description" required>{{ $item->description }}</textarea>
        <!-- text area untuk deskripsi dengan nilai default dari item -->
        <br> <!-- baris baru -->

        <button type="submit">Update Item</button> <!-- tombol untuk mengirim form dan memperbarui item -->
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> <!-- link untuk kembali ke daftar item -->
</body>

</html> <!-- menutup tag HTML -->