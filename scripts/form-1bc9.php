<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Congratulations',
    'email_message' => 'Congratulations!
You have successfully Registered for the Robotics Bootcamp Program. Kindly wait for Further Information. 
Thank you!',
    'success_redirect' => '',
    'email' => array(
    'from' => 'leonardkachumi@yahoo.com',
    'to' => 'leonardkachumi@gmai.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'name-1' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'name-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-1\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'address' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Address',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Address\' is required.'
    )
    ),
    'phone' => array(
    'order' => 5,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'date' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'Date',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date\' is required.'
    )
    ),
    'agree' => array(
    'order' => 7,
    'type' => 'checkbox',
    'label' => 'I accept the Terms of Service',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'I accept the Terms of Service\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>