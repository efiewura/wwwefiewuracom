<ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img class="img-fluid" src="assets/img/menu-bg.jpg">
                </div>
                <?php if($logged){ ?>
                <div>
                    <a href="?pg=profile">
                        <img class="circle" src="assets/img/profile.png">
                    </a>
                    <a style="text-decoration: none;" href="?pg=profile">
                        <span class="white-text name"><?php echo $user->getfirstname()." ".$user->getsurname(); ?></span>
                    </a>
                    <a style="text-decoration: none;" href="?pg=profile">
                        <span class="white-text email"><?php echo $user->getemail(); ?></span>
                    </a>
                </div>
            <?php } ?>
            </div>
        </li>
        <li><a class="waves-effect nav-item" href="./">Home</a></li>
        <li><a class="waves-effect nav-item modal-trigger" href="#modal1">Become A Host</a></li>
        <li><a class="waves-effect nav-item" href="?pg=search">Find An Apartment</a></li>
                <?php if(!$logged){ ?>
        <li><a class="waves-effect nav-item" href="?pg=signup">Sign Up</a></li>
        <li><a class="waves-effect nav-item" href="?pg=login">Login</a></li>
                <?php } ?>
        <li><a class="waves-effect nav-item" href="?pg=about">About</a></li>
        <li><a class="waves-effect nav-item" href="?pg=terms">Terms And Conditions</a></li>
        <li><div class="divider"></div></li>
                <?php if($logged){ ?>
        <li><a class="waves-effect nav-item" href="?pg=dashboard">Dashboard</a></li>
        <li><a class="waves-effect nav-item" href="?pg=out">Sign Out</a></li>
            <?php } ?>
    </ul>