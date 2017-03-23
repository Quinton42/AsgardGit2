<?php namespace Modules\Block\Entities;

use Illuminate\Database\Eloquent\Model;

class BlockTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['online', 'body', 'block_title', 'block_description'];
    protected $table = 'block__blocks_translations';
}
