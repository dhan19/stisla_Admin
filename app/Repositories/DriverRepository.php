<?php

namespace App\Repositories;

use App\Models\Driver;
use App\Repositories\BaseRepository;

/**
 * Class DriverRepository
 * @package App\Repositories
 * @version July 17, 2021, 1:10 pm UTC
*/

class DriverRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'vehicle_no',
        'vehicle_type',
        'address',
        'driving_license',
        'image',
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
        return Driver::class;
    }
}
