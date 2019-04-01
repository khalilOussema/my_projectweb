<?php
include '../../core/config.php';
$db=config::getConnexion();
$req="SELECT * FROM `produit` ORDER BY `produit`.`categorie` ASC";
$req2="SELECT * FROM `produit` ORDER BY `produit`.`categorie` DESC";
if(isset($_POST['tri']))
{
  $list=$db->query($req);
}
else if(isset($_POST['tria']))
{
  $list=$db->query($req2);
}
else $list=$db->query("SELECT * FROM `produit`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>GAMER</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">0</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 0 pending tasks</p>
              </li>
              <li>
              </li>        
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">0</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 0 new messages</p>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">0</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 0 new notifications</p>
              </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/achref.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Game Club</h5>
          <li class="mt">
            <a href="ajoutproduit.php">
              <i class="fa fa-dashboard"></i>
              <span>Ajouter un Produit</span>
              </a>
          </li>
          <li class="mt">
            <a class="active" href="affichageproduit.php">
              <i class="fa fa-cogs"></i>
              <span>Afficher mes produits</span>
            </a>
          </li>
          <li class="mt">
            <a href="ajoutercategorie.php">
              <i class="fa fa-book""></i>
              <span>Ajouter catégorie</span>
            </a>
          </li>
           <li class="mt">
            <a href="affichagecategorie.php">
              <i class="fa fa-dashboard"></i>
              <span>Afficher mes catégories</span>
              </a>
          </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Le stock</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> La liste des produits en stock</h4>
              <hr>
              <form method="POST">
                <button type="submit" name="tri"><i class="fa fa-angle-up"></button>
                <button type="submit" name="tria"><i class="fa fa-angle-down"></button>
              </form>
              <table class="table">
                <thead>
                  <tr>
                    <th>Nom du produit</th>
                    <th>Auteur</th>
                    <th>prix</th>
                    <th>description</th>
                    <th>quantite</th>
                    <th>catégorie</th>
                    <th>image</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($list as $row)
                  {
                                                     $e=$row['image'];
                                                     $img=explode("$$$$",$e);
                                                     $image=$img['0'];
                                                     $p='<img width="50" heigth="50" src="data:/image;base64,'.$image.'">';
                  ?>
                  <tr>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['auteur']; ?></td>
                    <td><?php echo $row['prix']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['categorie']; ?></td>
                    <td><?php echo $p; ?></td>
                    <td><a href="deleteproduct.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o "></a></td>
                    <td><a href="modifierproduct.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil"></i></a></td>
                    <td> <form method="POST" action="augmenter.php">
                    <input type="hidden" name="idd" id="idd" value="<?php echo $row['id'];?>">

                    <input type="number" name="number" id="number" class="form-control">
                    <input type="submit" name="augmenter" value="augmenter">
                  </form></td>
                  <?php if($row['stock']<5){
                    ?>
                  <td><i class="fa fa-warning"></td>
                  <?php
                  }
                ?>
                  </tr>
                 
<?php
                }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        
          <!-- /col-md-12 -->
        </div>

      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Notre  <strong>DashGamer</strong>
        </p>
        <div class="credits">
        </div>
        <a href="index.html" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
 
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
    <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/fifa.jpg", {
      speed: 1000
    });
  </script>
  
</body>

</html>