<?php

/// module/Notes/config/module.config.php:

return array(
    'controllers' => array(
        'invokables' => array(
            'Rating\Controller\Rating' => 'Rating\Controller\RatingController',
            
        ),
    ),
    
    
    // add this section
    'router' => array(
        'routes' => array(
            'notes' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/rating[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Rating\Controller\Rating',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            'notes' => __DIR__ . '/../view',
        ),
    ),
);
?>
