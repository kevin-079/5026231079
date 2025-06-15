@extends('template')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Header -->
            <div class="mb-4">
                <h3 class="mb-3">Tambah Data Karyawan</h3>
                <a href="/karyawan" class="btn btn-info"> Kembali</a>
            </div>

            <!-- Form Card -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form action="/karyawan/store" method="POST" id="kipasForm">
                        @csrf

                        <!-- Kode -->
                        <div class="mb-3 row align-items-center">
                            <label for="kode" class="col-sm-3 col-form-label fw-semibold">Kode Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror"
                                    id="kode" value="{{ old('kode') }}" placeholder="Masukkan kode karyawan" required>
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    <script>alert("{{ $message }}");</script>
                                @enderror
                            </div>
                        </div>

                        <!-- Nama -->
                        <div class="mb-3 row align-items-center">
                            <label for="nama" class="col-sm-3 col-form-label fw-semibold">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" value="{{ old('nama') }}" placeholder="Masukkan nama karyawan" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Divisi -->
                        <div class="mb-3 row align-items-center">
                            <label for="divisi" class="col-sm-3 col-form-label fw-semibold">Divisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="divisi" class="form-control @error('divisi') is-invalid @enderror"
                                    id="divisi" value="{{ old('divisi') }}" placeholder="Masukkan divisi" required>
                                @error('divisi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Departemen -->
                        <div class="mb-3 row align-items-center">
                            <label for="departemen" class="col-sm-3 col-form-label fw-semibold">Departemen</label>
                            <div class="col-sm-9">
                                <input type="text" name="departemen" class="form-control @error('departemen') is-invalid @enderror"
                                    id="departemen" value="{{ old('departemen') }}" placeholder="Masukkan departemen" required>
                                @error('departemen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Toggle Aktif -->
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-3 col-form-label fw-semibold">Status Aktif</label>
                            <div class="col-sm-9">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="statusToggle" name="status" checked onchange="updateToggleLabel(this)">
                                    <label class="form-check-label toggle-status" id="toggleLabel" for="statusToggle">Tersedia</label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                <i class="bi bi-plus-circle me-2"></i>Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
.toggle-status {
    transition: color 0.3s ease;
}
.custom-control-input:checked ~ .custom-control-label .toggle-status {
    color: #28a745 !important;
}
.custom-control-input:not(:checked) ~ .custom-control-label .toggle-status {
    color: #dc3545 !important;
}
.card {
    border: none;
    border-radius: 12px;
}
.card-body {
    border-radius: 12px;
}
.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}
.btn-primary {
    background: linear-gradient(45deg, #0d6efd, #0b5ed7);
    border: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}
@media (max-width: 576px) {
    .container {
        padding: 0 15px;
    }
    .card-body {
        padding: 1.5rem !important;
    }
}
</style>

<!-- Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    window.updateToggleLabel = function(toggle) {
        const label = document.getElementById('toggleLabel');
        if (toggle.checked) {
            label.textContent = 'Tersedia';
            label.style.color = '#28a745';
        } else {
            label.textContent = 'Tidak Tersedia';
            label.style.color = '#dc3545';
        }
    };
});
</script>

@endsection
