<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];
$email=$_POST['email'];

if($pw!=$pwc) // 비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
{
    echo "비밀번호와 비밀번호 확인이 서로 다릅니다.";
    echo "<a href=singUP.html>back page</a>";
    exit();
}
if($id==NULL || $pw==NULL || $name== || $email==NULL)
{
    echo "빈 칸을 모두 채워주세요";
    echo "<a href=singUp.html>back page</a>";
    exit();
}

$mysqli=mysqli_connect("localhost", "root", "Chlwjddnr1!", "test2");

$check="SECECT * from user_info WHERE userid='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{
    echo "중복된 id 입니다.";
    echo "<a href=singUp.html>back page</a>";
    exit();
}

$singup=mysqli_query($mysqli, "INSERT INTO user_info (userid, userpw, name, email)
VALUES ('$id', '$pw', '$name', '$email')";
if($singup){
    echo "sing up success"

}

?>
