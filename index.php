<?php
if (isset($_GET['i'])) {
    $pValue = $_GET['i'];
    echo "The value of 'p' is: " . $pValue;
} else {
    echo "No 'p' parameter found in the URL.";
}
?>
