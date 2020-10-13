	
	$(function(){

	$("#quienSoy").click(MostrarQuienSoy);
	$("#comoSoy").click(MostrarComoSoy);
	$("#queGusta").click(MostrarQueGusta);
	$("#queCambiar").click(MostrarQueCambiar);

	})

	function MostrarQuienSoy(){
	$("#info").html($("#infoQuienSoy").html())	}
	function MostrarComoSoy(){
	$("#info").html($("#infoComoSoy").html())	}
	function MostrarQueGusta(){
	$("#info").html($("#infoQueGusta").html())	}
	function MostrarQueCambiar(){
	$("#info").html($("#infoQueCambiar").html())	}
