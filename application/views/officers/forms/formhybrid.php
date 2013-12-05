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
          <a class="brand" href="#">TREX Corp.</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
              <button class="btn btn-small btn-danger">Sign Out</button>
            </p>

            <ul class="nav">
              <li><a href="#">Home</a></li>
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
              <li><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
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
             <li class="nav-header"><a href="<? echo site_url("pages/stats_home") ?>">
              <h2><font color="green">Form Status</h2></a></font></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>แบบคำขอหนังสือรับรองการส่งออกพืชลูกผสมของบัญชีแนบท้าย</h2><br><br>

            <?
              // check post if it is null value
              if(isset($formhybrid['fname'])) 
                $fname = $formhybrid['fname'];
              else 
                $fname = '';
              if(isset($formhybrid['fbd'])) 
                $fbd = $formhybrid['fbd'];
              else 
                $fbd = '';
              if(isset($formhybrid['fnation'])) 
                $fnation = $formhybrid['fnation'];
              else 
                $fnation = '';
              //
              if(isset($formhybrid['faddress'])) 
                $faddress = $formhybrid['faddress'];
              else 
                $faddress = '';
              if(isset($formhybrid['fstreet'])) 
                $fstreet = $formhybrid['fstreet'];
              else 
                $fstreet = '';
              if(isset($formhybrid['fprovince'])) 
                $fprovince = $formhybrid['fprovince'];
              else 
                $fprovince = '';
              if(isset($formhybrid['fzipcode'])) 
                $fzipcode = $formhybrid['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($formhybrid['ftel'])) 
                $ftel = $formhybrid['ftel'];
              else 
                $ftel = '';
              if(isset($formhybrid['fphone'])) 
                $fphone = $formhybrid['fphone'];
              else 
                $fphone = '';
              if(isset($formhybrid['ffax'])) 
                $ffax = $formhybrid['ffax'];
              else 
                $ffax = '';
              //
              if(isset($formhybrid['fname2'])) 
                $fname2 = $formhybrid['fname2'];
              else 
                $fname2 = '';
              if(isset($formhybrid['faddress2'])) 
                $faddress2 = $formhybrid['faddress2'];
              else 
                $faddress2 = '';
              if(isset($formhybrid['fstreet2'])) 
                $fstreet2 = $formhybrid['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($formhybrid['fprovince2'])) 
                $fprovince2 = $formhybrid['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($formhybrid['fzipcode2'])) 
                $fzipcode2 = $formhybrid['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($formhybrid['ftel2'])) 
                $ftel2 = $formhybrid['ftel2'];
              else 
                $ftel2 = '';
              if(isset($formhybrid['fphone2'])) 
                $fphone2 = $formhybrid['fphone2'];
              else 
                $fphone2 = '';
              if(isset($formhybrid['ffax2'])) 
                $ffax2 = $formhybrid['ffax2'];
              else 
                $ffax2 = '';
              //
              if(isset($formhybrid['fname3'])) 
                $fname3 = $formhybrid['fname3'];
              else 
                $fname3 = '';
              if(isset($formhybrid['faddress3'])) 
                $faddress3 = $formhybrid['faddress3'];
              else 
                $faddress3 = '';
              if(isset($formhybrid['fstreet3'])) 
                $fstreet3 = $formhybrid['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($formhybrid['fprovince3'])) 
                $fprovince3 = $formhybrid['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($formhybrid['fzipcode3'])) 
                $fzipcode3 = $formhybrid['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($formhybrid['ftel3'])) 
                $ftel3 = $formhybrid['ftel3'];
              else 
                $ftel3 = '';
              if(isset($formhybrid['fphone3'])) 
                $fphone3 = $formhybrid['fphone3'];
              else 
                $fphone3 = '';
              if(isset($formhybrid['ffax3'])) 
                $ffax3 = $formhybrid['ffax3'];
              else 
                $ffax3 = '';
              //
              if(isset($formhybrid['fmark'])) 
                $fmark = $formhybrid['fmark'];
              else 
                $fmark = '';
              if(isset($formhybrid['value'])) 
                $value = $formhybrid['value'];
              else 
                $value = '';
              if(isset($formhybrid['transportby'])) 
                $transportby = $formhybrid['transportby'];
              else 
                $transportby = '';
              if(isset($formhybrid['exportto'])) 
                $exportto = $formhybrid['exportto'];
              else 
                $exportto = '';
              if(isset($formhybrid['estarrivedate'])) 
                $estarrivedate = $formhybrid['estarrivedate'];
              else 
                $estarrivedate = '';
            ?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>

            <? $fname = $formhybrid['fname']; ?>
            <b>ข้าพเจ้า: </b><span style="color:red"><?echo $formhybrid["fname"];?></span><br>

            <? $fbd = $formhybrid['fbd']; ?>
            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $formhybrid["fbd"];?></span><br>

            <? $fnation = $formhybrid['fnation']; ?>
            <b>สัญชาติ: </b><span style="color:red"><?echo $formhybrid["fnation"];?></span><br>

            <br>

            <? $faddress = $formhybrid['faddress']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $formhybrid["faddress"];?></span><br>

            <? $fstreet = $formhybrid['fstreet']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $formhybrid["fstreet"];?></span><br>

            <? $fprovince = $formhybrid['fprovince']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $formhybrid["fprovince"];?></span><br>

            <? $fzipcode = $formhybrid['fzipcode']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $formhybrid["fzipcode"];?></span><br>

            <? $ftel = $formhybrid['ftel']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $formhybrid["ftel"];?></span><br>

            <? $fphone = $formhybrid['fphone']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $formhybrid["fphone"];?></span><br>

            <? $ffax = $formhybrid['ffax']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $formhybrid["ffax"];?></span><br>
            
            <br>
            <br>
            <b>ขอรับหนังสือรับรองการส่งออกพืชลูกผสมของพืชในบัญชีแนบท้ายอนุสัญญาว่าด้วยการค้าระหว่างประเทศซึ่งชนิดสัตว์ป่าและพืชป่าที่กำลังจะสูญพันธุ์ ในรายการ </b><br>
            <br>
            <br>

            <? $fname2 = $formhybrid['fname2']; ?>
            <b>ชื่อผู้ส่ง: </b><span style="color:red"><?echo $formhybrid["fname2"];?></span><br>

            <? $faddress2 = $formhybrid['faddress2']; ?>
            <b>ที่อยู่ผู้ส่ง: </b><span style="color:red"><?echo $formhybrid["faddress2"];?></span><br>

            <? $fstreet2 = $formhybrid['fstreet2']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $formhybrid["fstreet2"];?></span><br>

            <? $fprovince2 = $formhybrid['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $formhybrid["fprovince2"];?></span><br>

            <? $fzipcode2 = $formhybrid['fzipcode2']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $formhybrid["fzipcode2"];?></span><br>

            <? $ftel2 = $formhybrid['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $formhybrid["ftel2"];?></span><br>

            <? $fphone2 = $formhybrid['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $formhybrid["fphone2"];?></span><br>

            <? $ffax2 = $formhybrid['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $formhybrid["ffax2"];?></span><br>

            <br>
            <br>

            <? $fname3 = $formhybrid['fname3']; ?>
            <b>ชื่อผู้รับ: </b><span style="color:red"><?echo $formhybrid["fname3"];?></span><br>

            <? $faddress3 = $formhybrid['faddress3']; ?>
            <b>ที่อยู่ผู้รับ: </b><span style="color:red"><?echo $formhybrid["faddress3"];?></span><br>

            <? $fstreet3 = $formhybrid['fstreet3']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $formhybrid["fstreet3"];?></span><br>

            <? $fprovince3 = $formhybrid['fprovince3']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $formhybrid["fprovince3"];?></span><br>

            <? $fzipcode3 = $formhybrid['fzipcode3']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $formhybrid["fzipcode3"];?></span><br>

            <? $ftel3 = $formhybrid['ftel3']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $formhybrid["ftel3"];?></span><br>

            <? $fphone3 = $formhybrid['fphone3']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $formhybrid["fphone3"];?></span><br>

            <? $ffax3 = $formhybrid['ffax3']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $formhybrid["ffax3"];?></span><br>
            <br>
            <br>
            <? $mark = $formhybrid['fmark']; ?>
            <b>เครื่องหมายที่สัังเกตบนหีบห่อ :</b><span style="color:red"><?echo $formhybrid["fmark"];?></span><br>

            <? $value = $formhybrid['value']; ?>
            <b>มูลค่า :</b><span style="color:red"><?echo $formhybrid["value"];?></span><br>

            <? $transportby = $formhybrid['transportby']; ?>
            <b>โดยพาหนะ :</b><span style="color:red"><?echo $formhybrid["transportby"];?></span><br>

            <br>
            <br>

            <? $exportto = $formhybrid['exportto']; ?>
            <b>นำเข้าประเทศปลายทาง :</b><span style="color:red"><?echo $formhybrid["exportto"];?></span><br>

            <? $estarrivedate = $formhybrid['estarrivedate']; ?>
            <b>ประมาณวันที่ :</b><span style="color:red"><?echo $formhybrid["estarrivedate"];?></span><br>
            <br>
            <br>

            <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($formhybrid['status']!='Verified'){?>
            <?php echo form_open("formhybrid/update61");?>
            <textarea rows="5" name="comment"><?php echo $formhybrid['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="formhybrid_Id" value="<?echo $formhybrid["formhybrid_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/11"); ?>" class="btn btn-large " >Go Back</a>
          </td>
          </tr>
          </table>
          </div>


            <br>
            <br>
            <br>
            <br>
          
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
