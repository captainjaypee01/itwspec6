
<br>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <div class="col-md-4">
                    <input type="number" class="form-control" name="size" placeholder="Enter number here..."/>
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
<?php
    if(isset($_POST['submit'])){
        $num = $_POST['size'];
        /*for($i = 1;$i <= $_POST['size']; $i++){
            if(($i-1)%8==0 || ($i)%8==0)
                echo $i.'<br>';
            if(($i+6)%8==0)
                echo $i.'<br>';
        }*/
        $ctr=0;
        $i = 1;
        while($i <= $num){
           echo "$i &nbsp;";
            if($ctr == 0){
                $i++;
                $ctr++;
            }
            else if($ctr == 1){
                $i+=2;
                $ctr++;
            }
            else if($ctr == 2){
                $i+=4;
                $ctr=0;
            }
            
        }
        
     
        
    }

?>