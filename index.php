<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
      margin: 0px ;
      color: blue;
    }
    .A{
      margin-left: 30rem;   
      margin-top: 10rem;
      border: 1px solid blue;
      width: 400px;
      height: 30px;
      text-align: center;
      color: blue;
      background-color: #34ebe8;
    }

    h2{
      margin: 0;
    }

    .B{
      margin-left: 30rem;   
      border: 1px solid blue;
        width: 400px;
        margin-top: 1rem;
        background-color: #34ebe8;
    }

    .C{
    text-align: center;
    }

  </style>
  <title>registration.html(BT244)</title>
</head>
<body>
  
    <div class="A">
      <h2>User Registration</h2>
    </div>
    <div class="B" >
      <table>
        <tr>
          <td>
            User ID:
          </td>
          <td>
            <input type="text" name="id">
          </td>
        </tr>
        <tr>
          <td>
            Password:
          </td>
          <td>
            <input type="password" name="password">
          </td>
        </tr>
        <tr>
          <td>
            Confirm Password:
          </td>
          <td>
            <input type="password" name="confirm-password">
          </td>
        </tr>
        <tr>
          <td>
            Existing E-mail ID:
          </td>
          <td>
            <input type="text" name="emai">
          </td>
        </tr>
        <tr>
          <td>
            Confirm Existing E-mail ID:
          </td>
          <td>
            <input type="text" name="confirm-Emai">
          </td>
        </tr>
        <tr>
          <td>
              
          </td>
          <td class="C">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="submit" value="Reset">
          </td>
        </tr>
      </table>
    </div>
  

</body>
</html>