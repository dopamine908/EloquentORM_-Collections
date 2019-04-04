<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Collection\CustomCollection;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'OneToManyPost';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'OneToManyPostId';

    /**
     * 如果你需要使用自己擴充的方法來自訂 Collection 物件
     * 可以在你的模型上覆寫 newCollection 方法
     *
     * @param array $models
     * @return CustomCollection
     */
    public function newCollection(array $models = [])
    {
        /**
         * 回傳自定義collection
         */
        return new CustomCollection($models);
    }
}
