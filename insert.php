<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>신규 회원 입력</title>
</head>
<body>
    <h1>신규 회원 입력</h1>
    <FROM METHOD="post" ACTION="insert_result.php">
        아이디 : <Input TYPE="text" NAME="userID"> <br>
        이름 : <INPUT TYPE="text" NAME="name"> <br>
        출생년도 : <input type="text" NAME="birthYear"><br>
        지역 : <input type="text" NAME="address"><br>
        <BR></BR>
        <input type="submit" VALUE="회원 입력">
    </FROM>
</body>
</html>
