<?php
    $user = selectSingle(6);
    if($user){
        $welcome = 'Welcome, '.$user['lname'].' '.$user['fname'];
    }
    else{
        $welcome = "";
    }
   
?>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                Logo Here
            </div>
            <div class="col-md-8 text-right">
                <nav>
                    <ul class="d-flex nav-menu">
                        <li><a href="./">Dashboard</a></li>
                        <li><a href="create.php">Create New</a></li>
                        <li><?= $welcome ?></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>