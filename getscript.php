<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">
  #box1{
    width: 50px
    height: 30px
    border: solid 1px black
}
</style>


<script>
$(document).ready(function(){
    $('a#hide').click(function(){
        $('#box1').hide();
    });

    $('a#show').click(function(){
        $('#box1').show();
    });


});
</script>

<head>

</head>
<body>
        <div class="content" id="box1">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Suppliers Challan</h4>
                                <p class="category">Challan details of a particular Supplier</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
          </div> 

          <a href="#"  id="hide">hide </a>
        
</body>
</html>
