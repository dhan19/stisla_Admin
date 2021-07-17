<?php

namespace App\Repositories;

use App\Models\UserDetail;
use App\Repositories\BaseRepository;

/**
 * Class UserDetailRepository
 * @package App\Repositories
 * @version July 17, 2021, 1:05 pm UTC
*/

class UserDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'gender',
        'phone_no',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserDetail::class;
    }
}
