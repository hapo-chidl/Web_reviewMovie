<?php
include 'header.php'; 
?>

<div class="main-content">
        <h1>Thêm Phim</h1>
        <div id="content-box">
        	<form method="post" action="product_editing.php" id="search"  enctype="multipart/form-data" >
                 
                    <div class="clear-both"></div>
                    <div class="wrap-field">
                        <label>Tên Phim: </label>
                        <input type="text" name="name" value="" />
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Thể Loại : </label>
                        <input type="text" name="Theloai" value="" />
                        <div class="clear-both"></div>
                    </div>
                    
                    <div class="wrap-field">
                        <label>Quốc Gia : </label>
                        <input type="text" name="Quocgia" value="" />
                        <div class="clear-both"></div>
                    </div>

                    <div class="wrap-field">
                        <label>Link hình ảnh:  </label>
                        <div class="left-wrap-field">
                            <input type="file" name="image" />
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="wrap-field">
                        <label>Link ảnh bìa:  </label>
                        <div class="left-wrap-field">
                            <input type="file" name="image1" />
                        </div>
                        <div class="clear-both"></div>
                    </div>
                <div class="wrap-field">
                    <label>Nội dung: </label>
                </div>
                    <div class="wrap-field">

                        <textarea name="content" id="product-content"></textarea>
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