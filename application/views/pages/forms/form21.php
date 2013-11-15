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
              <li class="active"><a href="#">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="#">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="#">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
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
            <h2>คำขอแก้ไขรายการใบสำคัญการขึ้นทะเบียน เพิ่ม/ลด สถานที่เพาะเลี้ยงพืชอนุรักษ์</h2><br><br>
            
            <?
              // check post if it is null value
              if(isset($form21['fname'])) 
                $fname = $form21['fname'];
              else 
                $fname = '';
              if(isset($form21['fage'])) 
                $fage = $form21['fage'];
              else 
                $fage = '';
              if(isset($form21['fnation'])) 
                $fnation = $form21['fnation'];
              else 
                $fnation = '';
              if(isset($form21['fpassport'])) 
                $fpassport = $form21['fpassport'];
              else 
                $fpassport = '';
              if(isset($form21['fissue'])) 
                $fissue = $form21['fissue'];
              else 
                $fissue = '';
              if(isset($form21['faddress'])) 
                $faddress = $form21['faddress'];
              else 
                $faddress = '';
              if(isset($form21['fstreet'])) 
                $fstreet = $form21['fstreet'];
              else 
                $fstreet = '';
              if(isset($form21['fprovince'])) 
                $fprovince = $form21['fprovince'];
              else 
                $fprovince = '';
              if(isset($form21['fzipcode'])) 
                $fzipcode = $form21['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form21['ftel'])) 
                $ftel = $form21['ftel'];
              else 
                $ftel = '';
              if(isset($form21['fphone'])) 
                $fphone = $form21['fphone'];
              else 
                $fphone = '';
              if(isset($form21['ffax'])) 
                $ffax = $form21['ffax'];
              else 
                $ffax = '';
              //
              if(isset($form21['fname2'])) 
                $fname2 = $form21['fname2'];
              else 
                $fname2 = '';
              if(isset($form21['faddress2'])) 
                $faddress2 = $form21['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form21['fstreet2'])) 
                $fstreet2 = $form21['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form21['fprovince2'])) 
                $fprovince2 = $form21['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form21['fzipcode2'])) 
                $fzipcode2 = $form21['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form21['ftel2'])) 
                $ftel2 = $form21['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form21['fphone2'])) 
                $fphone2 = $form21['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form21['ffax2'])) 
                $ffax2 = $form21['ffax2'];
              else 
                $ffax2 = '';
              //
              if(isset($form21['fregisNum'])) 
                $fregisNum = $form21['fregisNum'];
              else 
                $fregisNum = '';
              //
              if(isset($form21['fname3'])) 
                $fname3 = $form21['fname3'];
              else 
                $fname3 = '';
              if(isset($form21['faddress3'])) 
                $faddress3 = $form21['faddress3'];
              else 
                $faddress3 = '';
              if(isset($form21['fstreet3'])) 
                $fstreet3 = $form21['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($form21['fprovince3'])) 
                $fprovince3 = $form21['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($form21['fzipcode3'])) 
                $fzipcode3 = $form21['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($form21['ftel3'])) 
                $ftel3 = $form21['ftel3'];
              else 
                $ftel3 = '';
              if(isset($form21['fphone3'])) 
                $fphone3 = $form21['fphone3'];
              else 
                $fphone3 = '';
              if(isset($form21['ffax3'])) 
                $ffax3 = $form21['ffax3'];
              else 
                $ffax3 = '';
              //
              if(isset($form21['plantname'])) 
                $plantname = $form21['plantname'];
              else 
                $plantname = '';
              if(isset($form21['sname'])) 
                $sname = $form21['sname'];
              else 
                $sname = '';
              if(isset($form21['numberbreed'])) 
                $numberbreed = $form21['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form21['numbercom'])) 
                $numbercom = $form21['numbercom'];
              else 
                $numbercom = '';
              if(isset($form21['source'])) 
                $source = $form21['source'];
              else 
                $source = '';
              if(isset($form21['ab'])) 
                $ab = $form21['ab'];
              else 
                $ab = '';
              //
              if(isset($form21['fimnum'])) 
                $fimnum = $form21['fimnum'];
              else 
                $fimnum = '';
              if(isset($form21['fformdate'])) 
                $fformdate = $form21['fformdate'];
              else 
                $fformdate = '';
              if(isset($form21['fformenddate'])) 
                $fformenddate = $form21['fformenddate'];
              else 
                $fformenddate = '';

            ?>

            <b>ข้าพเจ้า: </b><input class="input-xlarge" type="text" name="fname" value="<?echo $fname;?>"><br>
            <b>อายุ: </b><input type="text" name="fage" value="<?echo $fage;?>"><br>
            <b>สัญชาติ: </b><input type="text" name="fnation" value="<?echo $fnation;?>"><br>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b><input class="input-xlarge" type="text" name="fpassport" value="<?echo $fpassport;?>"><br>
            <b>ออกให้ ณ: </b><input type="text" name="fissue" value="<?echo $fissue;?>"><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" name="faddress" value="<?echo $faddress;?>"><br>
            <b>ถนน: </b><input type="text" name="fstreet" value="<?echo $fstreet;?>"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince" value="<?echo $fprovince;?>"><br>
            <b>รหัสไปรษณีย์: </b><input type="text" name="fzipcode" value="<?echo $fzipcode;?>"><br>
            <b>โทรศัพท์: </b><input type="text" name="ftel" value="<?echo $ftel;?>"><br>
            <b>โทรศัพท์เคลื่อนที่: </b><input type="text" name="fphone" value="<?echo $fphone;?>"><br>
            <b>โทรสาร: </b><input type="text" name="ffax" value="<?echo $ffax;?>"><br>
            <br><br>
            <b>ในนามของ: </b><input type="text" name="fname2" value="<?echo $fname2;?>"><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" name="faddress2" value="<?echo $faddress2;?>"><br>
            <b>ถนน: </b><input type="text" name="fstreet2" value="<?echo $fstreet2;?>"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince2" value="<?echo $fprovince2;?>"><br>
            <b>รหัสไปรษณีย์: </b><input type="text" name="fzipcode2" value="<?echo $fzipcode2;?>"><br>
            <b>โทรศัพท์: </b><input type="text" name="ftel2" value="<?echo $ftel2;?>"><br>
            <b>โทรศัพท์เคลื่อนที่: </b><input type="text" name="fphone2" value="<?echo $fphone2;?>">
            <b>โทรสาร: </b><input type="text" name="ffax2" value="<?echo $ffax2;?>"><br>
            <b>ใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่</b><input type="text" name="fregisNum"><br>
            <br>
            <br>
            <input type="checkbox" name="ffix" value="fix">ขอแก้ไขรายการใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ดังกล่าวดังนี้<br>
            <input type="text" name="ffixtext"><br>
            <br><br>
            <input type="checkbox" name="fincordec" value="incordec">เพิ่ม/ลด สถานที่เพาะเลี้ยงพืชอนุรักษ์ ดังนี้<br>
            <br>
            <br>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><input class="input-xlarge" type="text" name="fname3" value="<?echo $fname3;?>"><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" Name="faddress3" value="<?echo $faddress3;?>"><br>
            <b>ถนน: </b><input type="text" name="fstreet3" value="<?echo $fstreet3;?>"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince3" value="<?echo $fprovince3;?>"><br>
            <b>รหัสไปรษณีย์: </b><input type="text" name="fzipcode3" value="<?echo $fzipcode3;?>"><br>
            <b>โทรศัพท์: </b><input type="text" name="ftel3" value="<?echo $ftel3;?>"><br>
            <b>โทรศัพท์เคลื่อนที่: </b><input type="text" name="fphone3" value="<?echo $fphone3;?>"><br>
            <b>โทรสาร: </b><input type="text" name="ffax3" value="<?echo $ffax3;?>"><br>
            <br>
            <br>
            <b>ชื่อพืช: </b><input class="input-xlarge" type="text" name="plantname" value="<?echo $plantname;?>"><br>
            <b>ชื่อวิทยาศาสตร์: </b><input class="input-xlarge" type="text" name="sname" value="<?echo $sname;?>"><br>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><input type="text" name="numberbreed" value="<?echo $numberbreed;?>"><br>
            <b>จำนวนเพื่อการค้า: </b><input type="text" name="numbercom" value="<?echo $numbercom;?>"><br>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><input type="text" name="source" value="<?echo $source;?>"><br>
            <b>วิธีการขยายพันธุ์เทียม: </b><input type="text" name="ab" value="<?echo $ab;?>">
            <br>
            <br>
            <br>
            <b>ใบสำคัญเลขที่</b><input type="text" name="fimnum" value="<?echo $fimnum;?>"><br>
            <br>
            <b>ออกให้เมื่อวันที่</b><input type="date" name="fformdate" value="<?echo $fformdate;?>"><br>
            <b>สิ้นอายุเมื่อวันที่</b><input type="date" name="fformenddate" value="<?echo $fformenddate;?>"><br>
            <br>
            <br>
            <button type="submit" class="btn btn-large btn-primary">Submit</button>
            <button type="cancel" class="btn btn-large">Cancel</button>
            </form>
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