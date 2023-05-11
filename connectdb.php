<?php
    $connect = mysqli_connect(
        "std-mysql", 
        "std_1989_sessions",
        "12345678", 
        "std_1989_sessions"
    );
        
    mysqli_set_charset($connect, "utf8");
?>