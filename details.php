<?php
// db connection 
include "lib/connection.php";

if( isset($_GET ['id']) ){

  $d_id = $_GET ['id'];
  $select_sql = " SELECT * FROM news WHERE id = $d_id ";

  $s_sql =  $conn -> query($select_sql);
  
  if ($s_sql -> num_rows > 0 ){

    while ($final = $s_sql -> fetch_assoc()){
?>

<?php  include "header.php"  ?>
    <!-- header end -->

    <!-- detail news start -->
    <section class="education">
      <div class="container">

        <div class="row">
          <div class="col-lg-8">
            <div class="c_news text-left details">
              <i class="<?php echo $final ['icon']; ?>" aria-hidden="true"></i>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">category</a></li>
                <li class="list-inline-item"><a href="#">author</a></li>
              </ul>

              <h2><?php echo $final ['title']; ?></h2>
              <p> <?php echo $final ['description']; ?> </p>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar bg-dark text-white">
              <p>sidebar content</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- detail news end -->

    <!-- category start -->
    <section class="category">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="c_title text-center">
              <h1>Popular Categories</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit. </p>
              <hr class="w-25 m-auto">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-rocket" aria-hidden="true"></i>
              </a>
              <h3>tech</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-book" aria-hidden="true"></i>
              </a>
              <h3>education</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-thermometer-full" aria-hidden="true"></i>
              </a>
              <h3>weather</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-user-md" aria-hidden="true"></i>
              </a>
              <h3>health</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-university" aria-hidden="true"></i>
              </a>
              <h3>economy</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-bicycle" aria-hidden="true"></i>
              </a>
              <h3>sports</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- category end -->

    <!-- footer start -->
   <?php  include "footer.php"; ?>

    
    <!-- JS links -->
    <script src="vendor/js/popper.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/script.js"></script>
  </body>
</html>

<?php
    }
  }else{
    header("location:index.php");
  }
}else{
  header("location:index.php");
}

?>