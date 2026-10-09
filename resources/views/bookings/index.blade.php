<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Booking</title>
    <style>
        body { font-family: sans-serif; margin: 30px; background-color: #f9f9f9; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; display: inline-block; }
        .btn-tambah { background: #007bff; color: white; }
        .btn-edit { background: #ffc107; color: black; }
        .btn-hapus { background: #dc3545; color: white; border: none; cursor: pointer; padding: 6px 12px; border-radius: 4px; }
        .alert { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Jadwal Booking</h2>
        <a href="{{ route('bookings.create') }}" class="btn btn-tambah">+ Tambah Booking</a>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <!-- Tabel Data -->
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                <tr>
                    <td>{{ $booking->nama }}</td>
                    <td>{{ $booking->no_hp }}</td>
                    <td>{{ $booking->tanggal }}</td>
                    <td>{{ $booking->jam }}</td>
                    <td><b>{{ $booking->status }}</b></td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-edit">Edit</a>
                        
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data booking.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>