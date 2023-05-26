perCirc(jQuery('.sellPerCirc'), 80); 
function perCirc($el, end, i) {
	if (end < 0)
		end = 0;
	else if (end > 100)
		end = 100;
	if (typeof i === 'undefined')
		i = 0;
	var curr = (100 * i) / 360;
	$el.find(".perCircStat").html(Math.round(curr) + "%");
	if (i <= 180) {
		$el.css('background-image', 'linear-gradient(' + (90 + i) + 'deg, transparent 50%, #546EB5 50%),linear-gradient(90deg, #546EB5 50%, transparent 50%)');
	} else {
		$el.css('background-image', 'linear-gradient(' + (i - 90) + 'deg, transparent 50%, #00cc00 50%),linear-gradient(90deg, #546EB5 50%, transparent 50%)');
	}
	if (curr < end) {
		setTimeout(function () {
			perCirc($el, end, ++i);
		}, 1);
	}
} 

   $(function() { 
   	$("select.custom").each(function() {					
   		var sb = new SelectBox({
   			selectbox: $(this),
   			height: 150,
   			width: '220', 
   		});
   	});  
	
   });  

 $("body").on("click", ".navbar-toggler", (function() {
        $(this).attr("aria-expanded", "true"), 0 !== $("#sidenav-1").position() ? ($("#sidenav-1").css({
            transform: "translateX(0%)"
        }), $("body").append($('<div class="sidenav-backdrop" style="transition: opacity 0.3s ease-out 0s; position: fixed; width: 100vw; height: 100vh; opacity: 0.4;"></div>'))) : ($("#sidenav-1").css({
            transform: "translateX(-100%)"
        }), $(".sidenav-backdrop").remove()), $("#sidenav-1").css({
            width: "290px",
            height: "100vh",
            transition: "all 0.3s linear 0s",
            position: "fixed"
        });
   }));			
   
   $("body").on("click", ".sidenav-backdrop", (function() {
        $("#sidenav-1").css({
            transform: "translateX(-100%)"
        }), $(".sidenav-backdrop").remove()
   })); 