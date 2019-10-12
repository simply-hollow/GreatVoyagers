<?php

include('./includes/header.php');

?>
<body>
<div class="container-scroller">
  <!-- partial top nav-bar-->
  <?php

    include('./includes/nav.php');

  ?>
  <!-- partial -->

  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php

      include('./includes/sidebar.php');

    ?>    
    <!-- partial -->

    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="mdi mdi-format-list-bulleted"></i>
            </span> Customer Request Generator </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="dropdown">
                <button class="btn btn-block btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Customer Request Generator
                </button>
                <div class="dropdown-menu btn-block color" aria-labelledby="dropdownMenu2">
                  <!-- Package Links  -->
                  <a href="#" class="dropdown-item package1">Visa Only</a>
                  <a href="#" class="dropdown-item package2">Hotel Only</a>
                  <a href="#" class="dropdown-item package3">Cab only</a>
                  <a href="#" class="dropdown-item package4">Flight Only</a>
                  <a href="#" class="dropdown-item package5">International Tour Package</a>
                  <a href="#" class="dropdown-item package6">Domestic Tour Package</a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row form">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
          <br>
      <!-- content-wrapper ends -->

      <!-- partial:partials/_footer.html -->
        <?php

          include('./includes/footer.php');

        ?>
      <!-- partial -->

    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
  <?php
    include('./includes/script.php');
  ?>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package1").click(function(){
            $("div.form").load("includes/taskgeneration/package-1.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package2").click(function(){
            $("div.form").load("includes/taskgeneration/package-2.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package3").click(function(){
            $("div.form").load("includes/taskgeneration/package-3.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package4").click(function(){
            $("div.form").load("includes/taskgeneration/package-4.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package5").click(function(){
            $("div.form").load("includes/taskgeneration/package-5.php");
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".package6").click(function(){
            $("div.form").load("includes/taskgeneration/package-5.php");
        });
    });
  </script>
</body>
</html>