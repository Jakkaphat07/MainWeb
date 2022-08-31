<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1><p style="text-align:center"> Webboard Jakkaphat </p> </h1>
    <hr width = "100%" size = "2">
    <p align="center"> ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']?></p>
    <table style="border: 2px solid black;  width:40%;" align="center">
        <tr><td style="background-color:#6CD2FE;" colspan="2" align="center"> แสดงความคิดเห็น</td></tr>
        <tr><td align="center"><textarea name="post" rows="10" cols="100" ></textarea></td>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <center><p><a href="index.html">กลับไปหน้าหลัก</a></p></center>
</body>
</html>