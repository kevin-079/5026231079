@extends('template')

@section('content')
    <h3>👨‍💼 Karyawan</h3>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Divisi</th>
            <th class="text-center">Departemen</th>
            <th class="text-center">Action</th>


        </tr>
        @foreach ($karyawan as $ka)
            <tr>
                <td>{{ $ka->kodepegawai }}</td>
                <td class="text-center">{{ strtoupper($ka->namalengkap) }}</td>
                <td class="text-center">{{ $ka->divisi }}</td>
                <td class="text-center">{{ strtolower($ka->departemen) }}</td>
                <td class="text-center">
                    <form action="{{ url('/karyawan/hapus/' . $ka->kodepegawai) }}?page={{ request()->get('page') }}"
                        method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/karyawan/tambah?page={{ request()->get('page') }}" class="btn btn-primary">+ Tambah Karyawan</a>
    <div class="d-flex justify-content-center mt-3">

        {{ $karyawan->links() }}
    @endsection
