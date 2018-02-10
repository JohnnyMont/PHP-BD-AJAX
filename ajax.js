function iniciarAjax(){
	var ajax = false;
	if(window.XMLHttpRequest){
	        ajax= new XMLHttpRequest();
	}else if(window.ActiveXObject){
	        ajax= new ActiveXObject("Msxml2.XMLHTTP");
	        if(!ajax){
	                ajax=new ActiveXObject("Microsoft.XMLHTTP");
	        }
	}
	return ajax;

}
function mostrarResposta(elemento,ajax){
        if(ajax.readyState == 4){
                if(ajax.status==200 || ajax.status == 304){
                        elemento.innerHTML = ajax.responseText;
                }else{
                        alert("Problema de Comunição!");
                }
        }
}

function requisitarArquivo(arquivo,elemento){
        var ajax = iniciarAjax();
        if(ajax){
                ajax.onreadystatechange = function(){
                        mostrarResposta(elemento,ajax);
                };
        }
        ajax.open("GET",arquivo,true);
        ajax.send(null);
}

function extraiScript(texto){
var ini = 0; 
 while (ini!=-1){ 
  ini = texto.indexOf('<script', ini); 
   if (ini >=0){  
     ini = texto.indexOf('>', ini) + 1;  
     var fim = texto.indexOf('</script>', ini);    
     codigo = texto.substring(ini,fim);    
     eval(codigo);         
   }
}}

if (xmlhttp.readyState==4){
var texto=unescape(xmlhttp.responseText.replace(/\+/g," "));    
        document.getElementById(destino).innerHTML=texto;
        extraiScript(texto);
}