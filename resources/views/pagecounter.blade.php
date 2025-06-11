@extends('template')

@section('content')
<div class="container-fluid py-3" style="display:flex; align-items:center; background-color:rgb(214, 255, 214); color:darkgreen; justify-content:center; font-weight:bold; font-size:1.2rem;">
    Anda Pengunjung ke: {{ $pagecounter->Jumlah }}
</div>
@endsection
