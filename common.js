/* variabel.htmlEntities() */
String.prototype.htmlEntities = function()
{	  
  newString = this;
  
  // Decode string and remove '+'
  var lsRegExp = /\+/g;  
  return unescape(String(newString).replace(lsRegExp, " ")); 
}

/* querystring-funktioner */
function queryString(key){
    var value = null;
    for (var i=0;i<queryString.keys.length;i++)
    {
        if (queryString.keys[i]==key)
        {
            value = queryString.values[i];
            break;
        }
    }
    return value;
}

queryString.keys = new Array();
queryString.values = new Array();
qs = new Array();

var query = window.location.search.substring(1);
var pairs = query.split("&");

for (var i=0;i<pairs.length;i++)
{
    var pos = pairs[i].indexOf('=');
    if (pos >= 0)
    {
        var argname = pairs[i].substring(0,pos);
        var value = pairs[i].substring(pos+1);
        qs[argname] = value.htmlEntities();
        queryString.keys[queryString.keys.length] = argname;
        queryString.values[queryString.values.length] = value;
    }
}

//getParam(vParam) henter vParam fra querystring og returnerer værdien
function getParam(vParam){
	var a = queryString(vParam);	
    return a;
}
/***************************************/

/* Validerings-funktioner */
function er_tom(vField, vAlert){
    if(vField.value.length==0){
    	alert(vAlert);
        vField.focus();
        return false;
    }
    return true;                
}

function er_tal(vField, vAlert){
	if(isNaN(vField.value)){
    	alert(vAlert);
        vField.value="";
        vField.focus();
        return false;
    }
    return true;
}

function tast_er_tal(event){
	vKeycode=window.event.keyCode;
    vChar=String.fromCharCode(vKeycode);
    if(isNaN(vChar)){
    	alert('Kun tal er tilladt i dette felt.');
    	return false;
    }else{
    	return true;
    }
}

