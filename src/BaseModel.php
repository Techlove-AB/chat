<?php

namespace Musonza\Chat;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class BaseModel extends Model
{
    use Cachable;
    protected $cachePrefix = "vfore";
    protected $tablePrefix = 'chat_';
}
