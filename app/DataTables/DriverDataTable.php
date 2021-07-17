<?php

namespace App\DataTables;

use App\Models\Driver;

/**
 * Class DriverDataTable
 */
class DriverDataTable
{
    /**
     * @return Driver
     */
    public function get()
    {
        /** @var Driver $query */
        $query = Driver::query()->select('drivers.*');

        return $query;
    }
}
