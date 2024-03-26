window.onscroll = function(){
	
	if(document.documentElement.scrollTop > 50){
		document.querySelector(".navbar").style.boxShadow="1px 1px 10px lightgray";
	}
	else{
		document.querySelector(".navbar").style.boxShadow="";
	}
}