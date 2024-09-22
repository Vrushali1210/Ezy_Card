s<!-- config file is included -->
<?php include("../eventmanager-Ezycard/php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Event Manager EzyCard</title>
      <?php include (S_INCLUDESPATH . "head.php"); ?> 
   </head>
   <body>
      <article id="bussiness-card">
         <!-- profile section  start-->
         <div class="container">
            <section class="profile-section">
               <div class="profile-provider">
                  <img src="<?= S_IMGPATH ?>" alt="">
                  
                  <div class="profile-details">
                     <h2 class="profile-divider-name">Priya Rane</h2>
                     <p>( Event Manager )</p>
                  </div>
               </div>
            </section>
            <!-- profile section  end-->
            <hr>
            <!-- profile-contact section  start-->
            <div class="contact-details-sec">
               <div class="contact-details-with-icon">
                  <div class="contact-details">
                     <div class="contact-icon "> <a href="tel:+918356328967" target="_blank"><i class="fa-solid fa-phone"></i></a></div>
                     <div class="contact-info"> <a href="#" target="_blank">+918356328967</a></div>
                  </div>
                  <div class="contact-details">
                     <div class="contact-icon "><a href="mailto:priyarane@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></div>
                     <div class="contact-info"> <a href="mailto:priyarane@gmail.com" target="_blank">Priyarane12@gmail.com</a></div>
                  </div>
                  <div class="contact-details">
                     <div class="contact-icon "><a href="https://www.google.com/maps?q=Mumbai+Naka,+Nashik,+Maharashtra" target="_blank"><i class="fa-solid fa-location-dot"></i></a></div>
                     <div class="contact-info"><a href="https://www.google.com/maps?q=Mumbai+Naka,+Nashik,+Maharashtra" target="_blank">123, Near Mumbai naka police station, Nashik ,Maharashtra, India</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-end"></div>
         </div>
         <!-- profile-contact section  end-->

         <!--Connect now section  -->
         <div class="container">
         <section class="main-card-sec pb-3 mb-0" id="link-sec">
            <h3 class="text-center d-block mx-auto my-2">Connect Now</h3>
            <div class="main-card-sec p-0 position-relative" id="other-links">
                <ul>
                    <li><a href="#" download><img class="img-fluid rounded-circle me-2"src="<?= S_IMGPATH ?>social-icons/user-circle-plus-icon.svg" alt="Add To Contact">Add toPhoneBook</a></li>
                    <li><a href="whatsapp.php" target="_blank"><img src="<?= S_IMGPATH ?>social-icons/whatsapp-icon.svg"alt="whatsapp" title="whatsapp" class="me-2"><span> Whatsapp Chat</span></a></li>
                    <li><a href="https://www.google.com/maps?q=Mumbai+Naka,+Nashik,+Maharashtra" target="_blank"><img src="<?= S_IMGPATH ?>social-icons/map-location-icon.svg" alt="Direction" title="Direction" class="me-2"><span>View Location </span></a></li>
                    <li><a href="https://whenavailable.com/?msclkid=d356bbf58b6517877c5edda2f21bbffd" target="_blank"><img class="img-fluid rounded-circle me-2" src="<?= S_IMGPATH ?>social-icons/globe-icon.svg" alt="Website">Website Link</a></li>
                </ul>
            </div>
        </section>
        </div>
         
          <!-- About us  section included here -->
          
        <?php include(S_INCLUDESPATH . "au.php"); ?>   


        <!--Product & Services section included here -->
        <?php include(S_INCLUDESPATH . "ps.php"); ?>   


        <div class="container">
      <div class="title-box"><!-- Clients Testimonials Start -->
    <h3 class="text-center mx-auto"style="font-weight:90px; font-size:25px;">Color Combinations </h3>
     </div>
    
    
    <p><h2><a href="themes.php" target="_blank"class="black-link" style=" font-size:17px;">Color Combinations</a></h2></p>
    
      
    
    </section>

</div>

         <!-- enquiry section  start-->
         <div class="container">
            <section id="enquiry-sec">
               <div class="enquiry-sec">
                  <h2 class="sec-heading sec-heading-color ">Event Enquiry Form</h2>
                  <div class="enquiry-form">
                     <form  method="post" name="enquiry-from" id="enquiry-from">
                        <div class="mb-3">
                           <label for="name" class="form-label">Name:</label>
                           <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Email:</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                           <label for="phone" class="form-label">Phone Number:</label>
                           <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                           <label for="message" class="form-label">Message:</label>
                           <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="type" class="form-label">Event Type:</label>
                           <textarea class="form-control" id="type" name="type" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="theme" class="form-label">Theme and Decoration:</label>
                           <textarea class="form-control" id="theme" name="theme" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="menu" class="form-label">Menu:</label>
                           <textarea class="form-control" id="menu" name="menu" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="button-61" role="button" >Submit</button>
                     </form>
                  </div>
               </div>
            </section>
         </div>
         <!-- enquiry section  start-->

         <!-- testimonial section  start-->
         <?php include (S_INCLUDESPATH . "testimonial.php"); ?>  
         <!-- testimonial section  end-->

         <!-- Downloads section Starts here -->
         <div class="container">
        <section class="main-card-sec pb-3 mt-2" id="download-sec">
            <h1 class="text-center d-block mx-auto my-2 mb-2">Downloads</h1>
            
            <button class="btn mb-2   d-flex align-items-start"><a href="download_gallery.php" download><i class="fa fa-download"></i> Gallery</a></button>
            <button class="btn d-flex align-items-start"><a href="download_video.php" download><i class="fa fa-download"></i> Videos</a></button>
        </section>
        </div>
        <!-- Downloads  section ends here -->
        
         <!-- Social media links section starts here -->
         <div class="container ">
            <div class="social-link-sec">
               <div><a href="#" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/linkedin-icon.svg" class="img-fluid"></a>
               </div>
               <div><a href="#" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/facebook-icon.svg" class="img-fluid"></a> 
               </div>
               <div><a href="#" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/instagram-icon.svg" class="img-fluid"></a>  
               </div>
               <div><a href="#" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/youtube-icon.svg" class="img-fluid"></a>
               </div>
            </div>
         </div>
         <!-- Social media links section ends here -->
      </article>
      <!-- footer section  start-->
      <?php include (S_INCLUDESPATH . "footer.php"); ?>  
      <!-- footer section  end-->
      <script>
         // enquiry section 
         const scriptURL = 'https://script.google.com/macros/s/AKfycbz3v8cfZ4p0JkJ5I8MNm-OpbTGGyb21VuQjTTu6X8pK4EzwbujPFmnitd_EK3WZ2ZTy/exec'
         const form = document.forms['enquiry-from']
         
         form.addEventListener('submit', e => {
         e.preventDefault()
         fetch(scriptURL, { method: 'POST', body: new FormData(form) })
         .then(response => alert('Message send Successfully!', response))
         .catch(error => alert('Error!', error.message))
         })
      </script>
   </body>
</html>