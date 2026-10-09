<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
        <style>
        body { font-family: sans-serif; margin: 30px; background-color: #f9f9f9; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #ffc107; color: black; border: none; padding: 9px 16px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-kembali { color: #666; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Booking</h2>

        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Mengubah request POST menjadi PUT untuk Update -->

            <div class="form-group">
                <label>Nama Pemesan</label>
                <input type="text" name="nama" value="{{ $booking->nama }}" required>
            </div>

            <div class="form-group">
                <label>No HP / WhatsApp</label>
                <input type="text" name="no_hp" value="{{ $booking->no_hp }}" required>
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ $booking->tanggal }}" required>
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input type="time" name="jam" value="{{ substr($booking->jam, 0, 5) }}" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status">
                    <option value="menunggu" {{ $booking->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="selesai" {{ $booking->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="batal" {{ $booking->status == 'batal' ? 'selected' : '' }}>Batal</option>
                </select>
            </div>

            <div class="form-group">
                <label>Catatan (Opsional)</label>
                <textarea name="catatan" rows="3">{{ $booking->catatan }}</textarea>
            </div>

            <button type="submit">Update Booking</button>
            <a href="{{ route('bookings.index') }}" class="btn-kembali">Batal</a>
        </form>
    </div>
</body>
</html>