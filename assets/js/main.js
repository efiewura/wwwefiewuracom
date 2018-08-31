$(document).ready(function (){
    // DateTime
    $('#dtBox').DateTimePicker();
    $('select').formSelect();

   
}); 
function findselected(){
		var dest = (document.getElementById("per").childNodes[1]).childNodes[0];

		var result = document.querySelector('input[name="flag"]:checked').value;
		if(result == "s"){
			dest.disabled = true;
		}else{
			dest.disabled = false;
		}
	}