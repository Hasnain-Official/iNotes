<head>
<style>
body{
  background-image:url('sticky-notes_orig.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}
</style>
</head>



<?php  




if (isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true) {
  $loggedin=true;
}
else
{
  $loggedin=false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">iNotes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/CRUD/login1.php">Home <span class="sr-only">(current)</span></a>';
        if(!$loggedin){
      echo '</li>
      <li class="nav-item">
        <a class="nav-link" href="/CRUD/login1.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/CRUD/signup1.php">Sign-up</a>
      </li>';
    }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/CRUD/logout1.php">logout</a>
      </li>';
    }
   echo '
    </form>
  </div>
</nav>'
?>