
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
<?php
    if(isset($_POST['submit'])){
        
        for($i = 1;$i <= $_POST['size']; $i++){
            if(($i+9)%10 == 0 )
                echo $i.'<br>';
            if(($i-2)%10 == 0 )
                echo $i.'<br>';
            if(($i+6)%10 == 0)
                echo $i.'<br>';
            if(($i+2)%10 == 0)
                echo $i.'<br>';
        }
    }

?>