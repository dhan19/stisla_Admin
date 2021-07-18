<?php

namespace App\Repositories;

use App\Models\Truck;
use App\Repositories\BaseRepository;

/**
 * Class TruckRepository
 * @package App\Repositories
 * @version July 17, 2021, 12:58 pm UTC
*/

class TruckRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'payload',
        'cargobox',
        'type',
        'driver',
        'vehicle',
        'images'
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
        return Truck::class;
    }
}
