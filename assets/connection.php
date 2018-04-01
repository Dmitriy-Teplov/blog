<?

    session_start();
    
    $connection = mysqli_connect("localhost", "dteplov", "Nb63555", "dteplov");
    if ( $connection == false )
    {
        echo 'Ошибка подключения к базе данных. '.mysqli_connect_errno();
        exit();
    }

?>