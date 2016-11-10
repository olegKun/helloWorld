<script type="text/javascript">
  // jQuery(document).ready( function($) {
    function myclick(){
    var cnt=document.getElementById('templatemo_content');
    var c=1;
    $.ajax({
        url: "http://wordpress/",
        success: function( data ) {
          <?php
            $args = array( 'posts_per_page' => 5 );
           $psts = get_posts($args); ?>
            document.getElementById('qua').innerHTML=<?php echo json_encode($psts[1]->post_content); ?>;
           
        }

        // success : function(){                  
        //           setInterval(function(){
        //           document.getElementById('qua').innerHTML="<?php echo $result['total_users']; ?>";
        //           alert();
        //         }, 10000);
        //  }



         // success : function(){                  
         //          setInterval(function(){
         //            // alert();
         //        }, 10000);
         // }
 

   

});
}
</script>