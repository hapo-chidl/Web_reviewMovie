<?php
include 'header.php'; 
?>

<div class="main-content">
        <h1>Thêm Đạo Diễn</h1>
        <div id="content-box">
        	<form method="post" action="product_editingDD.php" id="search"  enctype="multipart/form-data" >
                  
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Tên Đạo Diễn: </label>
                        <input type="text" name="name" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Quốc Gia : </label>
                        <input type="text" name="Quocgia" value="" />
                        <div class="clear-both"></div>
                    </div>
                    
                    <div class="wrap-field">
                        <label>Sinh Nhật: </label>
                       <input type="date" name="sinhnhat">
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Giải Thưởng: </label>
                        <input type="text" name="Giaithuong" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Link hình ảnh:  </label>
                        <div class="left-wrap-field">
                            <input type="file" name="image" />
                        </div>
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