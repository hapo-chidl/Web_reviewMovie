<?php
					
					for($i=0; $i<2; $i++)
					{	$j=0;
					echo"<div class='row'>";
					 while (   ($j!=4) ) {
					 	$row = sqlsrv_fetch_array($result)  ;
					 	$j++;
							echo "<div class='col-1-4'>";
							echo "<div class='wrap-col'>";
								
								echo"<div class='post'>";
					
									echo " <div class='view effect'> 
									 <img class='thumb' src='{$row['link']}'  />								  
									</div> ";
									
								
             echo "<div class='clear'></div>
									<a href='single.php?id={$row['IdMovie']}'><h3>{$row['TenPhim']}
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