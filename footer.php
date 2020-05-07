</div>

<div align="center" class="carousel slide" style="background: black; color: white;font-family: "Times New Roman", Times, serif; fontcol">
  <div class="cols-4 widget-column-1">
    <h2>Contact Us</h2>
    <div class="clear"></div>
    <div class="footeradrs"><i class="fa fa-map-marker fa-2x"></i><span>352,353 A , Nr. Bhavik Publications, Opp. Bhagwat Vidyapith, S.G.Highway, Ahmedabad- 382481.</span></div>
  </div>
  <div class="cols-4 widget-column-3">
    <ul class="cnss-social-icon" style="text-align:center; background: black;">
      <li class="Facebook" style=" display:inline-block;"><a target="_blank" title="Facebook" href="https://www.facebook.com/SOCET/"><img src="http://socet.edu.in/wp/wp-content/uploads/2016/04/facebook.png" border="0" width="32" height="32" alt="Facebook" style="margin: 5px; opacity: 1;"></a></li>
      
      <li class="Twitter" style=" display:inline-block;"><a target="_blank" title="Twitter" href="https://twitter.com/socetcampus"><img src="http://socet.edu.in/wp/wp-content/uploads/2016/04/twitter.png" border="0" width="32" height="32" alt="Twitter" style="margin: 5px; opacity: 1;"></a></li>
      
      <li class="Instagram" style=" display:inline-block;"><a target="_blank" title="Instagram" href="https://www.instagram.com/socetcampus/"><img src="http://socet.edu.in/wp/wp-content/uploads/2016/04/instagram.png" border="0" width="32" height="32" alt="Instagram" style=" margin:5px;"></a></li>
      
      <li class="Pinterest" style=" display:inline-block;"><a target="_blank" title="Pinterest" href="https://in.pinterest.com/socetcampus/"><img src="http://socet.edu.in/wp/wp-content/uploads/2016/04/pinterest.png" border="0" width="32" height="32" alt="Pinterest" style="margin: 5px; opacity: 1;"></a></li>
      
      <li class="gplus" style=" display:inline-block;"><a target="_blank" title="gplus" href="https://plus.google.com/u/2/110616479957156818867"><img src="http://socet.edu.in/wp/wp-content/uploads/2016/04/googleplus.png" border="0" width="32" height="32" alt="gplus" style=" margin:5px;"></a></li>
      
      <li class="yuotube" style=" display:inline-block;"><a target="_blank" title="yuotube" href="https://www.youtube.com/channel/UCPST-bcHeJHhUrCv80_4d5w"><img src="http://socet.edu.in/wp/wp-content/uploads/2016/04/youtube-2.png" border="0" width="32" height="32" alt="yuotube" style=" margin:5px;"></a></li>
    </ul>
  </div>
  <!--end .widget-column-4-->
  <div class="clear"></div>
 &copy; SOCET
</div>
<!-- /container --> <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 
<script src="js/vendor/bootstrap.min.js"></script> 
<script src="js/vendor/jquery-ui.min.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript">
        	var obj_bb_areas = JSON.parse(bb_areas);

        	var city=[],i=0;for(j in obj_bb_areas) {city[i++]= obj_bb_areas[j]['city'] }       	
        	city = $.grep(city, function(v, k){
   			 return $.inArray(v ,city) === k;
			});

          var obj_bb_areas = JSON.parse(bb_areas);

          var area=[],i=0;for(j in obj_bb_areas) {area[i++]= obj_bb_areas[j]['area'] }        
          area = $.grep(area, function(v, k){
         return $.inArray(v ,area) === k;
      });
        	$( "#tags" ).autocomplete({
     		 source: city  		
     		 });		 
          $( "#tag" ).autocomplete({
         source: area     
         });     
        </script>
</body></html>