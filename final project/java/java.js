// JavaScript Document
<script>


var gallery = {

 
 init: function(e)
{ 

// collect all anchor tags inside of nav
// add event onto each of them 

var links = document.querySelectorAll('#main a');
   for(var i=0; i< links.length; i++) 
   
   {
	links[i].onclick = gallery.changePic;   
   }
   
   
   //setup links in abums nav
   var albums=document.querySelectorAll('#albums a');
   for(var j=0; j < albums.length; j++)
   
   
   {
	
 albums[j].onclick = gallery.changeAlbum;  
  
   }
   
  
   
   //hide all the album divs
   var divs = document.querySelectorAll('#main div');
	for(var k=0; k < divs.length; k++)
	{
		
   divs[k].classList.add('hide')
	
	}
	
		divs[0].classList.remove('hide')
},


changePic: function (e)


{//show the selected albums

      e.preventDefault();
	
	
	
	//change the pic to first image in album
	var pic = document.querySelector("#pic");
	var caption = document.getElementById('caption');
	
	pic.src = e.target.href ;
	caption.firstChild.nodeValue = e.target.title;
},



changeAlbum: function(e)
{
	e.preventDefault();
	
	//hide all the album divs
	var divs = document.querySelectorAll('#main div');
	for(var i=0; i < divs.length; i++)
	{
		divs[i].classList.add('hide');
	}
	
	//show the selected album
	var album = e.target.href.split('#')[1];
	document.getElementById(album).classList.remove('hide');
	
	//change the pic to first image in album
	var pic = document.querySelector("#pic");
	var caption = document.getElementById('caption');
	var firstPic = document.getElementById(album).querySelectorAll('a')[0];
	pic.src =firstPic.href ;
	caption.firstChild.nodeValue = firstPic.title;
	
}

	
}
window.onload = gallery.init;


</script>