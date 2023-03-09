   <footer class="site-footer">
        <nav class="foot-nav">
            <ul class="foot-links">
                <h3 class="foot-title">Quick Links</h3>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#dishes">Dishes</a></li>
                <li><a href="#popular">Popular</a></li>
            </ul>
            <ul class="foot-links">
                <h3 class="foot-title">Follow Us</h3>
                <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
            </ul>
            <ul class="foot-links">
                <h3 class="foot-title">Our Partners</h3>
                <li><a href="#">NIIT Academy</a></li>
                <li><a href="#">H-Medix Store</a></li>
                <li><a href="#">Transcorp</a></li>
                <li><a href="#">Shoprite Store</a></li>
            </ul>
            <ul class="foot-links">
                <h3 class="foot-title">Reach Out To Us</h3>
                <li><a href="mailto:chi.glozzy@gmail.com"><i class="fa fa-envelope"></i> Send a Mail</a></li>
                <li><a href="tel08036517621"><i class="fa fa-phone"></i> Dail Us Up</a></li>
                <li><a href="http://www.niit.com" target="_blank" rel="noopener noreferrer"><i class="fa fa-globe"></i> Our Developer</a></li>
                <li><a href="#" target="_self" rel="noopener noreferrer"><i class="fa fa-balance-scale"></i> Privacy Policy</a></li>
            </ul>
        </nav>
        <small class="foot-end">Copyright &copy; FoodiHub <?php date("y");?> | All rights reserved</small>
        <script>
            $(".nav-link").each(function(){
                let page = location.pathname.split("/")[2],text = this.textContent.toLowerCase(),href=$(this).attr("href");
                if(page=="" && text == "home")$(this).addClass("active");
                else if(page == href.substring(2)) $(this).addClass("active");
            })
        </script>
    </footer>
    <script src="./js/all.min.js"></script>
    <script src="./js/script.js"></script>