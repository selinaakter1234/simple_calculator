<?php require_once('header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
     <div class="card mt-3">
    <div class="card-header bg-success text-white text-center">
         <b>CALCULATOR</b>
      </div>
        <div class="card-body">
          <form action=" " method="POST">
            <div class="form-row mb-3">
              <input type="number" class="form-control" placeholder="enter your 1st number" name="first_num" required >
            </div >
            <div class="form-row mb-3">
              <input type="number" class="form-control" placeholder="enter your 2nd number" name="second_num" required>
            </div >
            <div class="form-row mb-3">
              <button type="submit"class="btn btn-primary" value="add" name="add_btn"> add </button>
              <button type="submit"class="btn btn-secondary" value="sub" name="sub_btn"> sub </button>
              <button type="submit"class="btn btn-danger" value="mult" name="multi_btn"> multi </button>
              <button type="submit"class="btn btn-warning" value="div" name="div_btn"> divide </button>
              <button type="submit"class="btn btn-info" value="mod" name="mod_btn"> mod </button> 
            </div>
          </form>
        </div>

        <div class="card-footer bg-success text-white text-center">
         <b>OUTPUT:</b>

         <?php
// $first_num = $_POST['first_num'];
// $second_num = $_POST['second_num'];
if(isset($_POST['first_num'])){
  $first_num = $_POST['first_num'];
}
if(isset($_POST['second_num'])){
  $second_num = $_POST['second_num'];
}

if(isset($_POST['add_btn'])){
echo $first_num + $second_num;
}
elseif(isset($_POST['sub_btn'])){
echo $first_num - $second_num;
}
elseif(isset($_POST['multi_btn'])){
 echo $first_num * $second_num;
}
elseif(isset($_POST['div_btn'])){
  if($second_num != 0){
    echo $first_num / $second_num;
  }
  else{
    echo " Can not devided by zero" ;
  }

}
elseif(isset($_POST['mod_btn'])){
echo $first_num % $second_num;
}
?>

      </div>

     </div>
    </div>

  </div>
</div>

<div>
</div>



<?php require_once('footer.php'); ?>
