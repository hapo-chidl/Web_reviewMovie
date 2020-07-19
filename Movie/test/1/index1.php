<?php 
 session_start(); 

require("connect.php");
 $name =  $_SESSION['UsernameUser'];
  $id1 = $_GET['id'];
if(isset($_POST['submit'])) {
  $avater = $_POST['avater'];
  $comment = $_POST['comment'];
  $date=date('Y-m-d H:i:s');

  $query = "INSERT INTO comments (IdMovie,cmt_name,cmt_avater, cmt_body, cmt_date) 
Values ('{$id1}','{$name}', '{$avater}', '{$comment}', '{$date}')";
 $params = array();
  $addcamnhan = sqlsrv_query( $conn, $query, $params); 
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Commenting System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cool/animate.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container">

      <div class="col-lg-9 offset-lg-2 col-12 comment-main rounded">
        <form ation="" method="post">
        <div class="form-gtoup">
          <label>Select Avater</label>
        <table width="100%" align="center">
          <tr>
          <td width="10%"><input type="radio" name="avater" value="boy.png" required><img src="image/boy.png" width="40"></td>
          <td width="10%"><input type="radio" name="avater" value="boy-1.png" required><img src="image/boy-1.png" width="40"></td>
          <td width="10%"><input type="radio" name="avater" value="girl-3.png" required><img src="image/girl-3.png" width="40"></td>
          <td width="10%"><input type="radio" name="avater" value="girl-4.png" required><img src="image/girl-4.png" width="40"></td>
        </tr>
        </table>
        </div>
        <div class="form-gtoup">
          <label>Your Comment:</label>
        <textarea name="comment" class="form-control" rows="8"> </textarea>
        </div>
        <br>
        <button name="submit" type="submit" class="btn btn-primary btn-block"><b>Submit Comment</b></button>
        </form>
      </div>



      <?php 

      $comments =  "SELECT *FROM comments where IdMovie like '%$id1%' ORDER BY cmt_id DESC";
      $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $comments, $params, $options);
      while($row = sqlsrv_fetch_array($query1)) {
        $name = $row['cmt_name'];
        $avater = $row['cmt_avater'];
        $body = $row['cmt_body'];
        $date = $row['cmt_date'];
 echo "     <div class='row'>
        <div class='col-lg-9 offset-lg-2 col-12 comment-main rounded'>
          <ul class='p-0'>
            <li class='wow fadeInUp'>
                <div class='row comment-box p-2 pt-4 pr-5'>
                  <div class='col-lg-2 col-3 user-img text-center'>
                    <img src='image/ $avater ' class='main-cmt-img'>
                  </div>
                  <div class='col-lg-10 col-9 user-comment bg-light rounded pb-1'>
                       <div class='row'>
                             <div class='col-lg-8 col-6 border-bottom pr-0'>
                                <p class='w-100 p-2 m-0'><b> $body</b></p>
                             </div>
                             <div class='col-lg-4 col-6 border-bottom'>
                                <p class='w-100 p-2 m-0'><span class='float-right'><i class='fa fa-clock-o mr-1' aria-hidden='true'></i>$date</span></p>
                             </div>
                       </div> 
                      <div class='user-comment-desc p-1 pl-2'>
                          <p class='m-0 mr-2'>$name</p>                      
                                                
                      </div>    
                  </div>
                </div>
            
                
            </li>
          </ul>
      </div>
    </div>
  ";
}
echo "<script src='cool/wow.min.js'></script>
              <script> ";
              new WOW().init(); 
       echo "    </script>";
echo "
</body>
</html>";
?>
