<?php

declare(strict_types=1);

namespace Maxnnn1900\DummyRestApiExample;

class DummyRestApiExample
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    protected function employees()
    {
        return $this->client->get('employees');
    }

    protected function employee(int $id)
    {
        return $this->client->get('employee/' . $id);
    }

    protected function create(string $name, string $salary, string $age)
    {
        return $this->client->post('create', [
            'json' => [
                'name' => $name,
                'salary' => $salary,
                'age' => $age
            ]
        ]);
    }

    protected function update(int $id, string $name, string $salary, string $age)
    {
        return $this->client->put('update/' . $id, [
            'json' => [
                'name' => $name,
                'salary' => $salary,
                'age' => $age
            ]
        ]);
    }

    protected function delete(int $id)
    {
        return $this->client->delete('delete/' . $id);
    }

    public function __call(string $method, array $args): array
    {
        if (!method_exists($this, $method)) throw new \BadMethodCallException;

        if (empty($args)) {
            $response = $this->$method();
        }

        $response = $this->$method(...$args);

        return json_decode($response->getBody()->getContents(), true);
    }
}
