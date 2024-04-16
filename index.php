<?php 
include './inc/db.php';
include './inc/forM.php';
include './inc/seleCt.php';

include './inc/end_close.php';
?>
<?php include_once './par/header.php';?>

 



<div class="position-relative  text-center  bg-light"   >
  
   <div class="col-md-5 p-lg-5 mx-auto my-0">

    <img src="images/bb.png" width="300">

      <h1 class="display-4 fw-normal">اربح معنا</h1>

      <p class="lead fw-normal">باقي على فتح التسجيل.</p>

      <h3 id="demo"></h3>

      <p class="lead fw-normal"> للسحب على تذكرة سفر</p>
     
    </div>

    <ul class="list-group list-group-flush">

  <div class="contai">


<ul>

  <h3>

    للدخول ل السحب اتبع مايلي

  </h3>

  <div class="container">

  <li class="list-group-item">تابع البث المباشر على قناتي في اليوتيوب للفوز في الجوائز</li>

  <li class="list-group-item">راح اسوي بث لمده ساعه  عباره عن اسئله واجوبة حرة للجميع</li>

  <li class="list-group-item">وخلال فتح الساعه ستيم فتح صفحة التسجيل حيث ستقوم بستجيل اسمك وايميلك</li>

  <li class="list-group-item">بنهاية البث  ستيم اختيار اسم واحد  من قاعده البيانات بشكل عشوائي</li>

  <li class="list-group-item">الرابح سيحصل على تذكرة سفر لمدة شهر</li>

</ul>

</div>

  </div>

  </div>

  
<div class="container">

<div class="position-relative  text-rtl">

   <div class="col-md-5 p-lg-5 mx-auto ">

<form   action="<?php $_SERVER ['PHP_SELF']?>" method='POST'>

    <h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>

    <input type="text"   name="firstName"   class="form-control" id="firstName" aria-describedby=>

    <div class="form-text error"><?php   echo $errors['firstNameError']?></div>

  </div>

  <div class="mb-3">

  <label for="lastName" class="form-label">الاسم الاخير</label>

    <input type="text"    name="lastName"   class="form-control" id="lastName" aria-describedby=>

    <div  class="form-text error"><?php   echo $errors['lastNameError']?></div>

  </div>
  
  <div class="mb-3">
  <label for="email" class="form-label">البريد الالكتروني</label>

   <input type="text"   name="email"    class="form-control" id="email" aria-describedby=>

  <div  class="form-text error"><?php   echo $errors['emailError']?></div>
  <br>


  
  
  
  <button type="submit"   name="submit"     class="btn btn-primary   ">ارسال المعلومات</button>

</form>

</div>
   
 </div>





 

<div class="loader-con">

 <div id="loader">
 
	<canvas id="circularLoader" width="200" height="200"></canvas>
  
</div>

</div>








<!-- Button trigger modal -->

<div class="d-grid  gap-2 col-3 mx-auto my-5" >
  
<button type="button"  id="winner"   class="btn btn-primary ">

اختيار المتسابق الفائز</button>

</div>

<!-- Modal -->

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">

<canvas   class="confetti" id="canvas" ></canvas>

  <div class="modal-dialog  modal-dialog-centered">
  
    <div class="modal-content">

      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة </h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      
      <div class="modal-body">
        
      <?php foreach($users as $uesr): ?>
        

        <h1 class="display-1  text-center  modal-title"id="modalLabel"><?php echo htmlspecialchars( $uesr ['firstName']). ' ' . htmlspecialchars( $uesr ['lastName']); ?></h1>
        <?php endforeach ?>
        <br>
        <div class="modal-header">
      </div>
      <br>
        <h3><button data-bs-dismiss="modal" type="button" class="bo1">لقد ربحت معنا في الجائزة الكبرى</button></h3>
        
      </div>
  
    </div>
   
  </div>
</div>




 


 
 


<?php include_once './par/footer.php';?>



