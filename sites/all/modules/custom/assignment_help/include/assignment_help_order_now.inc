<?php

function assignment_help_order_now()
{
	global $user;

	ctools_include('modal');
	
	$form_state['ajax'] = TRUE;
	
	$form_state['nid'] = $id;
	$form_state['type'] = $type;
	
	$commands = ctools_modal_form_wrapper('assignment_help_order_now_form', $form_state);

	return array(
		'#type' => 'ajax',
		'#commands' => $commands
	);
}

function assignment_help_order_now_form($form,$form_state)
{
	global $user;

	$account = user_load($user->uid);
	
	$form['#prefix'] = '';
	$form['#prefix'] .= "<div id='request-approved-form-wrapper'>";

	if ($form_state['type'] == 'bundle') {
	$form['#prefix'] .= "<div class='alert alert-info text-center well-sm'>
There is no scheduled class for a class in this Package. If you are interested in purchasing this Package, please fill in your contact information and submit a request for the Package.
</div>";
	}
	
	$form['mail'] = array(
		'#type' => 'textfield',
		'#title' => t('Email'),
		'#required' => true,
		'#attributes' => array('placeholder' => 'example@abc.com'),
	);

	$form['Subject'] = array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#required' => true,
		'#attributes' => array('placeholder' => 'Subject'),
	);


  $form['date'] = array(
    '#type' => 'date_popup',
    '#size' => 26,
    '#date_format' => variable_get('date_format_short', 'm/d/Y - H:i'),
    '#default_value' => '',
    '#prefix' => '<div class="col1">',
    '#suffix' => '</div>',
    '#required' => true,
    '#title' => t('Assignment deadline'),
  );
  
	$form['contact_number'] = array(
		'#type' => 'textfield',
		'#title' => t('Contact Number'),
		'#attributes' => array('placeholder' => 'Contact Number'),
	);

	$options =  _addressfield_country_options_list();
	$options = array( 0=> "Select Country") + $options;

	$form['country'] = array(
		'#type' => 'select',
		'#title' => t('Country'),
		'#options' => $options,
	);

	$form['description'] = array(
		'#type' => 'textarea',
		'#title' => t('Description'),
		'#attributes' => array('placeholder' => 'Brief description regarding your subject...'),
	);
  
//   $form['file'] = array(
//        '#type' => 'file',
//        '#title' => t('Choose a file'),
//    );
   
   $form['file'] = array(
		'#type' => 'managed_file',
		'#title' => t('Attach File'),
		'#default_value' => variable_get('attach_file', ''),
//		'#upload_location' => 'public://rate_logo/',
		
	);
   
	$options_reference = array("Reference Style", "Harvard", "APA", "MLA", "Chicago", "Oxford", "Turbanian", "AGLC", "Other");

	$form['refrence_style'] = array(
		'#type' => 'select',
		'#title' => t('Reference Style'),
		'#options' => $options_reference,
	);
	
   $form['no_of_references'] = array(
   '#type' => 'textfield',
   '#title' => t('Number of references'),
   '#attributes' => array('placeholder' => 1),
  );
    
	$form['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Submit'),
	);

	$form['cancel'] = array(
		'#type' => 'submit',
		'#value' => t('Cancel'),
	);
	
	$form['#validate'][] = 'assignment_help_order_now_form_validate';
	$form['submit']['#ajax'] = array('callback' => 'assignment_help_order_now_submit','wrapper' => 'request-approved-form-wrapper');
	$form['cancel']['#ajax'] = array('callback' => 'assignment_help_order_now_form_cancel');

	$form['#suffix'] = '</div>';

	return $form;
}

function assignment_help_order_now_form_validate($form,$form_state)
{
	$values = (object)$form_state['values'];
	
//	if ( !valid_email_address($values->mail)) {
//		form_set_error('mail','Please provide valid email address.');
//	}
//
//	if ($request) {
//		form_set_error('','We have already recevied your request for your interest.');
//	}
}

function assignment_help_order_now_submit($form,$form_state)
{
global $user;

ctools_include('modal');
ctools_include('ajax');

$values = $form_state['values'];
$to = 'contact@anyassignmenthelp.com';
$from = $values['mail'];

// Get the to and from e-mail addresses.
$values['message'] = "Need Help In : ".$values['Subject'] . " having ". $values['no_of_pages'] ." pages before " . $values['date'];

drupal_mail('assignment_help', 'order_now', $to, language_default(), $params);

drupal_set_message(t("Thank you for submitting your order will get back to you shortly."));

//$commands[] = ctools_modal_command_display("Successfull", theme('status_messages'));

$commands[] = ctools_ajax_command_reload();

return array('#type' => 'ajax', '#commands' => $commands);	
}

function assignment_help_order_now_form_cancel($form,$form_state)
{
	ctools_include('modal');
	$commands[] = ctools_modal_command_dismiss();
	return array('#type' => 'ajax', '#commands' => $commands);	
}
