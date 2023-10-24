<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Models\UnitModel;

class UnitsController extends BaseController
{   
    private $unitModel;

    public function __construct()
    {
        $this->unitModel = model(UnitModel::class);
    }

    /**
     * Renderiza a view para gerenciar as unidades
     *
     * @return RendererInterface
     */
    public function index()
    {
        $data = [
            'title' => 'Unidades',
            'units' => $this->unitModel->findAll(),
        ];

        return view('Back/Units/index', $data);
    }
}
