<?php
                while ($row1 = sqlsrv_fetch_array($result) ) {
                
                  echo "  <li>
                        <div class='product-prop product-img'><img src=' {$row1['linkDV']}' alt='<?= {$row1['FullNameDV']} ?>' title='<?= {$row1['FullNameDV']} ?>' /></div>";
                        echo "<div class='product-prop product-name'> <h2> {$row1['FullNameDV']} </div>

                        <div class='product-prop product-button'>
                            <a href='./product_deleteDV.php?id={$row1['IdDienVien']}'> Xóa</a>
                        </div>

                       
                  
                        <div class='clear-both'></div>
                    </li>";
                }?>
                
