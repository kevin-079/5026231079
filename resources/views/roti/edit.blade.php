@extends('template')

@section('content')
    <!DOCTYPE html>
<html>
<head>
  <title>Edit Roti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <div class="card p-4 shadow-sm">
    <h4 class="mb-4 text-warning fw-bold">✏️ Edit Roti</h4>
    <form action="/roti/update" method="POST">
      @csrf
      <input type="hidden" name="ID" value="{{ $roti->ID }}">
      <div class="mb-3">
        <label class="form-label">Merk Roti</label>
        <input type="text" name="merkroti" class="form-control" value="{{ $roti->merkroti }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Harga (Rp)</label>
        <input type="number" name="hargaroti" class="form-control" value="{{ $roti->hargaroti }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Berat (gram)</label>
        <input type="number" name="berat" class="form-control" value="{{ $roti->berat }}" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Tersedia</label>
        <select name="tersedia" class="form-select">
          <option value="1" {{ $roti->tersedia ? 'selected' : '' }}>Ya</option>
          <option value="0" {{ !$roti->tersedia ? 'selected' : '' }}>Tidak</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="/roti" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
</body>
</html>
@endsection
