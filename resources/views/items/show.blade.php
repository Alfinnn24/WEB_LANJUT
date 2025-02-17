<!DOCTYPE html>
<html>

<head>

    <title>Item List</title> <!-- menetapkan judul halaman -->
</head>

<body> <!-- bagian isi halaman -->
    <h1>Items</h1> <!-- judul utama halaman -->

    @if(session('success')) <!-- mengecek apakah ada pesan sukses dalam sesi -->
        <p>{{ session('success') }}</p> <!-- menampilkan pesan sukses jika ada -->
    @endif <!-- menutup blok kondisi -->

    <a href="{{ route('items.create') }}">Add Item</a> <!-- link untuk menambahkan item baru -->

    <ul> <!-- membuka daftar tidak berurut -->
        @foreach($items as $item) <!-- melakukan iterasi untuk setiap item dalam daftar -->
            <li> <!-- setiap item ditampilkan dalam elemen daftar -->
                {{ $item->name }} <!-- menampilkan nama item -->

                <a href="{{ route('items.edit', $item) }}">Edit</a> <!-- link untuk mengedit item -->

                <!-- form untuk menghapus  -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    
                    @csrf <!-- token csrf untuk mengamankan form -->
                    @method('DELETE') <!-- mengubah metode request menjadi DELETE untuk menghapus data -->
                    <button type="submit">Delete</button> <!-- tombol untuk menghapus item -->
                </form>
            </li> <!-- menutup elemen daftar untuk satu item -->
        @endforeach <!-- menutup perulangan -->
    </ul> <!-- menutup daftar tidak berurut -->
</body>

</html> <!-- menutup tag HTML -->