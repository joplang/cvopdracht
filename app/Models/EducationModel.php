<?php

namespace App\Models;

use App\Models\Model;

class EducationModel extends Model
{
    protected $model = "educations";

    protected $limit;

    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];


    public static function load()
    {
        return new static;
    }

    public function __construct()
    {
        parent::__construct(
            $this->model,
            $this->limit,
            $this->protectedFields
        );
    }
}
