 <div id="address-box">
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/data/introduce-logo.png" alt="" /></a>
                        <?php foreach ($data as &$item){?>
                        <div id="address-list">
                        
                            <div class="tit-contain"><?php echo $item['address']?></div>
                       
                            <div class="tit-contain"><?php echo $item['telephone']?></div>
                   
                            <div class="tit-contain"><?php echo $item['email']?></div>
                        </div>
                        <?php } ?>
                    </div> 