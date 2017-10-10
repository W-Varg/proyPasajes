// JavaScript Document
function devolverRequest()
{
	if(window.XMLHttpRequest)//verificar xmlhttp request
		{return new XMLHttpRequest();}
	else if(window.ActiveXObject)
	{
		var versobj =new Array(		'Msxml2.XMLHTTP.5.0','Msxml2.XMLHTTP.4.0','Msxml2.XMLHTTP.3.0','Msxml2.XMLHTTP','Microsoft.XMLHTTP');
			for(var i=0;i<versobj.length;i++) 
			{
				try
				{return new ActiveXObject(versobj[i]);}
				catch	(ErrorControlado){}
			}
	}
	throw new Error("no se pudo crear el ajaxrequest");
}
window.onload = function() {
  listarAsientos();
};
//funciones
function tabla()
{ 
	var entro= devolverRequest();
	if(entro){
	//	document.write();
		entro.open('get','formulario2.html',false);
		entro.send(null);
		document.getElementById('contenido').innerHTML = entro.responseText;
	}
}


function listarAsientos()
{ 
	var entro= devolverRequest();
	if(entro){
		alert("entro");
		entro.open('get','asientos.php',false);
		entro.send(null);
		document.getElementById('listaAsientos').innerHTML = entro.responseText;
	}
}

function factorial()
{ 
	var entro= devolverRequest();
	if(entro){
		var a=prompt("introdusca el valor para calcular el factorial");
		entro.open('get','factorial.php?valor='+a,false);
		entro.send(null);
		document.getElementById('contenido').innerHTML = entro.responseText;
	}
}
function recibirca(a)
{ 
	var entro= devolverRequest();
	if(entro){
		//alert("entro");
		entro.open('get','invertirtexto.php?valor='+a,false);
		entro.send(null);
		document.getElementById('contenido').innerHTML = entro.responseText;
		document.getElementById('contenido').style.background='red';
	}
}
