﻿<?php

$xfdf_head = '<?xml version="1.0" encoding="UTF-8"?><xfdf xmlns="http://ns.adobe.com/xfdf/" xml:space="preserve"><fields>';
$xml_data = '';
$xfdf_end = '</fields></xfdf>';

echo "coming here";
$field_value = array();
for($i = 0; $i <= 90; $i++){
	$field_value[] = 'text'.($i+1);
	echo $field_value[];
}


$fields = array();
if(isset($_POST['field'])
foreach($_POST['field'] as $value)
	$fields[] = $value;

echo $fields[];

/* Generate all fields with field_key form webform and value form submission 
foreach ($webform['#node']->webform['components'] as $key => $value) {

    if ($webform['#submission']->data[$key]['value'][0]){
        $valeur = $webform['#submission']->data[$key]['value'][0];
    } else {
        $valeur = '';
    }

    $xml_data .= '
        <field name="'.$webform['#node']->webform['components'][$key]['form_key'].'">
            <value>'.$valeur.'</value>
        </field>';
}

for($i=0;$i<=91;$i++)
{
	$xml_data .= '
   	     <field name="'.$field_value[].'">
   	         <value>'.$fields[].'</value>
   	     </field>';

	echo $field_value[].'<br>'.$fields[].'<br><br><br>';
}

$FDF_content = $xfdf_head.$xml_data.$xfdf_end;

$FDF_file = fopen('new_fdf.fdf', 'w');
fwrite($FDF_file, $FDF_content);
fclose($FDF_file);
$pdf_template = "FORMS/mba-form.pdf";
$new_fillup_pdf = "new.pdf";

$pdftk_command = '/usr/bin/pdftk '. $pdf_template .' fill_form new_fdf.fdf output '.$new_fillup_pdf.' flatten';
shell_exec($pdftk_command);

echo '<a href="'.$new_fillup_pdf.'">download</a>';*/

?>