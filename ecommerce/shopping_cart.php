<html>
 <head> 
 	<title>Shopping_Cart</title>
 	<script type="text/javascript" src="shopping_cart.js"></script>
    
    
 	<style>
 	h1{
 		text-align:center;
 	}
    #t1,#t2,#t3,#t4{
    	width:40;
    }
    img{
    	float:right;
    }
    #cartimg,#cartvalue{
    	float:right;
    }
    #cartvalue{
    	width:40;
    }
   #cartvalue, #cartimg{
    position: sticky;
	left: 0px;
	top: 0px;
    }

   .btn:hover{
    color:red;
    background-color:black;
   }

 	</style>
 </head>
 <body>

    <h1>FRUITS SECTION</h1>
    <input type="text" id="cartvalue" value="0" min="0">
    <a href="totalcost.html"><img src="cart.png" alt="cart" id="cartimg" width="45px" height="45px" onclick="totalcost("t1","t2","t3","t4")"></a>
    



<table> 
  <tr>
	<th><img src="apple1.jpg" alt="apples" id="img1" width="100px" height="100px"></th>
     <th>APPLES<br>RS 40/kg <br> 
    <input type="submit" value="+" class="btn" onclick=plus("t1")>
    <input type="text" id="t1" value="0" minlength="0">
    <input type="submit" value="-" class="btn" onclick=remove("t1")></th>
  </tr>

</table>

    <br><br>
<table>
   <tr>
   	<th><img src="orange.jpg" alt="oranges" width="100px" height="100px"></th>
    <th>ORANGES<br> RS 30/kg <br>
     <input type="submit" value="+" class="btn" onclick=plus("t2")>
     <input type="text" id="t2" value="0" minlength="0">
     <input type="submit" value="-" class="btn" onclick=remove("t2")></th>
   </tr>
</table>
   <br><br>
<table>
   <tr>
   	<th><img src="grapes1.jpg" alt="grapes" id="img1" width="100px" height="100px"></th>
    <th>GRAPES<br> RS 20/kg <br>
    <input type="submit" value="+" class="btn" onclick=plus("t3")>
     <input type="text" id="t3" value="0" min="0">
     <input type="submit" value="-" class="btn" onclick=remove("t3")></th>
   </tr>
</table>
    <br><br>
<table>
   <tr>
   	<th><img src="guava1.jpg" alt="guava" width="100px" height="100px"></th>
    <th>GUAVAS<br> RS 10/kg <br>
     <input type="submit" value="+" class="btn" onclick=plus("t4")>
     <input type="text" id="t4" value="0" min="0">
     <input type="submit" value="-" class="btn" onclick=remove("t4")></th>
   </tr>
</table>
   <br><br><br><br>
   <div>
   	<b>TOTAL COST:</b>
   	<input type="text" id="totalcost1" value="0" min="0">
 </body>
</html>
