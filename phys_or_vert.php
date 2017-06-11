<?php
#Script to call the list of ips, and find out VM/Phys.
#Written By: skinnymg1 and Apathy_Killz

#Action of calling my text file for the list of IPs given. Remember to change path to #file.
$target_data = file_get_content(“path/to/file.txt”);

#echo section for double checking my work.
//echo $target_data . "\n";

#Taking data from given txt file and exploding it into an array.
$array = explode("$target_data")

#Print section for making sure my data is set into called upon array.
print_r $array . "\n"

?>
