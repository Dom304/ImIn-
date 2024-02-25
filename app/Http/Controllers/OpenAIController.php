<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIService;

class OpenAIController extends APIController
{
  protected $openAIService;

  public function __construct(OpenAIService $openAIService)
  {
    $this->openAIService = $openAIService;
  }

  public function analyze(Request $request)
  {
    $data = $request->validate([
      'questionnaire' => 'required|string',
    ]);

    $analysis = $this->openAIService->analyzeQuestionnaire($data['questionnaire']);

    return response()->json($analysis);
  }
}
