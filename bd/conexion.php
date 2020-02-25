
<!-- Conection with mysqli, recommend to only one type of bd -->

<?php 

$conn =  new mysqli("localhost", "root", "", "crud_vue");

if($conn->connect_error){
  die("Conection Failed!" .$conn->connect_error);
}

$result = array('error'=>false);
$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

if($action == 'read'){
    $sql = $conn->query("SELECT * FROM usuarios");
    $users = array();
    while($row = $sql->fetch_assoc()){
        array_push($users, $row);
    }
    $result['usuarios'] = $users;

    $users = array();
    while($row = $sql->fetch_assoc()){
        array_push($users, $row);
    }
    $result['usuarios'] = $users;
}

if($action == 'create'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = $conn->query("INSERT * FROM usuarios (name,email,phone)
    VALUES('$name', '$email', '$phone')");

    if($sql){
        $result['message'] = "User added successfully";
    }
    else{
        $result['error'] = true;
        $result['message'] = "failed to add user";
    }
}

if($action == 'update'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = $conn->query("UPDATE usuarios SET name='$name', email='$email', phone='$phone' WHERE id='$id')
    VALUES('$name', '$email', '$phone')");

    if($sql){
        $result['message'] = "User updated successfully";
    }
    else{
        $result['error'] = true;
        $result['message'] = "failed to updated user";
    }
}

if($action == 'delete'){
    $id = $_POST['id'];


    $sql = $conn->query("DELETE FROM usuarios WHERE id='$id')
    VALUES('$name', '$email', '$phone')");

    if($sql){
        $result['message'] = "User deleted successfully";
    }
    else{
        $result['error'] = true;
        $result['message'] = "failed to deleted user";
    }
}


$conn->close();
echo json_encode($result);

/* echo "Exito! Se estableció una conexión con la base de datos" . PHP_EOL; */



?>