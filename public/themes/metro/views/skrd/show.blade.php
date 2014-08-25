@extends('layouts.base')
@section('content')
    <div class="container page">
        <h2 class="page-title">Detil SKRD</h2>
        <div class="btn-group mb">
            <a class="btn btn-default" target="_blank" href="{{ route('skrd.pdf', ['id' => $item['id']]) }}"><i class="fa fa-print"></i> Print</a>
        </div>
        <div class="well">
        <dl class="">
            <dt>Nomor</dt>
            <dd>{{ $item['nomor_urut'] }}</dd>
            <dt>Nama Wajib Retribusi</dt>
            <dd>{{ $item['nama_retribusi'] }}</dd>
            <dt>Alamat</dt>
            <dd>{{ $item['alamat_retribusi'] }}</dd>
            <dt>Jenis retribusi yang dibayarkan</dt>
            <dd>{{ $item['jenis_retribusi'] }}</dd>
            <dt>Alamat Obyek Retribusi</dt>
            <dd>{{ $item['alamat_obyek'] }}</dd>
            <dt>Nomor Obyek Pajak (PBB)</dt>
            <dd>{{ $item['nomor_obyek'] }}</dd>
            <dt>NPWRD</dt>
            <dd>{{ $item['npwrd'] }}</dd>
            <dt>Tahun</dt>
            <dd>{{ $item['tahun'] }}</dd>
            <dt>NJOP</dt>
            <dd>{{ $item['njop'] }}</dd>
            <dt>Persen Retribusi</dt>
            <dd>{{ $item['persen_retribusi'] }}</dd>
            <dt>Nominal Retribusi</dt>
            <dd>{{ $item['nominal_retribusi'] }}</dd>
            <dt>Denda Retribusi</dt>
            <dd>{{ $item['denda_retribusi'] }}</dd>
            <dt>Total Retribusi</dt>
            <dd>{{ $item['total_retribusi'] }}</dd>
            <dt>Jatuh Tempo</dt>
            <dd>{{ $item['jatuh_tempo'] }}</dd>
        </dl>
        </div>

    </div>
@stop