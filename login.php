<?php
if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $query = "SELECT * FROM `login` WHERE username = '".$username."' and password = '".$password."' and usertype = '".$usertype."'";
    $result = mysqli_query($connection, $query);
  }
  if($result){
    while($row = mysqli_fetch_array($result)){
      echo'<script type="text/javascript">alert("Login Successful")</script>';
    }
  
    if ($usertype=="admin"){
     ?>
     <script type="text/javascript">
      window.location.href = "http://student.amphibistudio.sg/10195010B/ddwa-asg1/admin_page/admin.php"
  </script>;
  <?php
    }else if ($usertype=="student"){
        ?>
     <script type="text/javascript">
      window.location.href = "http://student.amphibistudio.sg/10195010B/ddwa-asg1/student_page/user.php/"
  </script>
  <?php
   }
  } else{
    echo("no results");
  }


?>
