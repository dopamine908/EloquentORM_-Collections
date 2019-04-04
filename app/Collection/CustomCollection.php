<?php

namespace App\Collection;

use Illuminate\Database\Eloquent\Collection;

/**
 * 自定義collection
 * extend Illuminate\Database\Eloquent\Collection
 *
 * Class CustomCollection
 * @package App\Collection
 */
class CustomCollection extends Collection
{
    /**
     * 取得userid = 1 的post
     *
     * @return static
     */
    public function user1()
    {
        return $this->where('UserId', '=', 1);
    }

    /**
     * 取得userid = 2 的post
     *
     * @return static
     */
    public function user2()
    {
        return $this->where('UserId', '=', 2);
    }
}
