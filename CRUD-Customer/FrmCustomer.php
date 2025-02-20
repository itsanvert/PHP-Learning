<?php
include "cCustomer.php";
if (isset($_POST["btnInsert"])) {
  $cusName = $_POST["txtName"];
  $cusSex = $_POST["cboSex"];
  $cusPhone = $_POST["txtTelephone"];
  $cusAddress = $_POST["txtAddress"];

  $ncustomer = new cCustomer();
  $ncustomer->setCustomer($cusName, $cusSex, $cusPhone, $cusAddress); // Corrected variable name
  $ncustomer->insertCustomer();
  echo "Your data has been inserted";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Customer</title>
</head>

<body>
  <div style="justify-items: center">
    <div style="padding: 100px; border-radius: 10px; border: 1px solid #ccc;">
      <h2>Insert Customer</h2>
      <form method="post">
        <table>
          <tr>
            <td>ID:</td>
            <td><input type="text" name="txtcusId" disabled /></td> <!-- Consider how to handle ID -->
          </tr>
          <tr>
            <td>Customer Name:</td>
            <td><input type="text" name="txtName" required /></td> <!-- Added required attribute -->
          </tr>
          <tr>
            <td>Sex:</td>
            <td>
              <select name="cboSex" required>
                <option value="">Select Sex</option> <!-- Added default option -->
                <option value="Male">Male</option>
                <option value="Female">Female</option> <!-- Corrected value -->
              </select>
            </td>
          </tr>
          <tr>
            <td>Telephone:</td>
            <td><input type="text" name="txtTelephone" required /></td> <!-- Added required attribute -->
          </tr>
          <tr>
            <td>Address:</td>
            <td><input type="text" name="txtAddress" required /></td> <!-- Added required attribute -->
          </tr>
          <tr>
            <td align="right" colspan="2">
              <input type="submit" value="Insert" name="btnInsert" />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>

</html>