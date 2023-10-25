<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Libraries\UnitService;
use CodeIgniter\Config\Factories;
use CodeIgniter\View\RendererInterface;

class UnitsController extends BaseController
{   
    /** @var UnitSerice */
    private UnitService $unitService;

    /** construtor */
    public function __construct()
    {
        $this->unitService = Factories::class(UnitService::class);
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
            'units' => $this->unitService->renderUnits()
        ];
        

        return view('Back/Units/index', $data);
    }
}
