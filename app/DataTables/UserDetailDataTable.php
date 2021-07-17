<?php

namespace App\DataTables;

use App\Models\UserDetail;

/**
 * Class UserDetailDataTable
 */
class UserDetailDataTable
{
    /**
     * @return UserDetail
     */
    public function get()
    {
        /** @var UserDetail $query */
        $query = UserDetail::query()->select('user_details.*');

        return $query;
    }
}
