(function(window,undefined){var bb;bb={baseUrl:"",debug:false,ajax:function(url,callbackFunction){this.bindFunction=function(caller,object){return function(){return caller.apply(object,[object]);};};this.stateChange=function(object){if(this.request.readyState==4)
this.callbackFunction(this.request.responseText);};this.getRequest=function(){if(window.XMLHttpRequest){return new XMLHttpRequest();}else if(window.ActiveXObject){try{return new ActiveXObject("Msxml2.XMLHTTP");}
catch(e){try{return new ActiveXObject("Microsoft.XMLHTTP");}
catch(e){return false;}}}
return false;};this.postBody=(arguments[2]||"");this.callbackFunction=callbackFunction;this.url=url||bb.baseUrl;this.request=this.getRequest();if(this.request){var req=this.request;req.onreadystatechange=this.bindFunction(this.stateChange,this);if(this.postBody!==""){req.open("POST",url,true);req.setRequestHeader('X-Requested-With','XMLHttpRequest');req.setRequestHeader('Content-type','application/x-www-form-urlencoded');req.setRequestHeader('Connection','close');}else{req.open("GET",url,true);}
req.send(this.postBody);}},cSum:function(k,o){var q=0;for(var i in o){o[i][k]?q+=+o[i][k]:null;}
return q;},gK:function(k,o,s){s=s||",";var q=[];for(var i in o){o[i][k]?q.push(o[i][k]):null;}
return q.join(s);},validate:function(o,d){if(d!==""){d=d||{};}
try{if(typeof o!="undefined")return o;}
catch(e){return d;}
return d;},getTag:function(tag,s,s2){s=s||",";s2=s2||",";tag=tag||"";switch(tag){case"amount":return bb.cSum('qty',this.validate(belboonTag.products));case"categoryId":return this.validate(belboonTag.categoryId,"");case"productBrand":return this.validate(belboonTag.productBrand,"");case"productId":return this.gK("id",this.validate(belboonTag.products),s);case"productIds":return this.gK("id",this.validate(belboonTag.products),s);case"orderTotal":return bb.cSum('price',this.validate(belboonTag.orderProducts));case"orderProductQuantities":return this.gK("qty",this.validate(belboonTag.orderProducts),s);case"orderId":return this.validate(belboonTag.orderId,"");case"orderNumber":return this.validate(belboonTag.orderNumber,"");case"cartProductIds":return this.gK("id",this.validate(belboonTag.orderProducts),s);case"orderProductIds":return this.gK("id",this.validate(belboonTag.orderProducts),s);case"transactionAmount":return bb.cSum('price',this.validate(belboonTag.orderProducts));case"orderProducts":return this.validate(belboonTag.orderProducts,new Array());case"orderDiscountCodes":return this.validate(belboonTag.orderDiscountCodes,new Array());case"orderDiscountAmount":return this.validate(belboonTag.orderDiscountAmount,"");case"orderTransactionAmountBeforeDiscount":return this.validate(belboonTag.orderTransactionAmountBeforeDiscount,"");case"orderTransactionAmount":return this.validate(belboonTag.orderTransactionAmount,"");case"customField":return this.getCustomField(s,s2);default:return null;}},getCustomField:function(s,s2){var aCustom=this.validate(belboonTag.customField,[]);var r=new Array();for(var i=0;i<aCustom.length;i++){if(aCustom[i].name==s)r.push(aCustom[i].value);}
return r.join(s2);},insertElement:function(elementToInsert){var destinationElement=null;var b=document.getElementsByTagName("body");if(b.length>0){destinationElement=b[0];}
else{var s=document.getElementsByTagName("script");if(s.length>0){destinationElement=s[s.length-1].parentNode;}
else{var h=document.getElementsByTagName("head");if(h.length>0){destinationElement=h[0];}}}
if(destinationElement===null){return false;}
destinationElement.appendChild(elementToInsert);return true;}};window.bb=bb;})(window);(function(){var useSSL='https:'==document.location.protocol;var protocol=(useSSL?'https':'http');try{if(typeof belboonTag=="undefined"){if(typeof parent.belboonTag=="undefined"){belboonTag={orderId:'',products:{}};}
else{belboonTag=parent.belboonTag;}}}
catch(e){belboonTag={orderId:'',products:{}};}
var orderId=bb.getTag("orderId");var amount=bb.getTag("amount");var transactionAmount=bb.getTag("transactionAmount");var destinationElement=null;var b=document.getElementsByTagName("body");if(b.length>0){destinationElement=b[0];}
else{var s=document.getElementsByTagName("script");if(s.length>0){destinationElement=s[s.length-1].parentNode;}
else{var h=document.getElementsByTagName("head");if(h.length>0){destinationElement=h[0];}}}
if(destinationElement!==null){var token='bicimarket_es';var scriptURL=protocol+'://r.adc-srv.net/retargeting.php?customer='+token+'&method=visit&value=visit';var element=document.createElement('iframe');element.src=scriptURL;element.async=true;element.style.cssText="width: 0px; height: 0px; border:none; display: none;";element.scrolling='no';element.frameborder=0;destinationElement.appendChild(element);}
(function(){var vedach_PartnerId="24AAB9FE/2A26/4B13/BAE9/A3643B4F7BA8";var vedachURI="https://config1.veinteractive.com/tags/"+vedach_PartnerId+"/tag.js";var scr=document.createElement('script');scr.async=true;scr.src=vedachURI;var elem=document.getElementsByTagName('script')[0];elem.parentNode.insertBefore(scr,elem);})();})();