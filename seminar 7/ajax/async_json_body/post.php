<?

$data = json_decode(file_get_contents('php://input'));

$response = [

    'id' => $data->id,
    'name' => $data->name,
    'age' => $data->age,
    'birthday' => $data->birthday,
];

header("Content-type: application/json");
echo json_encode($response);
