function evaluatetotal(){
	var temp=0;
	for(var i=1;i<7;i++){
		temp=temp+parseInt(document.getElementById("subTotal"+i).value);
		console.log(temp);
	}
	document.getElementById("total").value=temp;
	return;
}

function settotal(price, doc_id){
	var temp=doc_id;
	console.log(doc_id);
	temp=temp.replace("subTotal", "");
	console.log(temp);
	document.getElementById(doc_id).value=document.getElementById("qty"+temp).value * price;
	evaluatetotal();
}