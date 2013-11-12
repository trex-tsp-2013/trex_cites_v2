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
      textarea{
          width:50%;
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
              <li class="active"><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
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
        </div>
        <div class="span9">
          <div class="well">
            <h2>ตรวจสอบคำขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์(พ.พ.15)</h2><br>
              
              <?
              // check post if it is null value
              if(isset($form15['fname'])) 
                $fname = $form15['fname'];
              else 
                $fname = '';
              if(isset($form15['fbd'])) 
                $fbd = $form15['fbd'];
              else 
                $fbd = '';
              if(isset($form15['fnation'])) 
                $fnation = $form15['fnation'];
              else 
                $fnation = '';
              if(isset($form15['fpassport'])) 
                $fpassport = $form15['fpassport'];
              else 
                $fpassport = '';
              if(isset($form15['fissue'])) 
                $fissue = $form15['fissue'];
              else 
                $fissue = '';
              if(isset($form15['faddress'])) 
                $faddress = $form15['faddress'];
              else 
                $faddress = '';
              if(isset($form15['fstreet'])) 
                $fstreet = $form15['fstreet'];
              else 
                $fstreet = '';
              if(isset($form15['fprovince'])) 
                $fprovince = $form15['fprovince'];
              else 
                $fprovince = '';
              if(isset($form15['fzipcode'])) 
                $fzipcode = $form15['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form15['ftel'])) 
                $ftel = $form15['ftel'];
              else 
                $ftel = '';
              if(isset($form15['fphone'])) 
                $fphone = $form15['fphone'];
              else 
                $fphone = '';
              if(isset($form15['ffax'])) 
                $ffax = $form15['ffax'];
              else 
                $ffax = '';
              if(isset($form15['fmail'])) 
                $fmail = $form15['fmail'];
              else 
                $fmail = '';
              if(isset($form15['fname2'])) 
                $fname2 = $form15['fname2'];
              else 
                $fname2 = '';
              if(isset($form15['fowner'])) 
                $fowner = $form15['fowner'];
              else 
                $fowner = '';
              if(isset($form15['faddress2'])) 
                $faddress2 = $form15['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form15['fstreet2'])) 
                $fstreet2 = $form15['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form15['fprovince2'])) 
                $fprovince2 = $form15['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form15['fzipcode2'])) 
                $fzipcode2 = $form15['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form15['ftel2'])) 
                $ftel2 = $form15['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form15['fphone2'])) 
                $fphone2 = $form15['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form15['ffax2'])) 
                $ffax2 = $form15['ffax2'];
              else 
                $ffax2 = '';
              if(isset($form15['flocation'])) 
                $flocation = $form15['flocation'];
              else 
                $flocation = '';
              if(isset($form15['faddress3'])) 
                $faddress3 = $form15['faddress3'];
              else 
                $faddress3 = '';
              if(isset($form15['fstreet3'])) 
                $fstreet3 = $form15['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($form15['fprovince3'])) 
                $fprovince3 = $form15['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($form15['fzipcode3'])) 
                $fzipcode3 = $form15['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($form15['ftel3'])) 
                $ftel3 = $form15['ftel3'];
              else 
                $ftel3 = '';
              if(isset($form15['fphone3'])) 
                $fphone3 = $form15['fphone3'];
              else 
                $fphone3 = '';
              if(isset($form15['ffax3'])) 
                $ffax3 = $form15['ffax3'];
              else 
                $ffax3 = '';
              if(isset($form15['plantname'])) 
                $plantname = $form15['plantname'];
              else 
                $plantname = '';
              if(isset($form15['sname'])) 
                $sname = $form15['sname'];
              else 
                $sname = '';
              if(isset($form15['numberbreed'])) 
                $numberbreed = $form15['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form15['numbercom'])) 
                $numbercom = $form15['numbercom'];
              else 
                $numbercom = '';
              if(isset($form15['source'])) 
                $source = $form15['source'];
              else 
                $source = '';
              if(isset($form15['ab'])) 
                $ab = $form15['ab'];
              else 
                $ab = '';
              // if(isset($form15['comment'])) 
              //   $comment = $form15['comment'];
              // else 
              //   $comment = '';
              ?>
            <h3><b>เลขที่คำขอ: </b><span style="color:blue"><?echo $form15["form15_Id"];?></span></h3><br>
            <b>ข้าพเจ้า: </b><span style="color:blue"><?echo $form15["fname"];?></span><br>
            <b>วันเดือนปีเกิด: </b><span style="color:blue"><?echo $form15["fbd"];?></span><br>
            <b>สัญชาติ: </b><span style="color:blue"><?echo $form15["fnation"];?></span><br>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b>
            <span style="color:blue"><?echo $form15["fpassport"];?></span><br>
            <b>ออกให้ ณ: </b><span style="color:blue"><?echo $form15["fissue"];?></span><br>

            <b>ที่อยู่: </b><span style="color:blue"><?echo $form15["faddress"];?></span><br>

            <b>ถนน: </b><span style="color:blue"><?echo $form15["fstreet"];?></span><br>

            <b>จังหวัด: </b><span style="color:blue"><?echo $form15["fprovince"];?></span><br>

            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form15["fzipcode"];?></span><br>

            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form15["ftel"];?></span><br>
            
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form15["fphone"];?></span><br>

            <b>โทรสาร: </b><span style="color:blue"><?echo $form15["ffax"];?></span><br>

            <b>อีเลคทรอนิคเมล์ Email: </b><span style="color:blue"><?echo $form15["fmail"];?></span><br>

            <br><br>
            <b>มีความประสงค์จะขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</b>
            <br>
            <br>
            <? $fname2 = $form15['fname2']; ?>
            <b>ในนามของ(กรณีเป็นนิติบุคคล): </b><span style="color:blue"><?echo $form15["fname2"];?></span><br>

            <? $fowner = $form15['fowner']; ?>
            <b>โดยมี: </b><span style="color:blue"><?echo $form15["fowner"];?></span><br>

            <? $faddress2 = $form15['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:blue"><?echo $form15["faddress2"];?></span><br>

            <? $fstreet2 = $form15['fstreet2']; ?>
            <b>ถนน: </b><span style="color:blue"><?echo $form15["fstreet2"];?></span><br>

            <? $fprovince2 = $form15['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:blue"><?echo $form15["fprovince2"];?></span><br>

            <? $fzipcode2 = $form15['fzipcode2']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form15["fzipcode2"];?></span><br>

            <? $ftel2 = $form15['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form15["ftel2"];?></span><br>

            <? $fphone2 = $form15['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form15["fphone2"];?></span><br>

            <? $ffax2 = $form15['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:blue"><?echo $form15["ffax2"];?></span><br>

            <br>
            
            <? $flocation = $form15['flocation']; ?>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:blue"><?echo $form15["flocation"];?></span><br>

            <br>

            <? $faddress3 = $form15['faddress3']; ?>
            <b>ที่อยู่: </b><span style="color:blue"><?echo $form15["faddress3"];?></span><br>

            <? $fstreet3 = $form15['fstreet3']; ?>
            <b>ถนน: </b><span style="color:blue"><?echo $form15["fstreet3"];?></span><br>

            <? $fprovince3 = $form15['fprovince3']; ?>
            <b>จังหวัด: </b><span style="color:blue"><?echo $form15["fprovince3"];?></span><br>

            <? $fzipcode3 = $form15['fzipcode3']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form15["fzipcode3"];?></span><br>

            <br>
            <? $ftel3 = $form15['ftel3']; ?>
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form15["ftel3"];?></span><br>

            <? $fphone3 = $form15['fphone3']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form15["fphone3"];?></span><br>

            <? $ffax3 = $form15['ffax3']; ?>
            <b>โทรสาร: </b><span style="color:blue"><?echo $form15["ffax3"];?></span><br>

            <br>
            <br>

            <? $plantname = $form15['plantname']; ?>
            <b>ชื่อพืช: </b><span style="color:blue"><?echo $form15["plantname"];?></span><br>

            <? $sname = $form15['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:blue"><?echo $form15["sname"];?></span><br>

            <? $numberbreed = $form15['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:blue"><?echo $form15["numberbreed"];?></span><br>

            <? $numbercom = $form15['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:blue"><?echo $form15["numbercom"];?></span><br>

            <? $source = $form15['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:blue"><?echo $form15["source"];?></span><br>

            <? $ab = $form15['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:blue"><?echo $form15["ab"];?></span><br>

            <br>
            <br>
            <br>
            <b>รูปภาพสถานประกอบการ: </b> <input type="file" name="file" id="file"><br>
            <b>รูปภาพพันธุ์พืชอนุรักษ์: </b> <input type="file" name="file2" id="file">
            <br>
            <br>
            <br>
            <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form15['status']!='Verified'){?>
            <?php echo form_open("form15/update11");?>
            <textarea rows="5" name="comment"><?php echo $form15['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form15_Id" value="<?echo $form15["form15_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/lists/11"); ?>" class="btn btn-large " >Go Back</a>
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