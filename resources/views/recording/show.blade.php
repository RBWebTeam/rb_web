    <div class="container">
  <aside id="fh5co-hero">




<div style="height: 100px; width: 100%"></div>






</form>


 
 <table>
   <tbody> 
   <tr>
     <th>user id</th>
      <th>2</th>
      </tr>
   </tbody>

   <tbody>
   

     <?php  foreach ($query as $key => $value) {?>
      <tr>
    
     <td><?php echo $value->user_id;?></td>
      <td>
         <audio controls> 
  <source src="{{url('public/rec/')}}58495d416ece9.mp3" type=video/webm> 
  <!-- <source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg>  -->

  <source src="{{url('public/rec/')}}58495d416ece9.mp3" type=video/3gp>
</audio>

      <?php echo $value->base64string;?></td>
  </tr>
     <?php  } ?>
   

   </tbody>

 </table>



        
  </aside>
  </div>

  
