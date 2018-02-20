<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/popper.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
          <header class="row r">
              <div class="col-md-1 "><img src="images.png" id="lo"></div>
              <div class="col-md-1"></div>
              <div class="col-md-3 ">
                
                
                      <ul id="co">
                       
                      </ul>
                     
                
              </div>
             
              <div class="col-md-3"><img src="index.png" id="p" type="button" class="s btn primary" data-toggle="modal" data-target="#modalContactForm"><span class="glyphicon gly glyphicon-star st"><div class="et"></div></span></div>
            
              <div class="col-md-3 fo">  
              <form action="#" id="for">
          
            <input type="text" placeholder="rechercher produit" class="form-control" name="cherche"  id="recherche" />
            <input type="submit" name="connexion" value="rechercher" class="btn" id="c">
         
        </form>
</div>
              <div class="col-md-1">
                  <h1>
    <h5 class="btn btn-info n"><?php echo $_GET['nom']; ?></h5> <a href="dec.php" id="dec">deconnexion</a>
	
	</div>
<style>
    body{
        font-size: 30px;
    }
</style>
          </header>
        <article class="row">
           
        <section class="col-md-3 " style=" margin-top:50px;font-size:20px;"> 
            <div class="card sc">
                <img class="card-img-top" src="" alt="">
                <div class="card-head">
                <h4 class="card-title catg">Categories</h4>

                </div>
                <div class="card-body">
                    <ul class="ca">
                  
                    </ul>
                </div>
            </div>
        </section>
        <section class="col-md-9 pro ">
           
            
         <div class="row" id="r">
         
         </div>
           
            
           

          
        </section>





        
        
        
     
        
        
        </article>
      



 <!--Modal: Contact form-->
 <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title"><i class="fa fa-pencil"></i> Vos achats</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    
    
                
    

                   


    
                <table border='1'>
                    <tr><th clospan='2'>Produits</th><th>prix_unitaire</th></tr>
 
          </table>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Contact form-->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        
        
     
        
        
    

      </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.js"></script>

  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</div>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script.js"></script>
  </body>
</html>
<style>
    .r{
 background-color:#FEFDF0;
 height: 90px;
    
    }
    
    #dec{
        font-size: 10px;
        text-decoration: none;

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
    .png{
        height: 60px;
        width: 60px;
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
    .n{
        font-size: 20px;
        width: auto;
        margin-left: -100px;
    }
    .co{
        display: flex;
        flex-direction: row;
        list-style: none;
        justify-content: space-between;
        margin-top: 30px;
        top: 0;
left: 0;
z-index: 10;
        position: fixed;
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
        color: black;
        display: flex;
        flex-direction: column;
        list-style: none;
      
        margin-top: 30px;
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
	.achat{
        background-color: blue;
        color: white;
        font-size: 20px;
    }
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
    .ca li{
        font-size: 30px;
        color:  blue;
    }
     #co .cate{
        background-color: #1E90FF;
        color:#FEFDF0;
        border-radius: 0;
        font-size: 15px;
    }
	
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
    .pro{
        width: 100px;
    }

.imgs {
    height: 250px;
   
}
.imgs:hover{
   
    /* identique à scaleX(2) scaleY(0.5) */
  transform: scale(1, 1);
  transform-origin: left;
  background-color: blue;

}
.w{
    margin-top: 200px
}
/* Autocomplete
----------------------------------*/
.ui-autocomplete { position: absolute; cursor: default; }       
.ui-autocomplete-loading { background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat; }

/* workarounds */
* html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */

/* Menu
----------------------------------*/
.ui-menu {
        list-style:none;
        padding: 20px;
        margin: 0;
        display:block;
        width:100px;
        background-color: white;
        font-size: 12px;
}
.ui-menu .ui-menu {
        margin-top: -3px;
       
}
.ui-menu .ui-menu-item {
        margin:0;
        padding: 0;
        width: 200px;
}
.ui-menu .ui-menu-item a {
        text-decoration:none;
        display:block;
        padding:.2em .4em;
        line-height:1.5;
        zoom:1;
}
.ui-menu .ui-menu-item a.ui-state-hover,
.ui-menu .ui-menu-item a.ui-state-active {
        margin: -1px;
}
</style>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.a').on('click',function(){
          $('.et').text(Number($('.et').text())+1)
          $('.et').css({
              'color':'black',
          

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
    $('#jsddm > li').bind('mouseout', jsddm_timer)


});
	
	document.onclick = jsddm_close;
  </script>