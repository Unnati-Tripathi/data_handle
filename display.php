<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <h2>Display Student Details</h2>
    <div class="table_container">
      <table class="table">
        <thead>
          <tr>
            <th>Sl No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Place</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php

include ("connect.php");
$select_query="select * from crud";
$result=mysqli_query($con,$select_query);
if(($result)){
// nikal to liya ab table me bhi daal le..
  while($row=mysqli_fetch_assoc($result)){ // 1st entry ab kabu me h.. array ke form me saari info isme aa gai..
  $id=$row['id'];
  $username=$row['userName'];
  $email=$row['email'];
  $phone=$row['phone'];
  $address=$row['address'];
  // echo $id;
  // echo $username;
  // echo $email;
  // echo $phone;
  // echo $address;
     echo   "  <tr>
            <td>$id</td>
            <td>$username</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$address</td>
            <td>
              <a href='update.php?update_id=$id'
                ><i class='fa-solid fa-pen-to-square'></i
              ></a>
              <a href='delete.php'><i class='fa-solid fa-trash'></i></a>
            </td>
          </tr> ";
  }

}
else {die(mysqli_error($con));}
?>
          
        </tbody>

        <tbody></tbody>
      </table>
    </div>
    
  </body>
</html>
