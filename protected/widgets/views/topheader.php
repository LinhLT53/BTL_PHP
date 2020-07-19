 <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="<?php echo Yii::app()->request->baseUrl; ?>/images/phone.png" />0329154343</a>
                
            </div>
           
           
            
           
<?php 

if(Yii::app()->session['id']==null)
{
    ?>
 <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Tài Khoản Của Tui</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a onclick="showLogin()" >Đăng Nhập</a></li>
                        <li><a onclick="showReg()" >Đăng Ký</a></li>
                        
                    </ul>
                </div>
            </div>
    <?php

}
else
{ 
    ?>
     <div id="user-info-top" class="user-info pull-right">
              <a onclick="logout();"> Đăng Xuất <?php echo "(". Yii::app()->session['member'].")";  ?> </a>
            </div>
    <?php
}
?>
          
        </div>
    </div>