<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo FROM_NAME ;?> contact</title>
  <style type="text/css">
    img{max-width:600px;outline:0;text-decoration:none;-ms-interpolation-mode:bicubic}a img{border:none}table{border-collapse:collapse!important}#outlook a{padding:0}.ReadMsgBody{width:100%}.ExternalClass{width:100%}.backgroundTable{margin:0 auto;padding:0;width:100%!important}table td{border-collapse:collapse}.ExternalClass *{line-height:115%}.container-for-gmail-android{min-width:600px}*{font-family:Helvetica,Arial,sans-serif}body{-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;width:100%!important;margin:0!important;height:100%;color:#676767}td{font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#777;text-align:center;line-height:21px}a{color:#676767;text-decoration:none!important}.pull-left{text-align:left}.pull-right{text-align:right}.header-lg,.header-md,.header-sm{font-size:32px;font-weight:700;line-height:normal;padding:35px 0 0;color:#4d4d4d}.header-md{font-size:24px}.header-sm{padding:5px 0;font-size:18px;line-height:1.3}.content-padding{padding:20px 0 30px}.mobile-header-padding-right{width:290px;text-align:right;padding-left:10px}.mobile-header-padding-left{width:290px;text-align:left;padding-left:10px}.free-text{width:100%!important;padding:10px 60px 0}.block-rounded{border-radius:5px;border:1px solid #e5e5e5;vertical-align:top}.button{padding:30px 0}.info-block{padding:0 20px;width:260px}.block-rounded{width:260px}.info-img{width:258px;border-radius:5px 5px 0 0}.force-width-gmail{min-width:600px;height:0!important;line-height:1px!important;font-size:1px!important}.button-width{width:228px}
  </style>
  <style type="text/css" media="screen">
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>
  <style type="text/css" media="screen">
    @media screen {
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>
  <style type="text/css" media="only screen and (max-width: 480px)">
      @media only screen and (max-width:480px){table[class*=container-for-gmail-android]{min-width:290px!important;width:100%!important}table[class=w320]{width:320px!important}img[class=force-width-gmail]{display:none!important;width:0!important;height:0!important}a[class=button-mobile],a[class=button-width]{width:248px!important}td[class*=mobile-header-padding-left]{width:160px!important;padding-left:0!important}td[class*=mobile-header-padding-right]{width:160px!important;padding-right:0!important}td[class=header-lg]{font-size:24px!important;padding-bottom:5px!important}td[class=header-md]{font-size:18px!important;padding-bottom:5px!important}td[class=content-padding]{padding:5px 0 30px!important}td[class=button]{padding:5px!important}td[class*=free-text]{padding:10px 18px 30px!important}td[class=info-block]{display:block!important;width:280px!important;padding-bottom:40px!important}img[class=info-img],td[class=info-img]{width:278px!important}}
  </style>
</head>

<body bgcolor="#f7f7f7">
<?php
	$logo = base_url('extra_img/logo.png');
?>
<table align="center" cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%">
  <tr>
    <td align="left" valign="top" width="100%" style="">
      <center>
        <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff" style="background-color:transparent">
          <tr>
            <td width="100%" height="80" valign="top" style="text-align: center; vertical-align:middle;">
              <center>
                <table cellpadding="0" cellspacing="0" width="600" class="w320">
                  <tr>
                    <td class="pull-left mobile-header-padding-left" style="vertical-align: middle;">
                      <a href="<?php echo base_url();?>">
                        <img src="https://ziadoz.com/jkm/upload/site_logo/9500.png" style="width:150px;" alt="<?php echo @$site_name ;?>">
                      </a>
                    </td>
                  </tr>
                </table>
              </center>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #ffffff;" class="content-padding">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td class="header-lg" style="padding: 15px 0px;">
             Hello <?php echo FROM_NAME;?> Owner !
            </td>
          </tr>
          <tr>
            <?php if(@$contact['first_name']){ ?>
              <td class="free-text" style="font-weight:500;font-size:18px;">
                <b>Sender First Name</b> : <?php echo @$contact['first_name'];?>
              </td>
            <?php } ?>
          </tr>
          <tr>
            <?php if(@$contact['last_name']){ ?>
              <td class="free-text" style="font-weight:500;font-size:18px;">
                <b>Sender Last Name</b> : <?php echo @$contact['last_name'];?>
              </td>
            <?php } ?>
          </tr>
          <tr>
            <?php if(@$contact['phone']){ ?>
              <td class="free-text" style="font-weight:500;font-size:18px;">
                <b>Sender Number</b> : <?php echo @$contact['phone'];?>
              </td>
            <?php } ?>
          </tr>
          <tr>
            <?php if(@$contact['email']){ ?>
              <td class="free-text" style="font-weight:500;font-size:18px;">
                <b>Sender Email</b> : <?php echo @$contact['email'];?>
              </td>
            <?php } ?>
          </tr>
          <tr>
            <?php if(@$contact['message']){ ?>
              <td class="free-text" style="font-weight:500;font-size:18px;">
                <b>Sender Message</b> : <?php echo @$contact['message'];?>
              </td>
            <?php } ?>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" width="100%" style="background-color: #ffffff; height: 100px;">
      <center>
        <table cellspacing="0" cellpadding="0" width="600" class="w320">
          <tr>
            <td style="padding: 25px 0 25px">
              <strong>Best regards,</strong><br />
              <strong>Team of <?php echo FROM_NAME ;?></strong><br />
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
</table>
</body>
</html>