<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link href="//fonts.googleapis.com/css?family=Heebo:300" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Exo" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <?php include("cld_admin/header.php"); ?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <ol class="breadcrumb">
          <li><a href="admin.php"><i class="fa fa-dashboard"></i>Accueil</a></li>
          <li class="active">Modifier</li>
        </ol>
      </h1>



      <section class="agile-volt">
        <div class="agile-voltheader">
          <h1>Modifier une propriété</h1>
        </div>
        <br><br><br>
  
        <div id="search-div">
          <form>
            <table>
              <tr>
                <td><input type="text" id="search-div-rchr" name="search" placeholder="filtrer par le référence"></td>
                <td><input id="search-div-btn" type="button" value="Rechercher"></td>
              </tr>
            </table>
          </form>
        </div><br>
        

        <div class="agile-voltsub">
            <form action="#" method="post">
              <div class="agile-name">
                <select>
                    <option selected="true" disabled="">Selectionnez le Nombre de chambre</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
              </div>

              <div class="clear"></div>
              <div class="agile-email">
                <select>
                  <option selected="true" disabled="">Selectionnez le Nombre salles de bain</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <div class="clear"></div>
              <div class="agile-address">
                <input type="text" name="username" placeholder="Adresse">
              </div><br>

              <div class="clear"></div>
              <div class="agile-city">
                <input type="text" name="city" placeholder="Prix"/>
              </div><br>

              <div class="clear"></div>
              <div class="agile-state">
                <input type="text" name="username" placeholder="Surface">
              </div><br>

              <div class="clear"></div>
              <div class="agile-pin">
                <input type="tel" name="username" placeholder="Description" />
              </div>

              <div class="clear"></div>
              <div class="agile-country">
                <p>Categorie</p>
                <select>
                  <option selected="true" disabled="">Selectionnez une categorie</option>
                  <option value="country">Villa</option>
                  <option value="country">Hotel</option>
                  <option value="country">Read</option>
                  <option value="country">Résidence</option>
                </select>
              </div>
              <input type="submit" value="MODIFIER" />
            </form>
        </div>
      </section>
      
    </section>

    
  </div>
  <!-- /.content-wrapper -->

  <?php include("cld_admin/footer.php"); ?>

</div>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/Chart.js/Chart.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
