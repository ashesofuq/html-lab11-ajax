<?php include "connect.php"?>

<?php
    $keyword = $_GET["keyword"];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE '%$keyword%'");         
    $stmt->execute();   
?>  
        
<?php while($row = $stmt->fetch()){  ?>
    ชื่อสมาชิก: <?=$row["name"]?><br>
    ที่อยู่: <?=$row["address"]?><br>
    อีเมล: <?=$row["email"]?><br>    
    <div>
        <img src='member_photo/<?=$row["username"]?>.jpg'><br>
    </div> <hr>            
<?php } ?>
