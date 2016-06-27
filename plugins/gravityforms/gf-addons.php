<?php
/* ----------------------------------------------------------------------------------- */
/* 	DO NOT COPY/PASTE BETWEEN TEST AND PRODUCTION SERVERS without checking form IDs
/*	Form IDs are often different between sites and filters/actions won't work!
/* ----------------------------------------------------------------------------------- */

// Merge tag filter for registration notification
add_filter( 'gform_merge_tag_filter', 'filter_all_fields', 10, 4 );
function filter_all_fields( $value, $merge_tag, $modifier, $field ) {
    if ( $merge_tag == 'all_fields' && $field->id == '15' ) {
        return false;
    } else {
        return $value;
    }
}

// Gravity Forms - inventory
include('gw-gravity-forms-inventory.php');

// Limit number of Lunch registrations that can be submitted
// See exported .json in [C200 Summit project folder in shared drive]\Web Assets\Registration form\
// Note - form ID will be different for production site.

// test
new GWLimitBySum( array(
    'form_id'                => 1,
    'field_id'               => 16,   // Field ID for Lunch Registration: Hidden field
    'limit'                  => 200,    // Total lunch registration seats available
    'limit_message'          => 'We\'re sorry, but there are no more seats available for lunch.',
    'validation_message'     => 'We\'re sorry, but there are no more seats available for lunch.',
    'approved_payments_only' => false,
    'hide_form'              => false
) );

// production
new GWLimitBySum( array(
    'form_id'                => 2,
    'field_id'               => 16,   // Field ID for Lunch Registration: Hidden field
    'limit'                  => 200,    // Total lunch registration seats available
    'limit_message'          => 'We\'re sorry, but there are no more seats available for lunch.',
    'validation_message'     => 'We\'re sorry, but there are no more seats available for lunch.',
    'approved_payments_only' => false,
    'hide_form'              => false
) );

// Summit 2016 RSVP form - lunch registration counter
// Create "Lunch Choice" field as product field
// Set "lunch_qty" as parameter name for Hidden: Lunch Registration Quantity field and Map it to Lunch Choice 
add_filter("gform_field_value_lunch_qty", "register_lunch", 12, 13);
function register_lunch($value, $form, $field){
  if (!empty($field)){
    return 1;
    }
  else {
    return 0;
    }
}


?>