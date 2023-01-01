<?php   
function createHeader($icon, $heading, $sub_heading) {
  echo '
<header class="d-flex align-items-center justify-content-between">
  <div class="dashboard d-flex flex-column align-items-center mx-3">
      <p class="h4 pt-2"><i class="fa fa-'.$icon.'"></i>&emsp;'.$heading.'</p>
        &emsp;&emsp;<small class="fw-bold h6 mb-2">'.$sub_heading.'</small>
      </div>
  <div class="input">
    <input type="search" placeholder="search">
  </div>
  <div class="header__menu d-flex align-items-center justify-content-between gap-3 mr-5">
    <i class="fa-solid fa-id-card"></i>
    <i class="fa-solid fa-bell"><span><p>5</p></span></i>
    
<div class="col-md-1 user__options">
         <div class="col col-md-1 logout " onclick="showOptions();">
          <div class="avator">
          <div class="avator__image">
          </div>
           <p class="avator__name text-white mb-5"> Rozie </p> </div>
         <div id="mark"></div>
         <ul id="options" class="options list-unstyled" style="display: none;">
          <li class="mt-5 pt-3">
            <a href="my_profile.php"><i class="fa fa-user"></i>
            <span>My Profile</span>
            </a>         
            </li>         
            <li><a href="change_password.php"><i class="fa fa-edit"></i>
            <span>Change Password</span></a> 
            </li>         
            <li>
            <a href="logout.php" class="text-danger d-flex"><i class="fa fa-key text-danger"></i><span>Logout</span></a>
           </li>
         </ul> </div>
       </div>
   
</header>
<hr style="border-top: 2px solid #9732DAFF;">  
';}
?>
