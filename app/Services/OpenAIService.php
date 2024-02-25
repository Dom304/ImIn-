<?php

namespace App\Services;

use App\Http\Controllers\APIController;
use GuzzleHttp\Client;
use App\Models\Job;

class OpenAIService extends APIController
{
  protected $client;
  protected $apiKey;

  public function __construct()
  {
    $this->client = new Client();
    $this->apiKey = env('OPENAI_API_KEY');
  }

  public function recommendCategoriesBasedOnResponses(array $userResponses, array $categories)
  {
    $prompt = $this->formatPrompt($userResponses, $categories);

    try {
      $response = $this->client->post('https://api.openai.com/v1/engines/gpt-3.5-turbo/completions', [
        'headers' => [
          'Authorization' => 'Bearer ' . $this->apiKey,
          'Content-Type' => 'application/json',
        ],
        'json' => [
          'prompt' => $prompt,
          'temperature' => 0.5,
          'max_tokens' => 100,
          'top_p' => 1,
          'frequency_penalty' => 0,
          'presence_penalty' => 0,
        ],
      ]);

      $responseBody = json_decode($response->getBody()->getContents(), true);
      return $responseBody['choices'][0]['text'];
    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
      return 'An error Occured: ' . $e->getMessage();
    }
  }

  protected function formatPrompt(array $userResponses): string
  {
    $categories = OpenAIService::grabCategories();
    $preferences = $this->analyzeResponses($userResponses);
    $categoryList = implode(", ", $categories);

    return "Based on the user's responses, which of the following categories would best suit them for volunteer work: $categoryList?\n\n" .
      "User preferences:\n" .
      "- " . implode("\n- ", $preferences);
  }

  protected function analyzeResponses(array $userResponses): array
  {
    $preferences = [];
    foreach ($userResponses as $questionId => $answer) {
      if ($answer) {
        $preferences[] = "Preference related to question $questionId";
      }
    }
    return $preferences;
  }

  protected function grabCategories()
  {
    return ["Education", "Mentorship", "Community", "Elderly Care", "Animal", "Outdoor", "Medical", "Indoor"];
  }
}
