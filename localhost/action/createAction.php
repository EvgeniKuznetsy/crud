<?php
include "../connect.php";
$category=$_POST['category'];
$name=$_POST['name'];
$img=$_POST['img'];
$count=$_POST['count'];
$ones=$_POST['ones'];
$price=$_POST['price'];

function form_submitted($form_name=false){
    if(!isset($_POST['submit'])){ // был ли вообще сабмит
      return false; //неа, завершаем
    }
    if($form_name && $_POST['submit']!=$form_name){ //если проверяется конкретная форма, была ли отправлена именно она?
      return false;//нет, завершаем
    }
    return true;//все, ок.
  }


  
function location(){
  header("Location: ../create.php");
}
function output($category,$name,$img,$count,$ones,$price,$induction){
 if (form_submitted()==true) {
   
    $sql=mysqli_query($induction, "INSERT INTO `product` (`id`, `category`, `name`, `img`, `count`, `ones`, `price`) VALUES (NULL, '$category', '$name', '$img','$count', '$ones','$price')");
     if (mysqli_query($induction, $sql)) {
         
         mysqli_close($induction);
     } else {
      location();
     }
     
   }
    
 
}
output($category,$name,$img,$count,$ones,$price,$induction);


?>