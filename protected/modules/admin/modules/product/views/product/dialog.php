<?php

                            echo chtml::checkBoxList('Color[Colors][]', $Color, $Color, array(
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