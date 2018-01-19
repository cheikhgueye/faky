<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
          <header class="row r">
              <div class="col-md-1 "><img src="images.png" id="lo"></div>
              <div class="col-md-1"></div>
              <div class="col-md-2 ">
                  <ul id="co">
                      <li><a href="">cotdgssgdd1</a></li>
                      <li><a href="">cote2</a></li>
                      <li><a href="">cote3</a></li>
                  </ul>
              </div>
             
              <div class="col-md-3"><img src="index.png" id="p"><span class="glyphicon gly glyphicon-star st"><div class="et"></div></span></div>

              <div class="col-md-3 fo"> <div class="form-group mx-sm-3  for">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="text" class="form-control" id="re" placeholder="rechercher">
  </div>
  <button type="submit" class="btn btn-primary bou" >rechercher</button>
</form></div>
              <div class="col-md-2">
                  <h1>
     <?php echo $_GET['nom']; ?></h1>
	
	</div>

          </header>
        <article class="row">
           
        <section class="col-md-3 ">
            <div class="card">
                <img class="card-img-top" src="" alt="">
                <div class="card-head">
                <h4 class="card-title">Categories</h4>

                </div>
                <div class="card-body">
                    <ul class="ca">
                       <li><a href="">Informatiques</a></li> 
                       <li><a href="">Electromenagers</a></li>
                   
                       <li><a href=""></a></li>
                       <li><a href=""></a></li>
                       <li><a href="">Protables</a></li>
                       <li></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="col-md-3 a">
            <div class="card">
                <img class="card-img-top por" src="i3.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </section>
        <section class="col-md-3 a">
            <div class="card">
                <img class="card-img-top por" src="i1.jpeg" >
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </section>
        <section class="col-md-3 a">
            <div class="card">
                <img class="card-img-top por" src="i2.jpeg" >
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </section>




        
        
        
     
        
        
        </article>
        <article class="row">
           
        <section class="col-md-3 ">
            <div class="card">
                <img class="card-img-top" src="" alt="">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                   
                </div>
            </div>
        </section>
        <section class="col-md-3 a">
            <div class="card">
               <img class="card-img-top por" src="ii3.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </section>
        <section class="col-md-3 a">
            <div class="card">
                <img class="card-img-top por" src="ii1.jpeg" >
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </section>
        <section class="col-md-3 a">
            <div class="card">
                <img class="card-img-top por" src="ii2.jpeg" >
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </section>




        
        
        
     
        
        
        </article>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<style>
    .r{
 background-color:#FEFDF0;
 height: 90px;
    
    }
  
    #p{
        width: 50px;
        height: 60px;
    }
    #lo{
        width: 150px;
        height: 90px;
    }
    #re{
        width: 300px;
    }
    .fo{
        display: flex;
        flex-direction: row;
    }
    .bou{
        height: 35px;
        margin-top: 30px;
        
    }
    #co{
        display: flex;
        flex-direction: row;
        list-style: none;
        justify-content: space-between;
        margin-top: 30px;
    }
    .for{
        margin-top: 30px;
    }
    .st{
        color: #FCDC12;
        width: 100px
    }
    .ca{
        list-style: none;
        color: black
    }
    .por{
        height: 200px;
    }
    .card-title{
        text-align: center;

    }
    .card-head{
        background-color: #1E7FCB
    }
    #jsddm
    { margin-left: 70px;
        
	padding: 0}
	
	#jsddm li
	{ float: left;
	list-style: none;
	font: 12px Tahoma, Arial}
	
	#jsddm li a
	{ display: block;
	background: #20548E;
	padding: 5px 12px;
	text-decoration: none;
	border-right: 1px solid white;
	width: 70px;
	color: #EAFFED;
	white-space: nowrap}
	
	#jsddm li a:hover
	{ background: #1A4473}
	
	#jsddm li ul
	{ margin: 0;
	padding: 0;
	position: absolute;
	visibility: hidden;
	border-top: 1px solid white}
	
	#jsddm li ul li
	{ float: none;
	display: inline}
	
	#jsddm li ul li a
	{ width: auto;
	background: #9F1B1B}
	
	#jsddm li ul li a:hover
	{ background: #7F1616}


</style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.a').on('click',function(){
          $('.et').text(Number($('.et').text())+1)
          $('.et').css({
              'color':'black'
          })
      })
    
    })
    var timeout = 500;
	var closetimer = 0;
	var ddmenuitem = 0;
	
	function jsddm_open()
	{ jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').css('visibility', 'visible');}
	
	function jsddm_close()
	{ if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
	
	function jsddm_timer()
	{ closetimer = window.setTimeout(jsddm_close, timeout);}
	
	function jsddm_canceltimer()
	{ if(closetimer)
	{ window.clearTimeout(closetimer);
	closetimer = null;}}
	
	$(document).ready(function()
	{ $('#jsddm > li').bind('mouseover', jsddm_open)
	$('#jsddm > li').bind('mouseout', jsddm_timer)});
	
	document.onclick = jsddm_close;
  </script>