<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dealer Price</title>
</head>

    <body style="width:100%; font-family:Calibri, Lucida Sans Unicode, HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, sans-serif; color:#666; font-size:15px; background-color:#FFF;">
        <div id="orderConfirmationMail" style="width:600px; font-size:14px; font-family:calibri; color:#222;">
            <table id="orderConfirm" style="width:600px; border-collapse:collapse;">
        	<tr id="mailHeader">
            	<td colspan="3"><img src="<?=Yii::app()->getBaseUrl(true)?>/themes/classic/images/logo.png" /></td>
                <td colspan="2"></td>
            </tr>
	
                <?php echo $content ?>
            
            <tr class="space"><td style="height:20px;"></td></tr>
            <tr class="space"><td style="height:20px;"></td></tr>
            <tr id="mailFooter">
            	<td colspan="5">
                    <p style="margin-top:2px;">Thanks,</p>
                    <p style="margin-top:2px;">Dealer Price Team</p>
                    <p style="margin-top:2px;">Visit Again!</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
