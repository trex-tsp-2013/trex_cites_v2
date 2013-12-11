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
              <!-- <button onclick="location.href='http://localhost/trex_cites/index.php/auth/logout'" class="btn btn-small btn-danger">Sign Out</button> -->
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
              <li class="nav-header"><h2>Form & Request</h2></li>
              <li ><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li class="active"><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2>Form Status</h2></li>
              <li><a href="<? echo site_url("pages/status") ?>">คำขอล่าสุด</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>บัญชีเพิ่มหรือลดพืชอนุรักษ์ หรือจำนวนพ่อแม่พันธุ์</h2><br><br>
            <?
              // check post if it is null value
              if(isset($form18['fname'])) 
                $fname = $form18['fname'];
              else 
                $numname = '';
              if(isset($form18['datename'])) 
                $datename = $form18['datename'];
              else 
                $datename = '';
              // for in put the check box idk how?
              if(isset($form18['plantname'])) 
                $plantname = $form18['plantname'];
              else 
                $plantname = '';
              if(isset($form18['sname'])) 
                $sname = $form18['sname'];
              else 
                $sname = '';
              if(isset($form18['numberbreed'])) 
                $numberbreed = $form18['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form18['numbercom'])) 
                $numbercom = $form18['numbercom'];
              else 
                $numbercom = '';
              if(isset($form18['source'])) 
                $source = $form18['source'];
              else 
                $source = '';
              if(isset($form18['ab'])) 
                $ab = $form18['ab'];
              else 
                $ab = '';

              ?>

            <? $fname = $form18['fname']; ?>
            <b>ใบสำคัญการขึ้นทะเบียนสถานทีเพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><span style="color:red"><?echo $form18["fname"];?></span><br>

            <? $datename = $form18['datename']; ?>
            <b>ลงวันที่: </b><span style="color:red"><?echo $form18["datename"];?></span><br>
            
            <b>เพื่อ: </b>
            <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> <b>การค้าในประเทศ</b>
            </label>
            <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox2" value="option2"> <b>การค้าต่างประเทศ</b>
            </label>
            
            <? $plantname = $form18['plantname']; ?>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $form18["plantname"];?></span><br>

            <? $sname = $form18['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $form18["sname"];?></span><br>

            <? $numberbreed = $form18['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $form18["numberbreed"];?></span><br>

            <? $numbercom = $form18['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $form18["numbercom"];?></span><br>

            <? $source = $form18['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $form18["source"];?></span><br>

            <? $ab = $form18['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $form18["ab"];?></span>
            <br>
            

            <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form18['status']!='Verified'){?>
            <?php echo form_open("form18/update25");?>
            <textarea rows="5" name="comment"><?php echo $form18['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form18_Id" value="<?echo $form18["form18_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/25"); ?>" class="btn btn-large " >Go Back</a>
          </td>
          </tr>
          </table>
          </div>

          
      </div><!--/row-->
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