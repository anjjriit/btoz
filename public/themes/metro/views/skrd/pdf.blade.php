@extends('layouts.pdf')
@section('content')

    <table cellpadding="0" cellspacing="0">
        <tr>
            <td class="ac border" style="width: 35%;padding: 10px">
                <img src="{{ theme_asset('img/logo-sragen-bw.png') }}" height="50px" alt=""/>

                <h3 style="font-size: 12px;line-height: 9px;margin-top: 3px">
                <div style="font-size: 11px">PEMERINTAH KABUPATEN SRAGEN</div>
                <br/>DINAS PERHUBUNGAN, KOMUNIKASI DAN INFORMATIKA
                </h3>
                <div style="line-height: 10px">
                    Jl. KH Agus Salim 13 Sragen
                    <br/>Telp. (0271) 891077
                </div>
            </td>
            <td class="border ac" style="width: 35%; padding: 10px">
                <h1 style="font-size: 3em; margin-bottom: 15px">SKRD</h1>
                <h4>SURAT KETETAPAN RETRIBUSI DAERAH</h4>
                <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="width:100px">Masa Retribusi</td>
                    <td style="width: 10px">:</td>
                    <td>1 (satu) Tahun</td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td>{{ $item['tahun'] }}</td>
                </tr>
                </table>
            </td>
            <td class="border ac">
                <br/>
                <br/>
                No. Urut
                <table class="nomor" style="width: 120px;margin: auto">
                    <tr>
                        @foreach(str_split($item['nomor_urut']) as $char)
                        <td class="border ac">{{ $char }}</td>
                        @endforeach
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" class="border" style="padding: 20px">
                <table>
                    <tr><td style="width:200px">Nama Wajib Retribusi</td><td style="width:10px">:</td><td>{{ $item['nama_retribusi'] }}</td></tr>
                    <tr><td>Alamat</td><td>:</td><td>{{ $item['alamat_retribusi'] }}</td></tr>
                    <tr><td>Jenis retribusi yang dibayarkan</td><td>:</td><td><b>{{ $item['jenis_retribusi'] }}</b></td></tr>
                    <tr><td>Alamat Obyek Retribusi</td><td>:</td><td>{{ $item['alamat_obyek'] }}</td></tr>
                    <tr><td>Nomor Obyek Pajak (PBB)</td><td>:</td><td>{{ $item['nomor_obyek'] }}</td></tr>
                    <tr><td>NPWRD</td><td>:</td><td>{{ $item['npwrd'] }}</td></tr>
                </table>

                <br/>
                <br/>

                <table class="rincian" cellpadding="2" cellspacing="0" style="width: 100%">
                    <tr>
                        <th style="width: 30px">NO</th>
                        <th>RETRIBUSI YANG HARUS DIBAYARKAN</th>
                        <th style="width:120px">JUMLAH (RP)</th>
                    </tr>
                    <tbody>

                    <tr class="row">
                        <td class="ac">1</td>
                        <td>Jumlah Ketetapan Retribusi {{ $item['persen_retribusi'] }}% dari NJOP Bangunan</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr class="row">
                        <td>&nbsp;</td>
                        <td class="ar">{{ $item['persen_retribusi'] }}% x Rp {{ $item['njop_formatted'] }}</td>
                        <td class="ar">{{ $item['nominal_retribusi_formatted'] }}</td>
                    </tr>
                    <tr class="row">
                        <td class="ac">2</td>
                        <td>Jumlah Sanksi/Denda</td>
                        <td class="ar">{{ $item['denda_retribusi_formatted'] }}</td>
                    </tr>
                    <tr class="row">
                        <td class="ac">3</td>
                        <td>Jumlah Keseluruhan</td>
                        <td class="ar"><b>{{ $item['total_retribusi_formatted'] }}</b></td>
                    </tr>
                    </tbody>
                    <tr>
                        <td colspan="3" class="border" style="padding: 5px 20px">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>TERBILANG (Dengan Huruf):</td>
                                    <td>{{ strtoupper(terbilang($item['total_retribusi'])) }} RUPIAH</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <br/>
                <br/>

                <h4>CATATAN :</h4>
                <table class="small">
                    <tr>
                        <td>1</td>
                        <td>Tanggal jatuh tempo pembayaran: {{ $item['jatuh_tempo_formatted'] }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pembayaran melewati tanggal jatuh tempo dikenakan sanksi denda sebesar 2% setiap bulan.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Penyetoran dilakukan melalui rekening Kas Daerah Kabupaten Sragen pada nomor rekening 1.03.48.33 dengan menggunakan slip SSRD</td>
                    </tr>
                </table>

                <br/>
                <br/>

                <h4>DASAR PENETAPAN RETRIBUSI :</h4>
                <table class="small">
                    <tr>
                        <td>a.</td>
                        <td>Peraturan Daerah Kabupaten Sragen Nomor 1 Tahun 2012 Tentang Retribusi Jasa Umum.</td>
                    </tr>
                    <tr>
                        <td>b.</td>
                        <td>Peraturan Bupati Sragen Nomor 24 Tahun 2013 tentang Petunjuk Pelaksanaan Peraturan Daerah Kabupaten Sragen Nomor 1 Tahun 2012 tentang Retribusi Jasa Umum Khususnya Pengendalian Menara telekomunikasi.</td>
                    </tr>
                </table>

                <br/>
                <br/>

                <table>
                    <tr>
                        <td style="width: 400px">&nbsp;</td>
                        <td class="ac">
                            Sragen, {{ $item['tanggal_surat_formatted'] }}
                            <br/>KEPALA DINAS PERHUBUNGAN
                            <br/>KOMUNIKASI DAN INFORMATIKA
                            <br/>KABUPATEN SRAGEN
                            <br/>
                            <br/>
                            <br/>
                            <div><b class="underline">HERU MARTONO, SH.</b></div>
                            <div>Pembina Tingkat I</div>
                            <div>NIP. 19383848392 392 9299</div>
                        </td>
                        <td style="width:20px">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

@stop