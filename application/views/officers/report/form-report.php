<html lang="en"><head>
    <meta charset="utf-8">
    <title>TREX Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<? echo base_url() ?>">TREX Corp.</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link"><?echo $username;?></a>
              <button onclick="location.href='<? echo site_url("auth/logout")?>'" class="btn btn-small btn-danger">Sign Out</button>
            </p>

            <ul class="nav">
              <li><a href="<? echo base_url() ?>">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><a href="<? echo site_url("pages/report") ?>">
              <h2 style="color:gray"><font >report</h2></a></font></li>
            </ul>
          </div><!--/.well -->

          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><a href="<? echo site_url("") ?>">
              <h2><font >Form & request</h2></a></font></li>
            </ul>
          </div><!--/.well -->

        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <!-- <h3>Form15</h3>
            <h3>Verified: <span style="color:green"><?echo $count;?></span> forms</h3>
            <h3>Denied: <span style="color:red"><?echo $count2;?></span> forms</h3>
            <h3>Pending: <span style="color:orange"><?echo $count3;?></span> forms</h3>
             -->

            <h2>รายละเอียด การใช้งาน แบบ พ.พ.</h2><br>
            <table class="table" style="width:950px">
            <thead> 
            <td><h4>#Form</h4></td> 
            <td><h4><span style="color:green">Verified</span></h4></td>
            <td><h4><span style="color:red">Denied</h4></span></td>
            <td><h4><span style="color:orange">Pending</h4></span></td>
            <td><h4>Total</h4></td>
            </thead>
             
              <tbody>
                  <td>พ.พ. 13</td>
                  <td><span style="color:green"><?echo $v13;?></span></td>
                  <td><span style="color:red"><?echo $d13;?></span></td>
                  <td><span style="color:red"><?echo $p13;?></span></td>
                  <td><?echo $v13+$d13+$p13;?></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 15</td>
                  <td><span style="color:green"><?echo $v15;?></span></td>
                  <td><span style="color:red"><?echo $d15;?></span></td>
                  <td><span style="color:red"><?echo $p15;?></span></td>
                  <td><?echo $v15+$d15+$p15;?></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 17</td>
                  <td><span style="color:green"><?echo $v17;?></span></td>
                  <td><span style="color:red"><?echo $d17;?></span></td>
                  <td><span style="color:red"><?echo $p17;?></span></td>
                  <td><?echo $v17+$d17+$p17;?></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 18</td>
                  <td><span style="color:green"><?echo $v18;?></span></td>
                  <td><span style="color:red"><?echo $d18;?></span></td>
                  <td><span style="color:red"><?echo $p18;?></span></td>
                  <td><?echo $v18+$d18+$p18;?></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 19</td>
                  <td><span style="color:green"><?echo $v19;?></span></td>
                  <td><span style="color:red"><?echo $d19;?></span></td>
                  <td><span style="color:red"><?echo $p19;?></span></td>
                  <td><?echo $v19+$d19+$p19;?></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 20</td>
                  <td><span style="color:green"><?echo $v20;?></span></td>
                  <td><span style="color:red"><?echo $d20;?></span></td>
                  <td><span style="color:red"><?echo $p20;?></span></td>
                  <td><?echo $v20+$d20+$p20;?></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 21</td>
                  <td><span style="color:green"><?echo $v21;?></span></td>
                  <td><span style="color:red"><?echo $d21;?></span></td>
                  <td><span style="color:red"><?echo $p21;?></span></td>
                  <td><?echo $v21+$d21+$p21;?></td>
              </tbody>
              <tbody>
                  <td>พืชผสม</td>
                  <td><span style="color:green"><?echo $vhybrid;?></span></td>
                  <td><span style="color:red"><?echo $dhybrid;?></span></td>
                  <td><span style="color:red"><?echo $phybrid;?></span></td>
                  <td><?echo $vhybrid+$dhybrid+$phybrid;?></td>
              </tbody>
           

          </table>
          <br>
          <h2>จำนวนใบสำคัญทั้งหมด</h2><br>
          <table class="table" style="width:950px">
            <thead> 
            <td><h4>#Form</h4></td> 
            <td><h4>Total</h4></td>
            </thead>
             
              <tbody>
                  <td>พ.พ. 14</td>
                  <td><span style="color:blue"><?echo $t14;?></span></td>
              </tbody>
              <tbody>
                  <td>พ.พ. 16</td>
                  <td><span style="color:blue"><?echo $t16;?></span></td>
              </tbody>
          </table>


            </div>
          </div>
        </div>
      </div>
          <hr>

      <footer>
        <p>© TREX Corp. 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  

</body></html>