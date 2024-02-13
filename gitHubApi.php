<?php

class GitHubAPI
{
    private $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getProjects()
    {
        $url = "https://api.github.com/users/{$this->username}/repos";
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => 'User-Agent: PHP'
            ]
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $projects = json_decode($response, true);

        return $projects;
    }
}


$username = "AlsoTheZv3n"; 
$api = new GitHubAPI($username);
$projects = $api->getProjects();

//  JSON-Output verwenden oder in einem Array weiterverarbeiten
echo json_encode($projects);
