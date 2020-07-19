<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home"><?php echo Yii::app()->getController()->getId() ?></a>

        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
           
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                       <?php
                       foreach($ads as $item){ ?>
                           <li><a href="<?php echo $item['fake_link'] ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>" alt="slide-left"></a></li>
                      <?php  }
                       ?>
                       
                    </ul>
                </div>
               
                <div class="block left-module">
                    <p class="title_block">Giảm Giá</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                            <?php
                            foreach($sale as $item){ ?>
                                <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="<?php echo Yii::app()->request->baseUrl.'/Detail/Detail/id/'; ?><?php  echo $item['id_product']?>">
                                            <img id="img_<?php echo $item['id_product'] ?>" class="img-responsive" alt="product" src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>" />
                                        </a>
                                        <div class="price-percent-reduction2">-<?php echo $item['is_sale_percent'] ?>% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a id="name_<?php echo $item['id_product'] ?>" href="<?php echo Yii::app()->request->baseUrl.'/Detail/Detail/id/'; ?><?php  echo $item['id_product']?>"><?php echo $item['name'] ?></a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$<?php echo $item['price_old'] ?></span>
                                            <span id="pri_<?php echo $item['id_product'] ?>" class="price old-price">$<?php echo $item['price_new'] ?></span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                         <button class="btn-add-cart" type="submit" onclick="showAddCart('<?php echo $item['id_product']?>')">Mua Hàng</button>
                                        
                                    </div>
                                </div>
                            </li>
                             
                           <?php }
                            ?>
                           
                        </ul>
                    </div>
                </div>
               
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                 <?php
                                  foreach ($data as $item){ ?>
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="img_<?php echo $item['id_product'] ?>" src='<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>' data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                            <li>
                                                <a href="#" data-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>">
                                                    <img id="product-zoom"  src="<?php echo Yii::app()->request->baseUrl; ?>/data/product-s3-100x122.jpg" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review_one'] ?>" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review_one'] ?>">
                                                    <img id="product-zoom"  src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review_one'] ?>" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review2'] ?>" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review2'] ?>">
                                                    <img id="product-zoom"  src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review2'] ?>" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review3'] ?>" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review3'] ?>">
                                                    <img id="product-zoom"  src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review3'] ?>" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review4'] ?>" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review4'] ?>">
                                                    <img id="product-zoom"  src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image_review4'] ?>" /> 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>" data-zoom-image="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>">
                                                    <img id="product-zoom"  src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $item['image'] ?>" /> 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                           
                                 <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 id="name_<?php echo $item['id_product'] ?>" class="product-name"><?php echo $item['name'] ?></h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    
                                </div>
                                <div class="product-price-group">
                                    <span id="pri_<?php echo $item['id_product'] ?>" class="price"><?php echo $item['price_new'] ?></span>
                                    <span class="old-price"><?php echo $item['price_old'] ?></span>
                                    <span class="discount"><?php echo $item['is_sale'] ?></span>
                                </div>
                                <div class="info-orther">
                                    <p>Mã sản phẩm: <?php echo $item['id_product'] ?></p>
                                    <?php
                                     if( $item['quanty']>0){?>
                                          <p>Trạng Thái: <span class="in-stock">Còn Hàng</span></p>
                                     <?php }else{ ?>
                                         <p>Trạng Thái: <span class="in-stock">Hết Hàng</span></p>
                                    <?php }
                                    ?>
                                   
                                
                                </div>
                                <div class="product-desc">
                                    <?php echo $item['description'] ?>
                                </div>
                                <div class="form-option">
                                    <p class="form-option-title"></p>
                                    <div class="attributes">
                                        <div class="attribute-label"></div>
                                        <div class="attribute-list">
                                            <ul class="list-color">
                                                 <?php
                                                    $temDataColors = array(0 => 0);
                                         
                                                        $tem = explode(',', $item['id_color']);
                                                        $temDataColors = array();
                                                        foreach ($tem as $item1) {
                                                            $temDataColors[$item1] = $item1;
                                                        }
                                                   
                                                    echo CHtml::checkBoxList('Product[id_color][]', $temDataColors, $Color, array(
                                                        'template' => '{input}{label}',
                                                        'separator' => '',
                                                        'labelOptions' => array(
                                                         'style' => '
                                                                    padding-left:15px;
                                                                    width: 70px;
                                                                    float: left      
                                                                        '),
                                                          'style' => 'float:left;',
                                                            )
                                                    );
                                                    ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <p> <?php echo $item['quanty'] ?></p>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <?php
                                                
                                                $temDataSize = array(0 => 0);
                                               
                                                    $tem = explode(',', $item['id_size']);
                                                    $temDataSize = array();
                                                    foreach ($tem as $item1) {
                                                        $temDataSize[$item1] = $item1;
                                                    }
                                                
                                                echo CHtml::checkBoxList('Product[id_size][]', $temDataSize, $Size, array(
                                                    'template' => '{input}{label}',
                                                    'separator' => '',
                                                    'labelOptions' => array(
                                                        'style' => '
                                                padding-left:10px;
                                                width: 60px;
                                                float: left;
                                                                            
                                                                '),
                                                    'style' => 'float:left;',
                                                        )
                                                );
                                                ?>
                                            <a id="size_chart" class="fancybox" href="<?php echo Yii::app()->request->baseUrl; ?>/data/size-chart.jpg">Size Chart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                         <button class="btn-add-cart" type="submit" onclick="showAddCart('<?php echo $item['id_product']?>')">Mua Hàng</button>
                                        
                                    </div>
                                    
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                       
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>  
                            <?php   }
                            ?>
                           
                        </div>
                           <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading"></h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                <?php
                                foreach($better as $item){?>
                                  <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="<?php echo Yii::app()->request->baseUrl.'/Detail/Detail/id/'; ?><?php  echo $item['id_product']?>">
                                                <img id="img_<?php echo $item['id_product'] ?>" class="img-responsive" alt="product" src="<?php echo Yii::app()->request->baseUrl; ?>/<?php  echo $item['image']?>" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="" type="submit" onclick="showAddCart('<?php echo $item['id_product']?>')">Mua Hàng</button>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a id="name_<?php echo $item['id_product'] ?>" href="<?php echo Yii::app()->request->baseUrl.'/Detail/Detail/id/'; ?><?php  echo $item['id_product']?>"><?php  echo $item['name']?></a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price"><?php  echo $item['price_old']?></span>
                                                <span id="pri_<?php echo $item['id_product'] ?>" class="price old-price">$<?php  echo $item['price_new']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php }
                                ?>
                                
                                
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Sản Phẩm Tương Tự</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                               <?php
                                   foreach ($similar as $item){?>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="<?php echo Yii::app()->request->baseUrl.'/Detail/Detail/id/'; ?><?php  echo $item['id_product']?>">
                                                <img id="img_<?php echo $item['id_product'] ?>" class="img-responsive" alt="product" src="<?php echo Yii::app()->request->baseUrl; ?>/<?php  echo $item['image']?>" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                               <button class="" type="submit" onclick="showAddCart('<?php echo $item['id_product']?>')">Mua Hàng</button>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a id="name_<?php echo $item['id_product'] ?>" href="<?php echo Yii::app()->request->baseUrl.'/Detail/Detail/id/'; ?><?php  echo $item['id_product']?>"><?php  echo $item['name']?></a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price"><?php  echo $item['price_old']?></span>
                                                <span id="pri_<?php echo $item['id_product'] ?>" class="price old-price">$<?php  echo $item['price_new']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                  <?php }                        
                               ?>
                                
                                
                            </ul>
                        </div>
                     
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
