<?php include __DIR__ ."/views/header.php";
      session_start();
      if(!isset($_SESSION["emali"])){
            header('Location: login.php');
      }
      session_destroy();
?>
<main>
      <div class="container text-center">
            <div class="row">
                  <?php include __DIR__ ."/controll/seam.php";
                  echo $finalTeamplete;
                  ?>
            </div>
      </div>  
</main>
<?php include __DIR__ ."/views/footer.php";?>