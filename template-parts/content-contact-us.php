<div class="full-width-split group">
    
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h1 >Interested? Let’s boost your sales together.</h2>
            <div class="line" >_______________ </div> 
            <p class="short-text" > Tuomas Koskiniemi, Managing Director</p>
            
            <div class="generic-content">
            <?php 
               $contactUscontent   = get_post(159);
               $output = $contactUscontent->post_content ;
               echo $output;
           
           ?>
            </div>  
           <br>
           <p>tuomas.koskiniemi@klarocpq.com</p>
           <p>+358401766204</p>
        </div>
    </div>

    <div class="full-width-split__two">
        <div class="full-width-split__inner">
         
          <div class="generic-content">
            <?php echo get_field('form_contact_us',159);?>
          </div>
          
        </div>
    </div>
     
</div>