@extends('layouts.base')
@section('content')

<div class="container">
    <h2 class="page-title">SKRD <a class="btn btn-primary" href="{{ route('skrd.create') }}">Buat Baru</a></h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Retribusi</th>
                <th>NJOP</th>
                <th>Nominal</th>
                <th>Denda</th>
                <th>Total</th>
                <th>Jatuh Tempo</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <td>
                <a class="" href="{{ $item['permalink'] }}">
                    {{ $item['nomor_urut'] }}
                </a>
            </td>
            <td>{{ $item['nama_retribusi'] }}</td>
            <td>{{ $item['njop'] }}</td>
            <td>{{ $item['nominal_retribusi'] }}</td>
            <td>{{ $item['denda_retribusi'] }}</td>
            <td>{{ $item['total_retribusi'] }}</td>
            <td>{{ $item['jatuh_tempo'] }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $data->links() }}
    </div>
</div>

@stop
