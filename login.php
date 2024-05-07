<?php include __DIR__ ."/views/header.php";?>
<main>
<div class="h-100 d-flex justify-content-center">
          <div>
              <form action="login.php" method="post">
              <div class="mb-3 row">
                <label for="staticEmail" class="col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name='emali'class="form-control"  id="staticEmail">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" name='password'class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="mb-3">
              <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
               </div>
              </form>
          </div>
    </div>
    <?php include __DIR__ ."/controll/loginCheck.php";?>
</main>
<?php include __DIR__ ."/views/footer.php";?>
