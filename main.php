<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정보 관리 시스템</title>
</head>
<body>
    <h1>회원 관리시스템</h1>
    <a href="select.php">(1) 회원 조회 (조회 후 수정/삭제 가능)</a><br><br>
    <a href="insert.php">(2) 신규 회원 등록</a><br><br>
<FORM METHOD="get" ACTION="update.php">
    (3) 회원 수정 - 회원 아이디 : <INPUT TYPE = "text" NAME="userID">
    <INPUT TYPE="submit" VALUE="수정">
</FORM>
<form method="get" action="delete.php">
    (4) 회원 삭제 - 회원 아이디 : <input type="text" name="userID">
    <input type="submit" VALUE="삭제">
</form>    

</body>
</html>
