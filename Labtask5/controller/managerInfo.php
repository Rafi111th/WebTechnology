<?php 

require_once ('../model/model.php');

function fetchAllManager(){
	return showAllManager();

}
function fetchManager($manager_id){
	return showManager($manager_id);

}
