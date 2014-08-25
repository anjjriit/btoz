<?php


namespace Buzz\Skrd;


class Presenter extends \Robbo\Presenter\Presenter
{

    public function presentNjopFormatted()
    {
        return number_format($this->njop, 0, ',', '.');
    }

    public function presentNominalRetribusiFormatted()
    {
        return number_format($this->nominal_retribusi, 0, ',', '.');
    }

    public function presentDendaRetribusiFormatted()
    {
        return number_format($this->denda_retribusi, 0, ',', '.');
    }

    public function presentTotalRetribusiFormatted()
    {
        return number_format($this->total_retribusi, 0, ',', '.');
    }

    public function presentJatuhTempoFormatted()
    {
        return tanggal($this->jatuh_tempo->format('d M Y'));
    }

    public function presentTanggalSuratFormatted()
    {
        return tanggal($this->tanggal_surat->format('d M Y'));
    }
}