<?php
                while ($row1 = sqlsrv_fetch_array($result) ) {
                
                  echo "  <li>
                        <div class='product-prop product-img'><img src=' {$row1['linkDD']}' alt='<?= {$row1['FullName']} ?>' title='<?= {$row1['FullName']} ?>' /></div>";
                        echo "<div class='product-prop product-name'> <h2> {$row1['FullName']} </div>

                        <div class='product-prop product-button'>
                            <a href='./product_deleteDD.php?id={$row1['IdDirector']}'> Xóa</a>
                        </div>

                       
                  
                        <div class='clear-both'></div>
                    </li>";
                }?>
                
