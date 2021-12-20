
<?php
include ('header.php');
?>


<br><br>

<div class="tdb-super-container center">
    
<h1>PRODUCT</h1>

<div class="tdb-super-container">   

<br><br><br>
        <div class="tdb-md-row center">
<?php
include ("database/dbcon.php");


$sql = "SELECT * FROM `product`";
$getdata = mysqli_query($con , $sql);

if(!$getdata){
    echo "not query run";
}else{
    while($row = mysqli_fetch_assoc($getdata)){
      
?>
            <div class="tdb-md-4 center">
                <form action="cart.php" method="GET">
                <a href="cart.php?name=<?php echo $row['id']; ?>&addtocart=1"><img class="border4" src="<?php echo $row['productimage']; ?>" alt="" width="50%">
                    <h4><?php echo $row['name']; ?>  </h4>
                    <hr width="50%">
                    <h5> Price : <?php echo $row['discription']; ?> </h5>                   
                    <input type="hidden" name=name value=<?php echo $row['id']; ?> >
    </a>
                    <button class="buy btn1-tdb" name="addtocart" value="<?php echo $row['id']?>"><b>ADD TO CART  </b>  <i  class="fas fa-cart-plus"></i></button>
   
                    </form>
                    <br>
                    <br>
              
            </div>            
<?php
    }
    ?>
<!-- 
<script>
    $(document).ready(function(){
        $(".buy",this).click(function(){
           let myvalue= $(this).val().trim();
           $.ajax({            
               type: "post",
               url: "url.php",
               data: {myvalue1:myvalue},
               success:function(response){
                   console.log(response); 
                   if(response==1){
                    console.log('added to cart');
                   }
                   else{
                    console.log('failed');
                   }
               }
           });
        });  
    });
</script> -->

<?php
}

?>
        </div>
    </div>

</div>

<br><br><br>
<?php

include ("footer.php");

?>
