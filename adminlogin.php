<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .bg {
            background-image: url('images/login4.jpg');
            background-size: cover;
            background-position: center;
        }
        
        .title {
            font-size: 24px;
            font-weight: bold;
        }
        
        .text {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid;
            border-radius: 4px;
        }
        
        .btn {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="bg">
    <div style="padding-top:100px;"></div>

    <form action="afterlogin.php" method="post">
        <table border="0" align="center" bgcolor="white" width="40%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15">
            <tr align="center">
                <td class="title">ADMIN LOGIN HERE</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="aid" value="admin" placeholder="Enter Admin ID" class="text" required></td>
            </tr>
            <tr align="center">
                <td><input type="password" name="pass" value="admin" placeholder="Enter Password" class="text" required></td>
            </tr>
            <tr align="center">
                <td><input type="submit" name="s" value="Login Now" class="btn"></td>
            </tr>
        </table>
    </form>
</body>
</html>
