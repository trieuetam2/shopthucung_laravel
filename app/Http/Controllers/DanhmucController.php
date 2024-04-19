<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhmuc;

use App\Repositories\IDanhmucRepository;

class DanhmucController extends Controller
{

    private $DanhmucRepository;

    public function __construct(IDanhmucRepository $DanhmucRepository) {
        $this->DanhmucRepository = $DanhmucRepository;
    }

    public function index(){
        $Danhmucs = $this->DanhmucRepository->allDanhmuc();

        return view('Danhmucs.index', ['Danhmucs' => $Danhmucs]);
    }


}
