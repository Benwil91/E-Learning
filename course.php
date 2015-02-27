
<?php     
include("start.html");?>

<div id="sidebar">

                
    
					<ul>
                     <br>
                         Velkommen til oss.               
                        Lykke til med læringen.
						<br>
                        <br>
                        <form method="link" action="loggut.php">
<input type="submit" value="Logg ut">
</form>
                        <br>
                        <br>
                        <br>
                        <Form method="link" action="spm1.php">
<input type="submit" value="Klikk her for test">
</form>
                        <br/>

					</ul>
				

                 </div>
					<section>
						<div class="header">
				
							<div class="list1">
								<h3>Vennligst start ditt kurs.</h3>
							</div>
                            <br>
                            
                        <div id="content">
					
								<div class="header-course"> <!--Denne div taggen linker til "header classen i css fila, der finnes det en "header img" class som påvirker alle bildene inni i "header" classen -->
                                <script>
								window.onload = function () {
    var newImg = [ "bilder/kurs/kurs-intro.png",
					"bilder/kurs/kurs-1.png",
                  "bilder/kurs/kurs-2.png",
                  "bilder/kurs/kurs-3.png",
                  "bilder/kurs/kurs-4.png",
				  "bilder/kurs/kurs-5.png",
                  "bilder/kurs/kurs-6.png",
                  "bilder/kurs/kurs-7.png",
                  "bilder/kurs/kurs-8.png",
				  "bilder/kurs/kurs-9.png",
                  "bilder/kurs/kurs-final.png"],
        iImage = 0,
        slide = document.getElementById('slideshow'),
        next = document.getElementById('next'),
        prev = document.getElementById('prev'),
		interval = 50000,
        t = null;

    next.onclick = function () {
        iImage++;
        if (iImage >=  newImg.length) {
            iImage = 0;
        }
        slide.src = newImg[iImage];
        if (t !== null) {
            clearInterval(t);
            t = null;
        }
    };

    prev.onclick = function () {
        iImage--;
        if (iImage < 0) {
            iImage = newImg.length - 1;
        }
        slide.src = newImg[iImage];
        if (t !== null) {
            clearInterval(t);
            t = null;
        }
    };

    t = setInterval( function () {
        iImage++;
        if (iImage >= newImg.length) {
            iImage = 0;
        }
        slide.src = newImg[iImage];
    }, interval);

    slide.src = newImg[iImage];
};

</script>
 <input id='prev' value='prev' type='button'/> &nbsp;
<input id='next' value='next' type='button'/> <br/>
<img id='slideshow' src='' style='width:800px;'/> 
                        										
                                                      
								    
							
							<?php     
include("slutt.html");?>