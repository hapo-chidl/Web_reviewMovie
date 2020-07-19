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
									 <img class='thumb' src='{$row['linkDD']}'  />								  
									</div> ";
									
								
             echo "<div class='clear'></div>
									<a href='singleDD.php?id={$row['IdDirector']}'><h3>{$row['FullName']}
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