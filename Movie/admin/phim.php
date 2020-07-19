<?php
                while ($row1 = sqlsrv_fetch_array($result) ) {
                
                  echo "  <li>
                        <div class='product-prop product-img'><img src=' {$row1['link']}' alt='<?= {$row1['TenPhim']} ?>' title='<?= {$row1['TenPhim']} ?>' /></div>";
                        echo "<div class='product-prop product-name'> <h2> {$row1['TenPhim']} </div>

                        <div class='product-prop product-button'>
                            <a href='./product_delete.php?id= {$row1['IdMovie']} '>Xóa</a>
                        </div>
                  
                        <div class='clear-both'></div>
                    </li>";
                }?>
                
