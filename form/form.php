<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisration Form</title>
</head>

<body>
    <center>
        <h2>Regisration Form</h2>
        <hr width=50%>
        <form method="POST" action="./register.php">
            <table>
                <tr>
                    <td>First-Name</td>
                    <td><input type="text" name="txtFirstName"></td>
                </tr>
                <tr>
                    <td>Lastname-Name</td>
                    <td><input type="text" name="txtLastName"></td>
                </tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td>
                        <select name="cboDay">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>

                        </select>

                        <select name="cboMonth">
                            <option value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>

                        </select>


                        <select name="cboYear">
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                        </select>
                    </td>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="txtPassword"></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>

        </form>
    </center>
</body>

</html>