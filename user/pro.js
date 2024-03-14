
//Single character script
	var str="The Beauty Palace";
    var i=0;
	function MH()
{
	if (i < str.length) {
		
    	document.getElementById("h1").innerHTML += str.charAt(i);
    i++;
    setTimeout("MH()", 100);
  }

}
//Single character script -end

//Slider Script
MyBanners=new Array('../img/s5.jpg','../img/s4.jpg','../img/s2.jpg','../img/s.jpg','../img/s6.jpg','../img/s1.jpg');
banner=0
function ShowBanners()
{ 
if (document.images)
{
if (banner==MyBanners.length) 
{
banner=0
}
document.ChangeBanner.src=MyBanners[banner]
 banner++
setTimeout("ShowBanners()",2000)
}
}
//Slider Script -end

//Deop down menu linking script
 function DisplayPage(Choice) {
 Page = Choice.options[Choice.selectedIndex].value
 if (Page != "") {
 window.location = Page
 }
 }
