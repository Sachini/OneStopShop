<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ItemView\Controller\ItemView' => 'ItemView\Controller\ItemViewController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'itemView' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/itemView[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'ItemView\Controller\ItemView',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'itemView' => __DIR__ . '/../view',
        ),
    ),
);