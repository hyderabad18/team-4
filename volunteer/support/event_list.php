<?php 
  
  $_SESSION['id'] = 3;


 ?>

<style>
#notice {
    max-width: 1200px;
    margin:0px auto;
}

a {
    color:#000000;
    text-decoration:none !important;
}

#blur
{
  height: 100%;
  margin-left: -5px;
  padding:5px;
  background-color: rgba(0,0,0,0.7);
  display: none;
  top: 0px;
  width: 100%;
  position: absolute;
}

#content {
  background-color: #f2f2f2;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px)
{
  #content
  {
    width: 700px;
    margin: 0px auto;
  }
}


</style>

<div id="notice">

  <?php for ($i=0; $i < 5; $i++) { 
?>    
  
  <div class="widget" data-id="<?php echo($i); ?>">
    <div class="widget-head">
        <h5>Vidyachetana-Sponser a child </h5>
    </div>
    <div class="widget-content">
        <div class="widget-description d-none d-sm-block">
            <p>Don't worry. If you don't make any changes here, nothing will go wrong.
                At this point you can examine the content of the files and see if the application works as explained in the articles.
              If you make changes to the files you can revert them by typing</p>
        </div>
        <div class="row">
            <div class="widget-location col-12 col-sm-4">Kukatpally</div>
            <div class="widget-time col-12 col-sm-8">
                <div class="time-from col-5">15-07-2018</div>
                <div class="time-from col-2">To</div>
                <div class="time-to col-5">15-08-2018</div>
            </div>
        </div>

    </div>
  </div>
<?php } ?>

</div>


<div id="blur">
      <div id="content"></div>
  </div>



<script type="text/javascript">
     $('.widget').on('click',function () 
      {
          var id = $(this).data('id');
          $.ajax({
            type : 'GET',
            url  : 'support/event_details',
            data : {'id':id},
            success : function (response)
            {
                $('#blur').css('display','block');
                $('#content').html(response);
            }
          });
      }); 

     function apply(event_id)
     {
        var id = "<?php echo $_SESSION['id']; ?>";
        $.ajax({
          type : 'POST',
          url  : 'support/event_reg',
          data : {'event_id':event_id,'v_id':id},
          success : function (response)
          {
              if (response == '1') 
              {
                  alert('sucessfully applied');
              }
              else
              {
                alert('failed to update');
              }
          }
        });
     }


</script>
