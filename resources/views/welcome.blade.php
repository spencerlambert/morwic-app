<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                float:left;
                width: 100%            }

           

           
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

.main {
  max-width: 1000px;
  margin: auto;
}





/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
}

/* Clear floats after rows */



        </style>
    </head>
    <body>
    <!--<div>
        <img src="{{url('/').'/images/'}}thatswasmystuff_logo.png" />
        </div>-->
        <div class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                
                <div class="main">

<!-- Gallery Grid -->

  <div class="column">
    
      <h2>Know your stuff:</h2>     
      <p>With That was my stuff, you and your family get a unified, real-time view of stuff levels and inventory Know what you have and where you have it 
Give your family insight into how much you have and who owns it.</p>
  
  </div>
 <div class="column">
  
      <h2>Run a lean inventory operation:</h2>     
      <p>Tighter inventory management in that was my stuff means better better data for lawyer and judge, saving money and time.</p>
  
  </div>
 <div class="column">
   
      <h2>Accountability for the whole family:</h2>     
      <p>Maintain accountability across the family through that was my stuff history, pricing, and reports.</p>
   
  </div>
 <div class="column">
  

      <h2>Better, faster, easier</h2>     
      <p>With that was my stuff inventory software, you can input your family inventory faster, and reduce manual inventory taking related tasks, helping you focus on what you need to do most.</p>
 
  </div>
  <div class="links">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8CW84WDFGGTFN">
<table>
<tr><td><input type="hidden" name="on0" value="Sign up today"><h3 style="color: #000;">Sign up today</h3></td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                </div>
  </div>
  

            </div>
        </div>
    </body>
</html>
