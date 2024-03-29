﻿<?php

$xfdf_head = '<?xml version="1.0" encoding="UTF-8"?><xfdf xmlns="http://ns.adobe.com/xfdf/" xml:space="preserve"><fields>';
$xml_data = '';
$xfdf_end = '</fields></xfdf>';

function month($i)
{
	switch($i)
	{
		case 1:
			return "January";
		case 2:
			return "February";
		case 3:
			return "March";
		case 4:
			return "April";
		case 5:
			return "May";
		case 6:
			return "June";
		case 7:
			return "July";
		case 8:
			return "August";
		case 9:
			return "September";
		case 10:
			return "October";
		case 11:
			return "November";
		case 12:
			return "December";
		default:
			return "Invalid";
	}
}

$field = array();
for($i = 0; $i <= 90; $i++)
{
	$field[$i] = 'text'.($i+1);
}
if(isset($_POST["jumbo_six"]))
{
	$jumbo6 = array();
	foreach($_POST["jumbo_six"] as $value)
	{
		$jumbo6[] = $value;
	}
	$jumbo6[3].='/'.$jumbo6[4].'/'.$jumbo6[5];
	$jumbo6[4] = $jumbo6[6];
	for($i=0;$i<=4;$i++)
	{
		$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo6[$i].'</value>
			</field>';
	}
}

if(isset($_POST["jumbo_one"]))
{
	$jumbo1 = array();
	foreach($_POST["jumbo_one"] as $value)
	{
		$jumbo1[] = $value;
	}
	$jumbo1[1].=', '.$jumbo1[2].', '.$jumbo1[3].'-'.$jumbo1[5].', '.$jumbo1[4].', '.$jumbo1[6];
	$jumbo1[7].=', '.$jumbo1[8].', '.$jumbo1[9].'-'.$jumbo1[11].', '.$jumbo1[10].', '.$jumbo1[12];
	$temp = 13;
		$xml_data .= '
			<field name="'.$field[5].'">
				<value>'.$jumbo1[0].'</value>
			</field>';
		$xml_data .= '
			<field name="'.$field[6].'">
				<value>'.$jumbo1[1].'</value>
			</field>';
		$xml_data .= '
			<field name="'.$field[7].'">
				<value>'.$jumbo1[7].'</value>
			</field>';
		for($i=8;$i<=10;$i++)
			$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo1[$temp++].'</value>
			</field>';
}



if(isset($_POST["jumbo_two"]))
{
	$jumbo2 = array();
	foreach($_POST["jumbo_two"] as $value)
	{
		$jumbo2[] = $value;
	}
	$jumbo2[1].=', '.$jumbo2[2].', '.$jumbo2[3].'-'.$jumbo2[5].', '.$jumbo2[4].', '.$jumbo2[6];
	$jumbo2[2]=$jumbo2[7];$jumbo2[3]=$jumbo2[8];
	$temp=1;
	$xml_data .= '
			<field name="adjust5">
				<value>'.$jumbo2[0].'</value>
			</field>';
	for($i=11;$i<=13;$i++)
	{
		if($i<13)
		$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo2[$temp++].'</value>
			</field>';
		else
		$xml_data .= '
			<field name="adjust3">
				<value>'.$jumbo2[$temp].'</value>
			</field>';
	}
}


if(isset($_POST["jumbo_three"]))
{
	$jumbo3 = array();
	foreach($_POST["jumbo_three"] as $value)
		$jumbo3[] = $value;
	$xml_data .= '
			<field name="'.$field[13].'">
				<value>'.$jumbo3[0].'</value>
			</field>';
	$xml_data .= '
			<field name="'.$field[14].'">
				<value>'.$jumbo3[1].'</value>
			</field>';
	if(isset($_POST["jumbo_three_check1"]))
	$xml_data .= '
			<field name="adjust1">
				<value>'.$_POST["jumbo_three_check1"].'</value>
			</field>';
	if(isset($_POST["jumbo_three_check2"]))
	$xml_data .= '
			<field name="adjust2">
				<value>'.$_POST["jumbo_three_check2"].'</value>
			</field>';
}


if(isset($_POST["jumbo_four"]))
{
	$jumbo4 = array();
	foreach($_POST["jumbo_four"] as $value)
	{
		$jumbo4[] = $value;
	}
	$temp = 0;
	for($i=15;$i<20;$i++)
	{
		$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo4[$temp++].'</value>
			</field>';
	}$data = $jumbo4[$temp-3].' '.month($jumbo4[$temp-2]).' '.$jumbo4[$temp-1];
	$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$data.'</value>
			</field>';
	if(isset($_POST["jumbo_four_check"]))
	{
		$jumbo4_chk = array();
		foreach($_POST["jumbo_four_check"] as $value)
		{
			$jumbo4_chk[] = $value;
		}
		$xml_data .= '
			<field name="adjust4">
				<value>'.$jumbo4_chk[0].'</value>
			</field>';
	}
}


if(isset($_POST["jumbo_five"]))
{
	$jumbo5 = array();
	foreach($_POST["jumbo_five"] as $value)
	{
		$jumbo5[] = $value;
	}
	$temp = 0;
	if(isset($_POST["jumbo_five_check"]))
	{
		$jumbo5_chk = array();
		foreach($_POST["jumbo_five_check"] as $value)
		{
			$jumbo5_chk[] = $value;
		}
		$xml_data .= '
			<field name="'.$field[21].'">
				<value>'.$jumbo5_chk[0].'</value>
			</field>';
	}	
	else
		$xml_data .= '
			<field name="'.$field[21].'">
				<value>'.$_POST["jumbo_five_chk"].'</value>
			</field>';
	$xml_data .= '
			<field name="'.$field[22].'">
				<value>'.$jumbo5[0].'</value>
			</field>';
	$jumbo5[1].='/'.$jumbo5[2].'/'.$jumbo5[3];
	$jumbo5[4].='/'.$jumbo5[5].'/'.$jumbo5[6];
	$xml_data .= '
			<field name="'.$field[23].'">
				<value>'.$jumbo5[1].'</value>
			</field>';
	$xml_data .= '
			<field name="'.$field[24].'">
				<value>'.$jumbo5[4].'</value>
			</field>';
	$temp = 7;
	for($i=25;$i<=65;$i++)
		$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo5[$temp++].'</value>
			</field>';
	$temp_use="";
	if(isset($_POST["catscore"]))
	{	$xml_data .= '
			<field name="'.$field[66].'">
				<value>'.$_POST["catscore"].'</value>
			</field>';
		$xml_data .= '
			<field name="'.$field[67].'">
				<value>'.$_POST["catpercent"].'</value>
			</field>';
		for($i=68;$i<=69;$i++)
			$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$temp_use.'</value>
			</field>';
	}
	else
	{	
		for($i=66;$i<=67;$i++)
			$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$temp_use.'</value>
			</field>';
		$xml_data .= '
			<field name="'.$field[68].'">
				<value>'.$_POST["catscore"].'</value>
			</field>';
		$xml_data .= '
			<field name="'.$field[69].'">
				<value>'.$_POST["catpercent"].'</value>
			</field>';
	}
	for($i=70;$i<=84;$i++)
	{	if(isset($jumbo5[$temp]))
		$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo5[$temp++].'</value>
			</field>';
	}
	$jumbo5_center = array();
	foreach($_POST["jumbo_five_centre"] as $value)
	{
		$jumbo5_center[] = $value;
	}
	if($jumbo5_center[0]=="NITK")
	{	$xml_data .= '
			<field name="Check_Box1">
				<value>Yes</value>
			</field>';
		$xml_data .= '
			<field name="Check_Box2">
				<value>Off</value>
			</field>';
	}
	else
	{	$xml_data .= '
			<field name="Check_Box1">
				<value>Off</value>
			</field>';
		$xml_data .= '
			<field name="Check_Box2">
				<value>Yes</value>
			</field>';
	}
}


if(isset($_POST["jumbo_seven"]))
{
	$jumbo7 = array();
	foreach($_POST["jumbo_seven"] as $value)
	{
		$jumbo7[] = $value;
	}
	$temp = 0;
	for($i=85;$i<=86;$i++)
			$xml_data .= '
			<field name="'.$field[$i].'">
				<value>'.$jumbo7[$temp++].'</value>
			</field>';
}

		 
		 

$FDF_content = $xfdf_head.$xml_data.$xfdf_end;

$FDF_file = fopen('new_fdf.fdf', 'w');
fwrite($FDF_file, $FDF_content);
fclose($FDF_file);
$pdf_template = "FORMS/mba-form.pdf";
$new_fillup_pdf = "new.pdf";

$pdftk_command = 'pdftk '. $pdf_template .' fill_form new_fdf.fdf output '.$new_fillup_pdf.' flatten';
exec($pdftk_command);

echo '<a href="'.$new_fillup_pdf.'">download</a>';

?>
