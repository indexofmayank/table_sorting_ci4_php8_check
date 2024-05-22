<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MemberModel;

class MemberController extends BaseController
{   
    public function __construct(){
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $sortColumn = $this->request->getGet('sort_column') ?? 'm_id';
        $sortDirection = $this->request->getGet('sort_direction') ?? 'ASC';

        $data = [
            "members" => $this->memberModel->orderBy($sortColumn, $sortDirection)->findAll(),
            "sort_column" => $sortColumn,
            "sort_direction" => $sortDirection
        ];

        return view('MemberTable', $data);
    }
}
