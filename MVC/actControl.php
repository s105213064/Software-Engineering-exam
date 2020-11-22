<?php
require("actModel.php");

$ID=(int)$_GET['id'];
$act =$_GET['act'];
$msg = "Message: Action: $act completed.";
echo $ID;
echo $act;
if ($msg) {
	switch($act) {
		case 'tsignatureok':
			tsignatureok($ID);
		break;

		case 'tsignaturenotok':
			tsignaturenotok($ID);
		break;

		case 'ssignatureok':
			ssignatureok($ID);
		break;

		case 'ssignaturenotok':
			ssignaturenotok($ID);
		break;

		case 'psignatureok':
			psignatureok($ID);
		break;

		case 'psignaturenotok':
			psignaturenotok($ID);
		break;

		case 'tcomment':
			$comment=mysqli_real_escape_string($conn,$_GET['comment']);
			updatetcomment($ID,$comment);
		break;

		case 'scomment':
			$comment=mysqli_real_escape_string($conn,$_GET['comment']);
			updatescomment($ID,$comment);
		break;

		default:
			$msg="Invalid action. Ignored.";
		break;
	}
	
}
header("Location: todoListView.php?m=$msg");
?>

