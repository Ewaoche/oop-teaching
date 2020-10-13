<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<!-- here is what am expecting from index.php code  -->
<!-- stdClass Object ( [id] => 1 [username] => ewaoche [password] => ewa12345 [email] => rad@mail.com [firstname] => Emmanuel [midlename] => Mathew [lastname] => Emmy ) -->
<!-- so i will include it here  to have access to it just that  instead of this -->

<!-- public function getAllUsers()
    {
      $getAllUsers = mysqli_query($this->conn, "SELECT * FROM $this->tablename");
      $getAllUsers = mysqli_fetch_object($getAllUsers);
      return $getAllUsers;
    } -->



    <!-- i will use  -->
 <!-- public function getAllUsers()
    {
      $getAllUsers = mysqli_query($this->conn, "SELECT * FROM $this->tablename");
      return $getAllUsers;
    } -->
   
<?php include('index.php');
$db = new Database();
$getAllUsers = $db->getAllUsers();
print_r($getAllUsers);


?>

    <div class="container">
        <div class="row">
            <table style="width:100%">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>email</th>
                </tr>
                <?php while($getAllUser = mysqli_fetch_object($getAllUsers)):?>
                <tr>
                    <td><?php echo $getAllUser->username ?></td>
                    <td><?php  echo $getAllUser->lastname ?></td>
                    <td> <?php  echo $getAllUser->email ?></td>
                </tr>
                <?php endwhile?>

<!-- i commmented this becouse i only need one tr to do my loop -->
                <!-- <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                </tr> -->
            </table>
        </div>
    </div>

<!--cdn bootstrap files so  you need internet -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>