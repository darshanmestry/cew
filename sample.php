<form method="POST" action="create_cust_info.php">
    <tr>
                                            <td></td>
                                            <td>
                                             
                                                <button  class="btn btn-round btn-fill btn-info"  type="button" value="Add Customer" onclick="addRow('dataTable')"">Create New</button>
                                            
                                            </td>
                                            <td>
                                                 <button class="btn btn-round btn-fill btn-info" type="button" value="Delete Customer" onclick="deleteRow('dataTable')" >Delete</button>
                                            </td>
                                           </tr> 

                                           <tr>
                                                <td>
                                                    
                                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Update Profile</button>
                                                    
                                                </td>
      </tr> 
  

  <div class="content table-responsive table-full-width">

 <TABLE    class="table table-hover table-striped"  id="dataTable">
  <TR>
   <TD><INPUT type="checkbox" name="chk"/></TD>
  
   
   <TD> <INPUT type="text" name="user"/> </TD>

    
  

  </TR>

 </TABLE>
 
 </div>
 </form>
 <script>
 function addRow(tableID) {

   var table = document.getElementById(tableID);

   var rowCount = table.rows.length;
   var row = table.insertRow(rowCount);

   var cell1 = row.insertCell(0);
   var element1 = document.createElement("input");
   element1.type = "checkbox";
   element1.name="chkbox[]";
   cell1.appendChild(element1);

  

   var cell2 = row.insertCell(1);
   var element2 = document.createElement("input");
   element2.type = "text";
   element2.name = "txtbox[]";
   cell2.appendChild(element2);


   


  }

  function deleteRow(tableID) {
   try {
   var table = document.getElementById(tableID);
   var rowCount = table.rows.length;

   for(var i=0; i<rowCount; i++) {
    var row = table.rows[i];
    var chkbox = row.cells[0].childNodes[0];
    if(null != chkbox && true == chkbox.checked) {
     table.deleteRow(i);
     rowCount--;
     i--;
    }


   }
   }catch(e) {
    alert(e);
   }
  }

 </script>