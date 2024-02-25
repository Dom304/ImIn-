<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class User
{
  public int $user_id;
  public string $username;
  public string $first_name;
  public string $last_name;
  public string $email;
  public string $password;
  public string $role;
  public array $jobs_added;
  public array $jobs_taken;

  public function __construct(
    $user_id = null,
    $username = null,
    $first_name = null,
    $last_name = null,
    $email = null,
    $password = null,
    $role = null,
    $jobs_added = null,
    $jobs_taken = null,
  ) {
    $this->user_id = $user_id ?? 0;
    $this->username = $username ?? '';
    $this->first_name = $first_name ?? '';
    $this->last_name = $last_name ?? '';
    $this->email = $email ?? '';
    $this->password = $password ?? '';
    $this->role = $role ?? '';
    $this->jobs_added = $jobs_added ?? [];
    $this->jobs_taken = $jobs_taken ?? [];
  }

  public static function is_user($username, $password)
  {
    $json_data = file_get_contents(env('JSON_USER_PATH'));
    $users = json_decode($json_data, true);

    foreach ($users as $user) {
      if ($user['username'] === $username) {
        if ($user['password'] == $password) {
          Session::put('user_id', $user['user_id']);
          return true;
        }
        break;
      }
    }
    return false;
  }

  public  static function user_login($username, $password)
  {
    $is_user = User::is_user($username, $password);
    if ($is_user) {
      Session::put('username', $username);
      Session::put('password', $password);

      return true;
    } else {
      return false;
    }
  }

  public static function get_user_info($user_id)
  {
    $json_data = file_get_contents(env('JSON_USER_PATH'));
    $users = json_decode($json_data, true);

    $user = null;

    foreach ($users as $user) {
      if ($user['user_id'] === $user_id) {
        $user = new User(
          $user['$user_id'] ?? null,
          $username['username'] ?? null,
          $first_name['first_name'] ?? null,
          $last_name['last_name'] ?? null,
          $email['email'] ?? null,
          $password['password'] ?? null,
          $role['role'] ?? null
        );
      }
    }
    return $user;
  }

  public static function updateUserJobsAdded($jobId)
  {
    $userId = Session::get('user_id');

    $json_data = file_get_contents(env('JSON_USER_PATH'));
    $users = json_decode($json_data, true);

    foreach ($users as $user) {
      if ($user['user_id'] == $userId) {

        $user['jobs_added'][] = $jobId;
        $updatedUserData = json_encode($users, JSON_PRETTY_PRINT);
        file_put_contents('./Data/user.json', $updatedUserData);

        return true;
      }
    }
    return false;
  }

  public static function questions()
  {
  }
}
