<?php
function main($pageTitle, $content) {
    include 'header.blade.php';
    echo "<main>";
    echo $content;
    echo "</main>";
    include 'footer.blade.php';
}
