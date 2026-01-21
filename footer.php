
<!-- FOotder -->

<div class="footer">
    <h5>© 2025 Primus Lifespaces Pvt. Ltd | All Rights Reserved</h5>
</div>




    <!-- Optional Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

 
     <script>
        document.addEventListener("click", function(e) {
    if (e.target.classList.contains("scroll-link")) {
        e.preventDefault();

        const targetID = e.target.getAttribute("href");
        const targetEl = document.querySelector(targetID);

        targetEl.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    }
}); 

     </script>

    <script>
        const slider = document.querySelector('.manual-scroll-slider');
        const leftBtn = document.querySelector('.left-btn');
        const rightBtn = document.querySelector('.right-btn');
        
        // ---- DRAG TO SCROLL ----
        let isDown = false;
        let startX;
        let scrollLeft;
        
        slider.addEventListener('mousedown', (e) => {
          isDown = true;
          slider.classList.add('dragging');
          startX = e.pageX - slider.offsetLeft;
          scrollLeft = slider.scrollLeft;
        });
        
        slider.addEventListener('mouseleave', () => {
          isDown = false;
          slider.classList.remove('dragging');
        });
        
        slider.addEventListener('mouseup', () => {
          isDown = false;
          slider.classList.remove('dragging');
        });
        
        slider.addEventListener('mousemove', (e) => {
          if (!isDown) return;
          e.preventDefault();
          const x = e.pageX - slider.offsetLeft;
          const walk = x - startX;
          slider.scrollLeft = scrollLeft - walk;
        });
        
        // ---- BUTTON NAVIGATION ----
        rightBtn.addEventListener('click', () => {
          slider.scrollLeft += 800;  // scroll right by one image
        });
        
        leftBtn.addEventListener('click', () => {
          slider.scrollLeft -= 800;  // scroll left by one image
        });
    </script>
    <script>document.querySelector('.menu_btn').addEventListener('click', function() {
    this.classList.toggle('active');
});
</script>

<script>
window.addEventListener("scroll", function () {
    const nav = document.getElementById("navbar");

    if (window.scrollY > 20) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});
</script>
<script>
$(document).ready(function(){
    var slider = $(".owl-carousel");

    slider.owlCarousel({
        items: 1,
        loop: false,
        dots:false,
        autoplay: false,
        autoplayTimeout: 3000,
        animateOut: "fadeOut"
    });

    // Custom Buttons
    $("#prevBtn").click(function(){
        slider.trigger('prev.owl.carousel');
    });

    $("#nextBtn").click(function(){
        slider.trigger('next.owl.carousel');
    });
});
</script>






</body>

</html>