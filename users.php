<tbody>
				        <?php 
				        	$count = $result-> num_rows;
					        if($count>0){
					            $n  =   1;
					            while($row = $result->fetch_assoc()){ 
					        ?>
					        <tr>
					            <td><?php echo $row['firstname']; ?></td>
					            <td><?php echo $row['lastname']; ?></td>
					            <td><?php echo $row['email']; ?></td>
                                		    <td>'<?php echo $row['homeaddress']; ?></td>
                                                    <td>'<?php echo $row['homephone']; ?></td>
                                                    <td>'<?php echo $row['cellphone']; ?></td>
					        </tr>
					        <?php 
					            }
					        }
					        else {?>
					        <tr>
					            <td><strong>No Record(s) Found!</strong></td>
					        </tr>
					        $conn->close();
				        <?php } ?>
</tbody>
