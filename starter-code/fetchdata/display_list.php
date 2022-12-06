<?php
 function displayList(){

    $conn = mysqli_connect("localhost","root","","space_member");
    // $query = "select employee-detail.username, department_details.Department_name  from  employee-detail right join department_details on select employee-detail.username = department_details.Department_name";
    // $query="SELECT employee-detail.username,department_details.Department_name from employee-detail inner join department_details on employee-detail.id = Department_details.emp_name";
            // print_r($query);die();
    
            $query = "select membership.id, membership.Username, feedback.follow , feedback.url,feedback.rating,feedback.image_name from `membership` left join `feedback` on membership.id = feedback.user_id";
    
            $fetch =mysqli_query($conn,$query);
            $num=mysqli_num_rows($fetch);
            
            $data=mysqli_fetch_all($fetch,MYSQLI_ASSOC);
        
            // print_r($data);
    
           echo"<tbody>";
            for($i=0; $i< $num ;$i++){
                $m=$i+1;
                    echo"<tr>";
                    // echo"<td>".$i."</td>";
                    echo"<td>".$m."</td>";
                    echo"<td>".$data[$i]['id']."</td>";
                    echo"<td>".$data[$i]['Username']."</td>";
                //     echo"<td>".$data[$i]['follow']."</td>";
                    echo"<td><a href='".$data[$i]['url']."' target='_blank' >".$data[$i]['follow']."</a></td>";
                    echo"<td>";
                      for($j = 0 ; $j < $data[$i]['rating']; $j++){
                        echo "⭐";
                       }
                     echo"</td>";
                    echo"<td><img id='prf' src='upload/".$data[$i]['image_name']."'></td>";
                    echo"<td><a href='https://www.facebook.com' target='_blank'>CLICK</a></td>";
                    echo"</tr>";
    
            }
            echo"<tbody>";
    }
    

 
    ?>