<html>
    
<body>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <center><h4 class="title" >EXPENSES</h4></center>
                            </div>
                            
                            <div class="content">
                                
                                    <div class="typo-line">
                                        <form action="addExpense.php" method='post'>
                                            

                                             <div>
                                                 <h5>For :</h5> <select name="month">
                                                     <option disabled selected value> -- Select month-- </option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                    
                                                </select>
                                               
                                             </div>
                                            
                                             <br>
                                             <br>
                                             <input class="btn btn-info btn-fill pull-center" type="submit" value="Submit"/>
                                             <br>
                                             <br>
                                             

                                             
                                             <div class='form-row'>
                                                 <div> <h5>Result :</h5>  <h4>Meter ID : <%=meterid%></h4>
                                                         <% 
                                                             if(request.getAttribute("consumpid")!=null){
                                                             out.println("<h4>Consumption ID:"+request.getAttribute("consumpid")+"</h4>");
                                                             }
                                                             else 
                                                                 out.println("<h4>Total Consumption: No Record </h4>");  
                                                             out.println("<h4>Month:"+request.getAttribute("month")+"</h4>");
                                                             if(request.getAttribute("consumption")!=null){
                                                             out.println("<h4>Total Consumption:"+request.getAttribute("consumption")+"</h4>");  
                                                             }
                                                             else 
                                                                 out.println("<h4>Total Consumption: No Record </h4>");  
                                                             
                                                         
                                                       
                                                           
                                                        %>
                                                 </div>
               
                                             </div>
                                                     
                                             
                                               
                                             
                                        </form>
                                    </div>
                                
                            </div>
                        </div>                
                    </div>           
                </div>                 
            </div>                    
        </div>
</body>

</html>
