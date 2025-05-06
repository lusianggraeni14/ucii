<h1>Daftar Laundry</h1>

<a href="{{ route('laundries.create') }}">+ Tambah Data</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Telepon</th> 
        <th>Alamat</th>
        <th>Berat (kg)</th>
        <th>Harga (Rp)</th>
        <th>Aksi</th>
    </tr>
    @foreach($laundries as $laundry)
    <tr>
        <td>{{ $laundry->nama_pelanggan }}</td>
        <td>{{ $laundry->no_telepon }}</td>
        <td>{{ $laundry->alamat }}</td>
        <td>{{ $laundry->berat }}</td>
        <td>{{ $laundry->harga }}</td>
        <td>
            <a href="{{ route('laundries.edit', $laundry->id) }}">Edit</a> |
            <a href="{{ route('laundries.show', $laundry->id) }}">Detail</a> |
            <form action="{{ route('laundries.destroy', $laundry->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
