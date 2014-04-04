<table width="100%"><tr>
        <td><a href="?file=mail1">mail1</a></td>
        <td><a href="?file=mail2">mail2</a></td>
        <td><a href="?file=mail3">mail3</a></td>
        <td><a href="?file=order">order</a></td>
        <td><a href="?file=registration">registration</a></td>
</tr></table>
<?php
if (isset($_GET['file']))
	include_once($_GET['file'].".php");
?>