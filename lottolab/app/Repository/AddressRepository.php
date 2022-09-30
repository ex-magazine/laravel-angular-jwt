<?php

namespace App\Repository;

use App\Models\Address;

class AddressRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Address::class;
    }
}
