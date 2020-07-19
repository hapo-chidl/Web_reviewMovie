
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
      $comments =  "SELECT *FROM comments where IdMovie = $id1 ORDER BY cmt_id DESC";
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
                    <img width='80%' src='image/$avater' class='main-cmt-img'>
                  </div>
                  <div class='col-lg-10 col-9 user-comment bg-light rounded pb-1'>
                       <div class='row'>
                             <div class='col-lg-8 col-6 border-bottom pr-0'>
                                <p class='w-100 p-2 m-0'><b> $body</b></p>
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



if (!isset($_POST['submit'])) {
    die('');
}
if($_SESSION['UsernameUser'] == NULL)
 {echo "Ban chưa đăng nhập. sai rồi nhé :) <a href='login.html'> Đăng Nhập</a>";
    exit;
}
else   $name =  $_SESSION['UsernameUser'];
$sql =  "SELECT *FROM User_ where UsernameUser like '%$name%'";
      $params = array();
        $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
        $query1 = sqlsrv_query($conn, $sql, $params, $options);
$row = sqlsrv_fetch_array($query1);
$IdUser= $row['IdUser'] ;

  $id1 = $_GET['id'];
if(isset($_POST['submit'])) {
  $avater = $_POST['avater'];
  $comment = $_POST['comment'];
  $date=date('Y-m-d H:i:s');
 $query = "INSERT INTO comments (IdUser,IdMovie,cmt_name,cmt_avater, cmt_body, cmt_date) 
Values ('{$IdUser}','{$id1}','{$name}', '{$avater}', N'{$comment}', '{$date}')";
 $params = array();
  $addcamnhan = sqlsrv_query( $conn, $query, $params);


 echo "     <div class='row'>
        <div class='col-lg-9 offset-lg-2 col-12 comment-main rounded'>
          <ul class='p-0'>
            <li class='wow fadeInUp'>
                <div class='row comment-box p-2 pt-4 pr-5'>
                  <div class='col-lg-2 col-3 user-img text-center'>
                    <img width='80%' src='image/$avater' class='main-cmt-img'>
                  </div>
                  <div class='col-lg-10 col-9 user-comment bg-light rounded pb-1'>
                       <div class='row'>
                             <div class='col-lg-8 col-6 border-bottom pr-0'>
                                <p class='w-100 p-2 m-0'><b> $comment</b></p>
                             </div>
                            
                       </div> 
                      <div class='user-comment-desc p-1 pl-2'>
                          <p class='m-0 mr-2'  >$name   at $date</p>                      
                                                
                      </div>    
                  </div>
                </div>
            
                
            </li>
          </ul>
      </div>
    </div>
  ";



}

?>



