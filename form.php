<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>

<h2 align="center" >Login</h2>
<form method="POST" action ="formproses.php">
<form>
    <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
            <td width="130">
                <label for="username">Username</label>
            </td>
            <td>
                <input type="text" id="username" name="username">
            </td>
        </tr>
        <tr>
            <td width="130">
                <label for="email">Email</label>
            </td>
            <td>
                <input type="email" id="email" name="email">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Login">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
