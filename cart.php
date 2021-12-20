<?php
session_start();
include ("header.php");
include ("database/dbcon.php");


if(isset($_GET['addtocart'])){
    $id = $_GET['name'];
    
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $getdata = mysqli_query($con , $sql);

    if(!$getdata){
        echo "not query run";
    }else{
    $row = mysqli_fetch_assoc($getdata)




?>

<br><br>
<div class="tdb-super-container ">
    <div class="tdb-lg-row">
        <div class="tdb-lg-6 center border4">
        <a href="#">  <img class="border4" src="<?php echo $row['productimage']; ?>" alt="product image"></a>
        </div>
        <div class="tdb-lg-6 b-tdb-black padding-tdb10 border4">
            <h1><?php echo $row['name']; ?></h1>
            <p><?php echo $row['name']; ?></p>
            <p>You Save:<?php echo $row['discription']; ?> (10%)
Inclusive of all taxes
            <h4 class="padding-tdb5">IN STOCK</h4>
           <p><?php $row['price']  ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, enim? Deleniti hic nemo pariatur at error, doloremque repellendus eligendi aut nesciunt, delectus doloribus quidem, repudiandae eos. Optio dolores distinctio dicta.</p>

           <button class="center"><i class="fa fa-minus" aria-hidden="true"></i> </button> 1 <button> <i class="fa fa-plus" aria-hidden="true"></i></button><br>
           <br>
           <button class="buy" value="<?php echo $row['id'];?>">BUY NOW </button>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $(".buy").click(function(){
           let myvalue= $(".buy").val().trim();
           $.ajax({
            
               type: "post",
               url: "url.php",
               data: {myvalue1:myvalue},
               success: function (response) {
                   console.log(response);
                   if(response==1){
                    console.log('added to cart');
                   }
                   else{
                    console.log('failed');
                   }
               }
           });
        })    


    });
</script>

<?php
}
      

}
       

include ("footer.php");
?>