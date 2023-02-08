var nomCreateur = document.querySelector(".nom");
var roleCreateur = document.querySelector(".role");

var point = document.querySelectorAll(".point");
var tabNom=['Sergio','Mandresy','Jeremie'];
var tabRole=['Affichage','Base','Métier'];

point.forEach((p,index)=>{
	p.addEventListener('click',()=>{
		// p.style.backgroundColor = 'red';
		nomCreateur.innerHTML=tabNom[index];
		roleCreateur.innerHTML=tabRole[index];
	});
});

setInterval(()=>{
	auto();

}, 9000);
	
function auto() {
	let time = 0;
		point.forEach((p,index)=>{
		setTimeout(()=>{
			if(index>0)
			{
				point[index-1].classList.remove("active");
			}
			else if(index==0){
				point[point.length-1].classList.remove("active");
			}
			p.classList.add("active");
			nomCreateur.innerHTML=tabNom[index];
			roleCreateur.innerHTML=tabRole[index];
	    }, time);
	    time+=3000;
	});
	
}

