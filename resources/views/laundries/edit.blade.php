<h1>Edit Data Laundry</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('laundries.update', $laundry->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>Nama Pelanggan:</label><br>
        <input type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan', $laundry->nama_pelanggan) }}">
    </p>
    <p>
        <label>No. Telepon:</label><br>
        <input type="text" name="no_telepon" value="{{ old('no_telepon', $laundry->no_telepon) }}">
    </p>
    <p>
        <label>Alamat:</label><br>
        <textarea name="alamat">{{ old('alamat', $laundry->alamat) }}</textarea>
    </p>
    <p>
        <label>Berat Cucian (kg):</label><br>
        <input type="number" name="berat" step="0.1" value="{{ old('berat', $laundry->berat) }}">
    </p>
    <p>
        <label>Harga (Rp):</label><br>
        <input type="number" name="harga" value="{{ old('harga', $laundry->harga) }}">
    </p>

    <button type="submit">Update</button>
    <a href="{{ route('laundries.index') }}">Batal</a>
</form>
