<?php
namespace Buzz\Skrd;

use Eloquent;
use Laracasts\Presenter\PresentableTrait;
use Robbo\Presenter\Robbo;

class Skrd extends Eloquent implements \Robbo\Presenter\PresentableInterface
{
    use PresentableTrait;

    protected $presenter = 'Buzz\Skrd\Presenter';

    protected $table = 'skrd';

    protected $guarded = ['id'];

    protected $dates = ['jatuh_tempo', 'tanggal_surat'];

    public function getPermalinkAttribute()
    {
        return route('skrd.show', ['id' => $this->id]);
    }

    /**
     * Return a created presenter.
     *
     * @return Robbo\Presenter\Presenter
     */
    public function getPresenter()
    {
        return new Presenter($this);
    }
}