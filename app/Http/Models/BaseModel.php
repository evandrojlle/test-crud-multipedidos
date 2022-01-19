<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package App\Models
 * @method void byIdCustomer(int $idCustomer)
 * @method void byIdentityId(int $idCustomer)
 */
class BaseModel extends Model
{
    /**
     * @param Builder $query
     * @param int $identityId
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeByIdentityId(Builder $query, int $identityId): Builder
    {
        $table = $query->getModel()->getTable();
        $id = "id" . substr(\ucfirst($table), 0, (strlen($table) -1));

        $query->where("{$table}.{$id}", '=', $identityId);

        return $query;
    }

    /**
     * 
     */
    public function scopeDebugSql($model)
    {
        $query = str_replace(['%', '?'], ['%%', '\'%s\''], $model->toSql());
        $query = vsprintf($query, $model->getBindings());

        return $query;
    }
}