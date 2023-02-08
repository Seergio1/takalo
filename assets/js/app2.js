var icon_bar = document.getElementById("icon_bar");
var secret_nav = document.querySelector(".secret-nav-bar");
var content = document.querySelector(".content");
var table = document.querySelector(".table");
icon_bar.addEventListener('click',()=>{
	
	icon_bar.classList.toggle("open");
	// console.log(icon_bar.className);
	if (icon_bar.className=="open") {
		console.log(icon_bar.className);
		secret_nav.style.left = '0';
		// secret_nav.style.height=content.innerHeight;
		secret_nav.style.backgroundColor = '';
		content.style.webkitFilter="blur(5px)";
	}else {
		console.log('close');
		secret_nav.style.left = '-100%';
		content.style.webkitFilter="blur(0px)";
	}




	
		
});

	function afficheModale(id) {
		console.log("caca");
          el = document.getElementById("box-modifier");
		  var modify = document.querySelector(".modify-item");
		 
		  	let hidden = `<input type="hidden" name="id" value="`+id+`">`;
		 	modify.innerHTML+=hidden;
        	el.style.visibility = "visible";
        	table.style.webkitFilter="blur(5px)";
    }
    function afficheModale2() {
    	el = document.getElementById("box-ajouter");
        el.style.visibility = "visible";
        table.style.webkitFilter="blur(5px)";
    }