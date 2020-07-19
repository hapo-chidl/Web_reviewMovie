<?php
//session_start();
if (isset($_SESSION['UsernameAdmin']) && $_SESSION['UsernameAdmin']){ ?>
    <div class="clear-both"></div>
    </div>
    </div>
    <div id="admin-footer">
        <div class="container">
            <div class="left-panel">
                © Copyright 2019 -Admin
            </div>
            <div class="right-panel">
                <a target="_blank" href="https://www.facebook.com/linhchi0508" title="Facebook Andn Training"><img height="48" src="../images/facebook.png" /></a>
                <a target="_blank" href="https://www.facebook.com/janie.pham.583" title="Facebook Andn Training"><img height="48" src="../images/facebook.png" /></a>
                
            </div>
            <div class="clear-both"></div>
        </div>
    </div>
<?php } else { ?>
    <div class="container">
        <div class="box-content">
            Bạn chưa đăng nhập. Mời bạn quay lại đăng nhập quản trị <a href="index.php"> <h2> tại đây</a>
        </div>
    </div>
<?php } ?>
</body>
</html>