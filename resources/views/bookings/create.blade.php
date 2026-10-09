<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Booking</title>
    <style>
        body { font-family: sans-serif; margin: 30px; background-color: #f9f9f9; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        .btn-kembali { color: #666; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Booking Baru</h2>

        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf <!-- Wajib ada untuk keamanan CSRF Laravel -->
            <div class="form-group">
                <label>Nama Pemesan</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>No HP / WhatsApp</label>
                <input type="text" name="no_hp" required>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" required>
            </div>
            <div class="form-group">
                <label>Jam</label>
                <input type="time" name="jam" required>
            </div>
            <div class="form-group">
                <label>Catatan (Opsional)</label>
                <textarea name="catatan" rows="3"></textarea>
            </div>
            <button type="submit">Simpan Booking</button>
            <a href="{{ route('bookings.index') }}" class="btn-kembali">Batal</a>
        </form>
    </div>
</body>
</html>