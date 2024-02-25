<?php

namespace App\Models;


use Illuminate\Support\Facades\Session;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;


class Job
{
    public int $id;
    public string $title;
    public string $description;
    public string $status;
    public string $category;
    public string $tags;

    public function __construct(
        int $id = null,
        string $title = null,
        string $description = null,
        string $status = null,
        string $category = null,
        string $tags = null
    ) {
        $this->id = $id ?? 0;
        $this->title = $title ?? '';
        $this->description = $description ?? '';
        $this->status = $status ?? '';
        $this->category = $category ?? [];
        $this->tags = $tags ?? [];
    }

    public static function list()
    {
        $json_data = file_get_contents('./Data/jobs.json');
        $jobsData = json_decode($json_data, true);

        $jobs = [];
        foreach ($jobsData as $jobData) {
            $job = new Job(
                $jobData['id'],
                $jobData['title'],
                $jobData['description'],
                $jobData['status'],
                $jobData['category'],
                $jobData['tags']
            );
            $jobs[] = $job;
        }

        return $jobs;
    }

    public static function chatgpt_list(array $personality)
    {
    }

    public static function create($title, $description, $status, $category, $tags)
    {
        $jobData = [
            "title" => $title,
            "description" => $description,
            "status" => $status,
            "category" => $category,
            "tags" => $tags
        ];
        $jsonData = file_get_contents('./Data/jobs.json');
        $jobs = json_decode($jsonData, true);
        $jobs[] = $jobData;
        $newJsonData = json_encode($jobs, JSON_PRETTY_PRINT);

        $success = file_put_contents('./Data/jobs.json', $newJsonData) !== false;
        return $success;
    }
}
