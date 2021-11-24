<?php 

header('Access-Controll-Allow-Origin:*');
header('Content-Type:applicion/json');
header('Access-Controll-Allow-Methods:POST');
header('Access-Controll-Allow-Headers:Content-Type,Access-Controll-Allow-Headers,Authorization,X-Request-With');

error_reporting(0);
$data = json_decode(file_get_contents("php://input"));

include("db.php");

if($data->name == ""){
    echo json_encode([
        'status' => 'faild',
        'msg' => 'Name not provied'
    ]);

}elseif($data->email == ""){
    echo json_encode([
        'status' => 'faild',
        'msg' => 'Email not provied'
    ]);
}elseif($data->password == ""){
    echo json_encode([
        'status' => 'faild',
        'msg' => 'Password not provied'
    ]);
}
else{
    $sql = "INSERT INTO users(name,email,password) VALUES('$data->name','$data->email','$data->password')";

    $result = mysqli_query($conn,$sql);
    if($result){
        echo json_encode([
            'status' => 'success',
            'msg' => 'Data inserted successfully'
        ]);
    }else{
        echo json_encode([
            'status' => 'faild',
            'msg' => 'Not inserted'
        ]);
    }
}




?>
