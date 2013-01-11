<?php

// @Goksgreat - Gaurav Sharma

    include('srmswi/srmswi.php');         

    $student = new PWI(array(
    'regno' => 'xxxxxxxxxx',
    'pass' => 'xxxxxxxxxx',
));

echo $student->getAttendance();
?>