// 이부분부터  수정할 필요 없습니다.  
function getCookie(name) { 
var Found = false 
var start, end 
var i = 0 

while(i <= document.cookie.length) { 
start = i 
end = start + name.length 

if(document.cookie.substring(start, end) == name) { 
Found = true 
break 
} 
i++ 
} 


if(Found == true) { 
start = end + 1 
end = document.cookie.indexOf(";", start) 
if(end < start) 
end = document.cookie.length 
return document.cookie.substring(start, end) 
} 
return "" 
} 
// 이부분 까지는 수정할 필요 없습니다. 

function openPopup() 
{ 
var noticeCookie=getCookie("CookieName");  // 쿠키네임 지정
if (noticeCookie != "no"){
//window.open('pop.html','pop','width=252,height=280,top=50,left=250');
//window.open('pop2.html','pop','width=320,height=500,top=50,left=500');	
}
   
  
// window.open('팝업창 웹페이지','윈도우명','width=350,height=500,top=50,left=500');  
} 
openPopup();   // 자동으로 팝업 띄우기

 