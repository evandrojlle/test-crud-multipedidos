<?php

namespace App\Http\Models;

class User extends BaseModel
{
    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'password',
        'created_at',
        'updated_at',
    ];

    public function fetchRowsPaginate(int $pQtdItemsPerPage = 20)
    {
        $fetchRows = self::select('users.*', 'departments.department', 'offices.ds_office')
        ->join('departments', 'departments.idDepartment', '=', 'users.idDepartment')
        ->join('offices', 'offices.idOffice', '=', 'users.idOffice')
        ->where('users.idStatus', '=', '1')
        ->orderBy('ds_user', 'ASC')
        ->paginate($pQtdItemsPerPage);

        return $fetchRows;
    }
}
