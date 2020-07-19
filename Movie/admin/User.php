<?php
                while ($row1 = sqlsrv_fetch_array($result) ) {
                
                  echo "  <li>
                        <div class='product-prop product-img'> <h2> {$row1['UsernameUser']} - {$row1['PassUser']}</div>";
                        echo "<div class='product-prop product-name'> <h2> {$row1['FullName']} </div>

                        <div class='product-prop product-button'>
                            <a href='./product_deleteUser.php?id={$row1['IdUser']}'> Xóa</a>
                        </div>
                  
                        <div class='clear-both'></div>
                    </li>";
                }?>
                
