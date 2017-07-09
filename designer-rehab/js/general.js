/*******************************************************************************************/
/*
/*		Web: http://www.asdesigning.com
/*		Email: info@asdesigning.com
/*
/*		License: GNU/GPL
/*
/*******************************************************************************************/
$(document).ready(function(){
	$("#home").click(function() {
		$("#main").load("view/intro.php");
		$(".nav-tabs li").removeClass("current active");
		$("#home").addClass("active");
	});
	$("#what-we-do").click(function() {
		$("#main").load("view/what-we-do.php");
		$(".nav-tabs li").removeClass("current active");
		$("#what-we-do").addClass("current active");
	});
	$("#services").click(function() {
		$("#main").load("view/services.php");
		$(".nav-tabs li").removeClass("current active");
		$("#services").addClass("current active");
	});
	$("#qualifications").click(function() {
		$("#main").load("view/qualifications.php");
		$(".nav-tabs li").removeClass("current active");
		$("#qualifications").addClass("current active");
	});
	$("#photos").click(function() {
		$("#main").load("view/photos.php");
		$(".nav-tabs li").removeClass("current active");
		$("#photos").addClass("current active");
	});
	$("#testimonials").click(function() {
		$("#main").load("view/testimonials.php");
		$(".nav-tabs li").removeClass("current active");
		$("#testimonials").addClass("current active");
	});
	$("#contact").click(function() {
		$("#main").load("view/contact.php");
		$(".nav-tabs li").removeClass("current active");
		$("#contact").addClass("current active");
	});
});

function goToURL(url) 
{ 
	window.location = url; 
}


function preloadImages() 
{ 
  var d=document; if(d.images){ if(!d.p) d.p=new Array();
    var i,j=d.p.length,a=preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.p[j]=new Image; d.p[j++].src=a[i];}}
}


function swapImgRestore() 
{
  var i,x,a=document.sr; 
	
	for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) 
		x.src=x.oSrc;
}


function findObj(n, d) 
{
  var p,i,x;  
  
  if(!d) d=document; 
  if((p=n.indexOf("?"))>0&&parent.frames.length) 
  {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);
  }
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}


function swapImage() 
{
  var i,j=0,x,a=swapImage.arguments; 
	
	document.sr=new Array; 
	for(i=0;i<(a.length-2);i+=3)
    if ((x=findObj(a[i]))!=null)
	  {
			document.sr[j++]=x; 
			if(!x.oSrc) 
				x.oSrc=x.src; 
			x.src=a[i+2];
		}
}
