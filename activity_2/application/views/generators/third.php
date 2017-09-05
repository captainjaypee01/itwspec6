
<br>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <div class="col-md-4">
                    <input type="number" class="form-control" name="size" placeholder="Enter even number only" required/>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="partner" placeholder="Enter partner here..." required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <input type="submit" class="form-control btn btn-danger" name="submit"/>
                </div>
            </div>
        </form>
        
    </div>
<hr>
<table class="table">
    <tr>
        <th>Length</th>
        <th>Partner</th>
        <th>Soulmate</th>
    </tr>
   
<?php
    if(isset($_POST['submit'])){
        $num = $_POST['size'];
        $partner = $_POST['partner'];
        $table = '';
        if(($num%2)==0){
            for($i = 0;$i<$num/2;$i++){
                echo "$i = ".(ceil($num/2) + $i)."<br>";
                
            }
        }
        else{
            echo '<script> alert("Even number only!");</script>';
        }
               
        $soulmate = $partner == 0 ? $num/2 : 0;
        if($partner > $num/2)
            $soulmate = $partner - ($num/2);
        else
            $soulmate = $partner + ($num/2);
        #$soulmate = $partner;
        $table = "<tr><td>$num</td><td>$partner</td><td>$soulmate</td>";
        echo $table;
    }

?>