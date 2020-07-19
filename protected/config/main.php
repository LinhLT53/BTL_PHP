<?php




return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',


	'preload'=>array('log'),
        'defaultController' => 'Home', 

	'import'=>array(
		'application.models.*',
                'application.models.base.*',
		'application.components.*',
                'application.extensions.ckeditor.*',
	),

	'modules'=>array(
		
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'dunghoi??',
			
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	  'admin' =>array(
             'defaultController' => 'Login',
              'modules'=>array(
                  'product'=>array(
                      'defaultController' => 'Product', 
                  ),
                  'ads'=>array(
                      'defaultController' => 'Ads', 
                  ),
                  'attribute'=>array(
                      'defaultController' => 'Attribute', 
                  ),
                  'banner'=>array(
                      'defaultController' => 'Banner', 
                  ),
                   'category'=>array(
                      'defaultController' => 'Category', 
                  ),
                  'color'=>array(
                      'defaultController' => 'Color', 
                  ),
                   'comment'=>array(
                      'defaultController' => 'Commnent', 
                  ),
                   'contact'=>array(
                      'defaultController' => 'Contact', 
                  ),
                   'gender'=>array(
                      'defaultController' => 'Gender', 
                  ),
                   'news'=>array(
                      'defaultController' => 'News', 
                  ),
                   'newsType'=>array(
                      'defaultController' => 'NewsType', 
                  ),
                   'order'=>array(
                      'defaultController' => 'Order', 
                  ),
                  'orderDetail'=>array(
                      'defaultController' => 'OrderDetail', 
                  ),
                  'ratting'=>array(
                      'defaultController' => 'Ratting', 
                  ),
                  'shopConfig'=>array(
                      'defaultController' => 'ShopConfig', 
                  ),
                  'size'=>array(
                      'defaultController' => 'Size', 
                  ),
                  'user'=>array(
                      'defaultController' => 'User', 
                  ),
              ),
         ),	
	),


	'components'=>array(


            'session' => array(
            'autoStart' => true,
        ),
        'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName' => false,
                        'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		
		'db'=>require(dirname(__FILE__).'/database.php'),



		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			
			),
		),
         'Smtpmail'=>array(
            'class'=>'application.extensions.smtpmail.PHPMailer',
            'Host'=>"smtp.gmail.com",
            'Username'=>'trunghd789mta@gmail.com',
            'Password'=>'dunghoi??',
            'Mailer'=>'smtp',
            'Port'=>465,
            'SMTPSecure'=>'ssl',
            'SMTPAuth'=>true, 
        ),
	),


	'params'=>array(
	
		'adminEmail'=>'lethuylinh@gmail.com.com',
                'pager'=>15,
                'pagerNews'=>5
             
	),
        
);
