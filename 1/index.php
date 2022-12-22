<?php
require 'vendor/autoload.php';

use Maxnnn1900\DummyRestApiExample\DummyRestApiExample;
use GuzzleHttp\Client;

$httpClient = new Client([
    'base_uri' => 'https://dummy.restapiexample.com/api/v1/'
]);

$api = new DummyRestApiExample($httpClient);

/*
Задание 1: API. 4 балла
Есть тестовый API сервер dummy.restapiexample.com. Необходимо написать PHP код, который:
- Получает информацию о сотрудниках 
- и возвращает количество сотрудников
- Создает нового сотрудника

1	/employee	    GET	    JSON	https://dummy.restapiexample.com/api/v1/employees	Get all employee data	Details
2	/employee/{id}	GET	    JSON    https://dummy.restapiexample.com/api/v1/employee/1	Get a single employee data	Details
3	/create	        POST	JSON	https://dummy.restapiexample.com/api/v1/create	    Create new record in database	Details
4	/update/{id}	PUT	    JSON	https://dummy.restapiexample.com/api/v1/update/21	Update an employee record	Details
5	/delete/{id}	DELETE	JSON	https://dummy.restapiexample.com/api/v1/delete/2	Delete an employee record	Details
*/

echo "employyes" . PHP_EOL;
$employees = $api->employees();
echo "Количество сторудников: " . count($employees['data']);
echo PHP_EOL;
echo PHP_EOL;

echo "create" . PHP_EOL;
var_dump($api->create("test", "123", "123"));
echo PHP_EOL;
echo PHP_EOL;

// echo "employee" . PHP_EOL;
// var_dump($api->employee(1));
// echo PHP_EOL;
// echo PHP_EOL;


// echo "update" . PHP_EOL;
// var_dump($api->update(1, "test", "123", "123"));
// echo PHP_EOL;
// echo PHP_EOL;

// echo "delete" . PHP_EOL;
// var_dump($api->delete(1));
// echo PHP_EOL;
// echo PHP_EOL;
