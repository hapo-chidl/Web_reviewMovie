<?php
					
					for($i=0; $i<2; $i++)
					{	$j=0;
					echo"<div class='row'>";
					 while ( $j!=4) {
	$row = sqlsrv_fetch_array($result) ;
					 	$j++;
							echo "<div class='col-1-4'>";
							echo "<div class='wrap-col'>";
								
								echo"<div class='post'>";
					
									echo " <div class='view effect'> 
									 <img class='thumb' src='{$row['linkDV']}'  />								  
									</div> ";
									
								
             echo "<div class='clear'></div>
									<a href='singleDV.php?id={$row['IdDienVien']}'><h3>{$row['FullNameDV']}
									</h3></a>
									";
															
								echo "</div>";
								//
							echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				}
					?>	