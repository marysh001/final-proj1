<?
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$response = [
    'id' => $id,
    'name' => $name,
    'age' => $age
    'birthday' =>$birthday
];

header("Content-type: application/json");
echo json_encode($response);


