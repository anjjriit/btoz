@extends('layouts.base')

@section('content')
<div class="container page">
    <div class="mb">
        <a class="btn-link" href="{{ route('skrd.index') }}">&laquo; Kembali</a>
    </div>

    <h2 class="page-title ac">Form SKRD</h2>
{{ BootForm::openHorizontal(3, 9)->action(route('skrd.store')) }}
    {{ BootForm::select('Jenis Retribusi', 'nama_retribusi', ['Retribusi Pengendalian Menara Telekomunikasi' => 'Retribusi Pengendalian Menara Telekomunikasi']) }}
    {{ BootForm::text('Nomor Urut', 'nomor_urut') }}
    {{ BootForm::text('Tanggal Surat', 'tanggal_surat') }}
    {{ BootForm::text('Tahun', 'tahun') }}
    {{ BootForm::text('Nama Wajib Retribusi', 'nama_retribusi') }}
    {{ BootForm::text('Alamat', 'alamat_retribusi') }}
    {{ BootForm::text('Alamat Obyek Retribusi', 'alamat_obyek') }}
    {{ BootForm::text('Nomor Obyek Pajak (PBB)', 'nomor_obyek') }}
    {{ BootForm::text('NPWRD', 'npwrd') }}
    {{ BootForm::text('NJOP', 'njop') }}
    {{ BootForm::text('Persentase', 'persen_retribusi') }}
    {{ BootForm::text('Denda', 'denda_retribusi') }}
    {{ BootForm::text('Jatuh Tempo', 'jatuh_tempo') }}
    {{ BootForm::submit('Submit') }}
{{ BootForm::close() }}

</div>

@stop