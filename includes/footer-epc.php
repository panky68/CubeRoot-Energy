    <footer class="footer">
        <div class="footer-text">
            <p class="footer-address">CubeRoot Energy Ltd | 82 Broad Street, Syston, Leicester, LE7 1GH.</p>
            <p class="footer-contact"><b>Tel:</b> 0116 2603545 <b>Mob:</b> 07810 246675   <b>Email:</b> <a href="mailto: bob@cuberoot-energy.co.uk">bob@cuberoot-energy.co.uk</a></p>
        </div>
        <div class="footer_logos">
            <img class="center" src="/images/crlogos-v3.jpg" alt="logo.png">
        </div>
        <div>
            <p class="copyright ">&copy;Copyright <?php echo date("Y"); ?> CubeRoot Energy. All rights reserved.</p>
        </div>
    </footer>
    </div>

    <!-- Script for Back to Top Button -->
    <script>
        const btnScrollToTop = document.querySelector("#btnScrollToTop");
        const btnScrollToTop1 = document.querySelector("#btnScrollToTop1");
        const btnScrollToTop2 = document.querySelector("#btnScrollToTop2");

        btnScrollToTop.addEventListener("click", function(){
            window.scrollTo(0, 0);
        });
        btnScrollToTop1.addEventListener("click", function(){
            window.scrollTo(0, 0);
        });
        btnScrollToTop2.addEventListener("click", function(){
            window.scrollTo(0, 0);
        });
    </script>
    
    <?php ob_end_flush(); ?>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/mobile-dropdown.js"></script>
</body>
</html>