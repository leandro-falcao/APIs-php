<?php
    
    $sites = ["https://randomuser.me/api", "https://api.agify.io/?name=leandro"];
    $response = file_get_contents($sites[1]);

    echo $response, "\n";

?>
