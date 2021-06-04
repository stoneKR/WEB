<?php

 

    include("config.php");  //DB연결을 위한 config.php를 로딩합니다.

    session_start();   //세션의 시작

 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    $myusername=addslashes($_POST['username']); // addslashes 'or '' 앞에 \를 붙임

    $mypassword=addslashes($_POST['password']); // 사유는 찾아보기 바람


    $sql="SELECT id FROM ING_Login WHERE username='$myusername' and passcode='$mypassword'";

    $result=mysql_query($sql);

    //$row=mysql_fetch_array($result);

    //$active=$row['active'];

 

    $count=mysql_num_rows($result);

 

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다. 

    {

        //session_register("myusername"); // php 5.2.8 -> php 5.3.8 버전 업데이트 후 사용하지 않음

        $_SESSION['login_user']=$myusername;

 

        header("location: welcome.php");  // welcome.php 페이지로 넘깁니다.

    }

    else 

    {

        $error="Your Login Name or Password is invalid";

    }

}

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> <!--utf-8설정-->

<title>Login Page</title>

</head>

 

<br>

<br>

<CENTER>아이디와 패스워드를 입력해주세요</b></div>

<form action="" method="post">

<label>아 이 디   :</label><input type="text" name="username" class="box"/><br>

<label>패스워드 :</label><input type="password" name="password" class="box" />

<center><input type="submit" value="로그인"/><br />

</form>

</body>

 

</html>



