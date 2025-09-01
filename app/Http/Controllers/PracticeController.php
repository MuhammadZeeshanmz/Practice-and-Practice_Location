<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Services\PracticeService;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
      protected $practiceService;
    public function __construct(PracticeService $practiceService)
    {
        return $this->practiceService = $practiceService;
    }
    public function index()
    {
        $practice = Practice::with('locations')->get();
        return $practice;
    }

    public function store(Request $request)
    {
       
        try {
            $query = $this->practiceService->createPractice($request);
            return $query;
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function update(Request $request, $id){
        $query = $this->practiceService->updatePractice($request, $id);
        return $query;
    }
    public function destroy($id){
        $query = Practice::findOrFail($id);
        $query->delete();
    }
    public function show($id){
        $query = Practice::with(['locations', 'notes', 'alerts'])->findOrFail($id);
        return $query;
    }
}

