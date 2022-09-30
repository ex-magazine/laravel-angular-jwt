<?php

namespace App\Repository;

use App\Models\Attachment;

class AttachmentRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attachment::class;
    }
}
