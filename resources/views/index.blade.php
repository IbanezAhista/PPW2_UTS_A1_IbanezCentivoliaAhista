@extends('layouts.master')

@section('title', 'Daftar Pemain MU')

@section('content')
    <div class="about-section">
    @foreach($data_pemain as $pemain)
                <tr>
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $buku->harga }}</td>
                </tr>
    @endforeach
    </div>
@endsection
