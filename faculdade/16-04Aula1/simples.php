<div class="row">
    <div class="col"><br>
        <?php
        $idade=$_POST['idade'];
        if($idade>=35){
            echo"<h1> Você já pode se candidatar para presidente!</h1>";
        }
        else{
            echo"<h1>Você está muito novo para se candidatar</h1>";
        }
        ?>
        <br>
        <br>
    </div>
</div>
    