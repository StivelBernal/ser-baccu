<header class="header alter1-header section text-contrast" id="home">
    <div class="shapes-container">
        <div class="shape shape-animated shape-1" data-aos="fade-down-left" data-aos-duration="1500"
            data-aos-delay="100"></div>
        <div class="shape shape-animated shape-2" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
        </div>
        <div class="shape shape-animated shape-3" data-aos="fade-up-right" data-aos-duration="1000"
            data-aos-delay="200"></div>
        <div class="shape shape-animated shape-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        </div>
        <div class="shape shape-animated shape-5" data-aos="fade-down-left" data-aos-duration="1000"
            data-aos-delay="100"></div>
        <div class="shape shape-animated shape-6" data-aos="fade-down-left" data-aos-duration="1000"
            data-aos-delay="100"></div>
        <div class="shape shape-animated shape-7" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        </div>
        <div class="shape shape-animated shape-8" data-aos="fade-down-right" data-aos-duration="500"
            data-aos-delay="200"></div>
        <div class="shape shape-animated shape-9" data-aos="fade-down-right" data-aos-duration="500"
            data-aos-delay="100"></div>
        <div class="shape shape-animated shape-10" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500">
        </div>
        <div class="shape shape-animated shape-11" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200">
        </div>
        <div class="shape shape-animated shape-12" data-aos="fade-down-left" data-aos-duration="500"
            data-aos-delay="100"></div>
        <div class="shape shape-animated shape-13" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape shape-animated shape-14" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
        <div class="shape shape-animated shape-15" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100">
        </div>
        <div class="shape shape-animated shape-16" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-contrast display-4 display-md-3"><span class="bold"><?php single_post_title(); ?></span></h1>
                <?php 
        
        if( function_exists( 'the_subtitle' ) ){
            echo'<p class="lead bold">';  
            the_subtitle();  
            echo '</p>';
        }
        
    ?>
                
            
                <script>document.querySelector('#menu-menu-paginas').classList.add('menu-white'); </script>
            
            </div>
            
        </div>
    </div>
</header>