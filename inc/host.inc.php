<div id="modal1" class="modal">
        <div class="modal-content">
            <div class="modal-top">
                <i style="font-size: 60px;" class="icon ion-android-home"></i>
                <h4>What do you want to host ?</h4>
            </div>
            <div class="modal-bottom">
                <div class="modal-host-text">
                    <p style="font-weight: bold; font-size: 18px;">To start the hosting process, click on</p>
                    <ul class="modal-ul">
                        <li>The EFIE button to host a Home, Guest House or Hotel <b>OR</b></li>
                        <li>The WORKSPACE button to host a Workspace</li>
                    </ul>
                </div>
                <?php if(!$logged){ ?>
                <div class="text-warning display-3 center"> <a class="text-warning" style="text-decoration: none !important;" href="?pg=login">Login</a> to Host !!</div>
            <?php } ?>
                <div class="modal-buttons">
                    <a href="?pg=efie" <?php echo ($logged)? "":"disabled"; ?> class="modal-close waves-effect waves-green btn-flat">
                        EFIE
                    </a>
                    <a href="?pg=workspace" <?php echo ($logged)? "":"disabled"; ?> class="modal-close waves-effect waves-green btn-flat">
                        WORKSPACE
                    </a> 
                </div>
            </div>
        </div>
    </div>  