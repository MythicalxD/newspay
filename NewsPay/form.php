<html>
<body>

Welcome <?php
require_once '/includes/DbOperations.php';
$db = new DbOperations();
$result = $db->verifyVisit($_GET['uid'], $_GET['name']);
if ($result) {
    echo "Points Updated Successfully, Now you can close the window";
} else {
    echo "Invalid Code !";
}
 ?><br>

</body>
</html>