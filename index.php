<?php  
 $connect = mysqli_connect("localhost", "root", "", "ecommerce_office");  
 $query = "SELECT * FROM product";  
 $result = mysqli_query($connect, $query);  
 ?>  
 
<html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

 <script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "select.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});

</script>

<body>
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="Display All Data" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>

