<?php
                
    if(isset( $_GET['user']) || isset($_GET['pword'])){
        $link = mysqli_connect(
            "shareddb-g.hosting.stackcp.net",
            "employee-progress-3237d1d5",
            "whatthe7",
            "employee-progress-3237d1d5"
        );

        $user = mysqli_real_escape_string($link, $_GET['user']);
        $pword = mysqli_real_escape_string($link, $_GET['pword']);
        $query = "INSERT INTO users(`name`, `email`) values('$user', '$pword')";
        $query2 = "SELECT `name`, `email` FROM users";

        if(mysqli_connect_error()){
            die("error");
        }
    
        mysqli_query($link, $query);
    
        if($result = mysqli_query($link, $query2)){
            while($full = mysqli_fetch_all($result, MYSQLI_ASSOC)){
                $json = json_encode($full);
            }
            return $json;
        } else {
            echo mysqli_error($link) . "This is an error";
        }
    }
    


?>