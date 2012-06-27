      <footer>
      	<div class="container">
                  <div id="FooterLinks">
                        <nav>
                              <ul>
                                    <li>Services</li>
                                    <li>Careers</li>
                                    <li>About</li>
                                    <li>Contact</li>
                              </ul>
                        </nav>

                  </div><br>
                  <p>InstaCallCenter Inc. UTC/GMT +8 hours  <span class="MoreFooterLinks"><a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Site Map</a> | Made by <a href="http://marionserenio.com/" class="heart" target="_blank">♥</a></span></p> 
            </div>
      </footer>

    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="<?php echo base_url(); ?>js/libs/bootstrap/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>js/script.js"></script>
<script>
	// var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	// (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	// g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	// s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<script>
      $(function(){
            $('#QuoteButton').on('click', function(){
                  var name = $('input#FullName');
                  var business = $('input#BusinessName');
                  var email = $('input#Email');
                  var contact = $('input#ContactNumber');

                   if(!name.val() || name.val().length <= 2){
                         name.css('border-color', '#fb4f4f');
                   }else if(name.val()){
                          name.css('border-color', '#39c2d7');
                        if(!business.val() || business.val().length <= 2){
                              business.css('border-color', '#fb4f4f');
                        }else{
                              business.css('border-color', '#39c2d7');
                              if(!email.val()){
                                    email.css('border-color', '#fb4f4f');
                              }else{
                                    email.css('border-color', '#39c2d7');
                                    if(!contact.val()){
                                    contact.css('border-color', '#fb4f4f');
                                    }else{
                                          contact.css('border-color', '#39c2d7');
                                          //checking of the form is done, passed. Send email through ajax
                                          $.ajax({
                                                type: 'POST',
                                                url: 'home/AskForQuote',
                                                data: $('#QuoteForm').serialize(),
                                                success: function(data){
                                                      console.log('message sent');
                                                },
                                                error: function(){
                                                      console.log('failed!');
                                                }
                                          })
                                    }
                              }
                        }
                   }
                   
            });
      });
      
</script>

</body>
</html>
