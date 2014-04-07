<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body bgcolor="F0F0F0" style="min-height:100%;padding:0;margin:0;">
    <table width="100%" align="center"><tr>
            <td align="center"><a href="?file=mail1" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:20px;color:#909090;">mail1</a></td>
            <td align="center"><a href="?file=mail2" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:20px;color:#909090;">mail2</a></td>
            <td align="center"><a href="?file=mail3" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:20px;color:#909090;">mail3</a></td>
            <td align="center"><a href="?file=order" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:20px;color:#909090;">order</a></td>
            <td align="center"><a href="?file=registration" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:20px;color:#909090;">registration</a></td>
        </tr></table>
    <br>
    <br>
    <br>
    <p style="font-family:Arial, Helvetica, sans-serif;font-size:10px;line-height:20px;color:#909090;width:560px;margin:0 auto;">Here you can take a look at the <strong>online version</strong> of this mail.</p>
    <?php
    if (isset($_GET['file']))
        include_once($_GET['file']."/index.php");
    ?>
    <p style="font-family:Arial, Helvetica, sans-serif;font-size:10px;line-height:20px;color:#909090;width:560px;margin:0 auto;">Do not reply to this email as the mailbox is unattended. If you need help or have any questions, please visit our Help & Contact pages. If you’d prefer not to receive further communications from us click here to unsubscribe.</p>
</body>

