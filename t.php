<?php
$command = './readflag > out.txt';
exec($command, $output, $returnCode);

if ($returnCode === 0) {
    echo "Command executed successfully. Check out.txt for the output.";
} else {
    echo "Command failed to execute.";
}
?>
