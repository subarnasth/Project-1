<?php include('../admin/partials/menu.php')?>;

    <!-- Main content-->
    <div class="main-content">
    <div class="wrapper">
        <h1>DASHBOARD</h1>

        <br><br>

        <?php
             
       if(isset($_SESSION['login']))
       {
        echo $_SESSION['login']; 
        unset($_SESSION['login']); 
       }
       ?>

       <br><br>

        <div class="col-4 text-center">
          <h1>5</h1>
          <br/>  
          Categories
        </div>

        <div class="col-4 text-center">
          <h1>5</h1>
          <br/>  
          Categories
        </div>

        <div class="col-4 text-center">
          <h1>5</h1>
          <br/>  
          Categories
        </div>

        <div class="col-4 text-center">
          <h1>5</h1>
          <br/>  
          Categories
        </div>
        <div class="clearfix"></div>
    </div>
    <!--Main content -->

  <?php include("../admin/partials/footer.php")?>;
</body>
</html>
