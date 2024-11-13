<?php
// Execute the Python script
$output = shell_exec('python kfv.py');
echo "Python script executed. Output: " . $output;
?>
