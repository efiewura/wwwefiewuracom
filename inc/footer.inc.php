<footer class="page-footer">
        <div class="container">
            <div class="links">
                <a class="footer-link" href="<?php  echo  ($pg=='about')? '#about':'./?pg=about'; ?>">About us</a>
                <a class="footer-link" href="<?php  echo  ($pg=='about')? '#contact':'./?pg=about'; ?>">Contact us</a>
                <?php if ($logged) { ?>
                <a class="footer-link" href="?pg=out">Sign Out</a>
            <?php } ?>
            </div>
            <div class="social-icons">
                <a href="#"><i class="icon ion-social-facebook"></i></a>
                <a href="#"><i class="icon ion-social-instagram-outline"></i></a>
                <a href="#"><i class="icon ion-social-twitter"></i></a>
            </div>
            <p class="footer-text">Copyright &copy; 2018 BELIEVE. All Rights Reserved.</p>
        </div>
    </footer>