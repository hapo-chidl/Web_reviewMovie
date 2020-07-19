<?php
include 'header.php'; 
?>

<div class="main-content">
        <h1>Thêm User</h1>
        <div id="content-box">
        	<form method="post" action="product_editingUser.php" id="search"  enctype="multipart/form-data" >
                  
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>FullName: </label>
                        <input type="text" name="name" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label> Email : </label>
                        <input type="text" name="Quocgia" value="" />
                        <div class="clear-both"></div>
                    </div>
                    
                    <div class="wrap-field">
                        <label>Tên đăng nhập </label>
                       <input type="text" name="sinhnhat">
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Password </label>
                        <input type="text" name="Giaithuong" value="" />
                        <div class="clear-both"></div>
                    </div>
                   

                    <center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
                </form>
                <div class="clear-both"></div>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('product-content');
                </script>
     
            
        </div>
    </div>

    <?php

include './footer.php';
?>