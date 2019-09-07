<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['message'])) {
    $data = $_POST['title'] . ' ' . $_POST['name'] . "\n" .$_POST['email'] . "\n" . $_POST['message'];
    $filename = date('YmdHis').".txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        // echo "$ret bytes written to file";
        echo "I have received your request, will get back to you soon";
    }
}
else {
   die('no post data to process');
}
?>
