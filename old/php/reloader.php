<?php
require('sql.php');
mysqli_query( $link , 'TRUNCATE TABLE `tasks`' );
