$(document).ready(function()
{		
	window.onload = Loadhome();	
	$(" img.glogo").click(function(){Loadhome();});
	$(" li.halaman1").click(function(){Loadterbaru();});
	$(" li.produk").click(function(){Loadproduk();});
	$(" button.regis").click(function(){LoadRegis();});
	//$(" div.hub").click(function(){LoadHalaman();});
});

function loading(){
	$(".container").hide();
	$(".container").fadeIn("slow");
};
function Loadhome(){$(".container").load('home.php');};
function Loadterbaru(){$(".container").load('halaman1.php');};
function Loadproduk(){$(".container").load('produk.php');};
function LoadRegis(){$(".container").load('Register.php');};
function LoadHalaman(){$(".container").load('halaman3.php');};


/*fungsi filter*/
$(document).ready(function(){
	$("#flip").click(function(){
		    $("#panel").slideToggle("slow");
	});
});

/*fungsi login*/

var modal = document.getElementById('id01');
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
    }
}

/*fungsi booking */
var modal2 = document.getElementById('id02');
window.onclick = function(event) {
	if (event.target == modal2) {
		modal2.style.display = "none";
	}
}