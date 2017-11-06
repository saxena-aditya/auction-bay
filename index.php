<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mini-project-2017/css/style_front_page.css">
    <style type="text/css">
      body {
        background: none;
      }
    </style>
</head>

<body>
	<header>
	<?php require_once('site_header.php');?>
  </header>
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox" style="max-height: 400px;">
    <div class="item active">
      <img src="img/books.jpg" alt="books">
     
    </div>

    <div class="item">
      <img src="img/appliances.jpg" alt="appliances">
        
    </div>

    <div class="item">
      <img src="img/mobile-group.png" alt="mobile phones">
      
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
<div class="bg-1">
	<div class="container">
		<div class="text-center" style="font-size: 24px">
			<h2>Live bids</h2>
			<p>Go, place your own bid now.</p>
		</div>
    <br>
     <div class="text-center" style="font-size: 23px">
      
        <h3>Electronics</h3>
    </div>
		<div class="col-md-4">
            <div class="panel panel-info"  style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
          	        <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                	<p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    
   					          <img src="img/iphone.jpg" alt="books" style="text-align: center;">
                    
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>113</p>
      					     <div class="panel panel-footer">
      						    <div class="bid-money">
      							   <p class="bid-money">Rs. 0.00</p>
      						      </div>
      						    <div>
      							   <small style="color: #FF8C00">Time left: </small>
      							   <p id="demo-1"></p>
      						    </div>
      						  </div>
      						
      							<button class="btn btn-block"><strong>PLACE BID</strong></button>
    						  </div>
                </div>
     	  		  </div>
			</div>	
		  <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
          	        <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                	<p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
   		         			<img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
      						  	<div class="panel panel-footer">
      					   	   <div class="bid-money">
      							     <p class="bid-money">Rs. 0.00</p>
      						    </div>
      						    <div>
      							   <small style="color: #FF8C00">Time left: </small>
      							   <p id="demo-2"></p>
      						    </div>
      						    </div>
      						
      							<button class="btn btn-block"><strong>PLACE BID</strong></button>
    						  </div>
                </div>
     	  		</div>
			</div>	
		  <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
          	        <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                	<p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
   		         			<img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>746</p>
      				    		<div class="panel panel-footer">
      					 	     <div class="bid-money">
      							     <p class="bid-money">Rs. 0.00</p>
      						    </div>
      						    <div>
      							   <small style="color: #FF8C00">Time left: </small>
      							   <p id="demo-3"></p>
      						    </div>
      						  </div>
      						
      							<button class="btn btn-block"><strong>PLACE BID</strong></button>
    					     </div>
                </div>
     	  		</div>
			 </div>	
       <button type="button" class="pull-right btn but">VIEW ALL</button>
     </div>
     <br><br>
     <div class="container">
        <div class="text-center" style="font-size: 23px">
      
        <h3>Mobile Phones</h3>
    </div>
    <div class="col-md-4">
            <div class="panel panel-info"  style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    
                      <img src="img/iphone.jpg" alt="books" style="text-align: center;">
                    
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>113</p>
                     <div class="panel panel-footer">
                      <div class="bid-money">
                       <p class="bid-money">Rs. 0.00</p>
                        </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-4"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
              </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-5"></p>
                      </div>
                      </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
            </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    <img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>746</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-6"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                   </div>
                </div>
            </div>
       </div> 
        <button type="button" class="pull-right btn but">VIEW ALL</button>
	   </div>
     <br><br>
      <div class="container">
        <div class="text-center" style="font-size: 23px">
      
        <h3>Books</h3>
    </div>
    <div class="col-md-4">
            <div class="panel panel-info"  style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    
                      <img src="img/books.jpg" alt="books" style="text-align: center;">
                    
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>113</p>
                     <div class="panel panel-footer">
                      <div class="bid-money">
                       <p class="bid-money">Rs. 0.00</p>
                        </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-7"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
              </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="img/books.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-8"></p>
                      </div>
                      </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                  </div>
                </div>
            </div>
      </div>  
      <div class="col-md-4">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">Book</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    <img src="img/books.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>746</p>
                      <div class="panel panel-footer">
                       <div class="bid-money">
                         <p class="bid-money">Rs. 0.00</p>
                      </div>
                      <div>
                       <small style="color: #FF8C00">Time left: </small>
                       <p id="demo-9"></p>
                      </div>
                    </div>
                  
                    <button class="btn btn-block"><strong>PLACE BID</strong></button>
                   </div>
                </div>
            </div>
       </div>
        <button type="button" class="pull-right btn but">VIEW ALL</button> 
     </div>
   </div>
     <br><br>
     <div class="border-line"></div>
	<div class="container">
    <div class="text-center" style="font-size: 24px">
      
        <h2>Upcoming bids</h2>
        <p>Dont't miss any of the hot deals</p>
    </div>
    <br>
    
    <div class="row">
  <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail">
                    <img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                     
            
                  </div>
                </div>
                <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
            </div>
      </div>
      <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      
                  </div>

                </div>
                <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
            </div>
      </div>
      <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                      

                  </div>
                </div>
                <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
            </div>
      </div>
      <div class="col-md-3">
            <div class="panel panel-info" style="margin-left: 30px, margin-right: 30px">
               <div class="panel-heading">
                    <h3 class="panel-title">iPhone 7</h3>
               </div>
                <div class="panel-body">
                  <p>MRP: Rs. 30000</p>
                  <div class="thumbnail" >
                    <img src="img/iphone.jpg" alt="iphone">
                    <p style="font-size: 16px"><strong>AUCTION ID: </strong>225</p>
                    
                </div>

            </div>
            <div class="panel-footer upcoming">
                  <p><strong>Open after 10 days</strong></p>
                </div>
          </div>
      </div>
    </div>
     <button type="button" class="pull-right btn but">VIEW ALL</button>
  </div>
  <br>
  <div class="row" style="margin-top: 60px">
    <div class="container wrapper">
    <div class="col-sm-5" style="text-align: left; height: 213px">
      <h2 style="height: 36px">Auction Bay bidding rules :</h2>
      <div class="small-border"></div>
      <ul style="margin-left: -30px">
        <br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        One User Account Per Person / IP Address / House is allowed1<br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        Group Bidding is strictly not allowed<br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        Do not use any 3rd party bidding softwares of bots for bidding<br>
        <i class="fa fa-caret-right" style="font-size: 20px;"></i>
        Violation of rules will result in Suspension of your account<br>
       <br>
      </ul>
    </div>
    <div class="col-sm-1 middle-border"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5" style="text-align: left;">
      <h2>Protected Online Shopping</h2>
      <div class="small-border"></div>
      <ul style="margin-left: -30px;">
        <br>
        <p style="font-size: 20px;"></>Auction is protected and safe</p>
      </ul>
    </div>
  </div>
</div>
        <?php require_once('site_footer.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/mini-project-2017/scripts/script_.js"></script>


</html>
