<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\OpenAIService;

class OpenAIServiceTest extends TestCase
{
    public function testRecommendCategoriesBasedOnResponses()
    {
        // Mocking user responses and categories
        $userResponses = [
            'question1' => true,
            'question2' => false,
            // Add more responses as needed
        ];

        $categories = ["Education", "Mentorship", "Community", "Elderly Care", "Animal", "Outdoor", "Medical", "Indoor"];

        // Create an instance of OpenAIService
        $openAIService = new OpenAIService();

        // Call the method you want to test
        $response = $openAIService->recommendCategoriesBasedOnResponses($userResponses, $categories);

        // Assert that the response is not empty
        $this->assertNotEmpty($response);

        // Output the response
        echo $response;
    }
}
