    <?php
    $link = mysqli_connect("localhost", "root", "sax4071505", "salary") or die("Error " . mysqli_error($link));     
            $query = 'SELECT * FROM users';
            $result = $link->query($query); 
            $users = array();
            while($row = mysqli_fetch_array($result)) {
               $users[] = $row;                
            }
    ?>