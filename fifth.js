function show_result() {
	
	
	let mt = document.querySelector("#mt").value;
	let ph = document.querySelector("#ph").value;
	let ja = document.querySelector("#ja").value;
	let csa = document.querySelector("#csa").value;


	let to = parseFloat(mt) + parseFloat(ph) + parseFloat(ja) + parseFloat(csa);
	document.querySelector(".to").innerHTML = to;


	let per = parseFloat(mt) + parseFloat(ph);
	document.querySelector(".per").innerHTML = per;

	let gra =  parseFloat(ja) + parseFloat(csa);
	document.querySelector(".gra").innerHTML = gra;
	


	
	
	// if (mt == 0) {
	// 	document.querySelector(".per").innerHTML = "0";
	// }
	// else{
	// 	let per = parseFloat(mt) + parseFloat(ph);
	// 	document.querySelector(".per").innerHTML = per;	
	// }


	// if (ph == 0) {
	// 	document.querySelector(".per").innerHTML = "0";
	// }
	// else{
	// 	let per = parseFloat(mt) + parseFloat(ph);
	// 	document.querySelector(".per").innerHTML = per;	
	// }



	// if (ja == 0){
	// 	document.querySelector(".gra").innerHTML = "0";

	// }
	// else{
	// 	let gra =  parseFloat(ja) + parseFloat(csa);
	// 	document.querySelector(".gra").innerHTML = gra;
	// }
	// if (csa == 0){
	// 	document.querySelector(".gra").innerHTML = "0";

	// }
	// else{
	// 	let gra =  parseFloat(ja) + parseFloat(csa);
	// 	document.querySelector(".gra").innerHTML = gra;
	// }






	

}
