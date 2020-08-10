<?php
/*
	Pugin Name: myPluginTest
	Version: 1.0
	Author: Alexa
	Description: test plugin
*/
function crowdfavorite_txt() {
   echo "CrowdFavourite";
}
add_action('get_header','crowdfavorite_txt');
do_action('crowdfavorite_txt');