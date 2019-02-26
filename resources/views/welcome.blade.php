<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>{{ config('app.name') }} </title>

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

            

            .content {
               // text-align: center;
              
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
            #pageContent {
        max-width: 1000px;
        margin: auto;
        border: none;
        padding-bottom: 20px;
        }
        main {
    float: left;
    width: 100%;
    }
    article {
    border-bottom: 2px dotted #999;
    padding-bottom: 20px;
    margin-bottom: 20px;
    }
    #logo {
    display: inline-block;
    vertical-align: middle;
    font-size: 30px;
    width: 60%;
    color: #FFF;
}
header {
    width: 82%;
    margin: auto;

}
nav {
    display: inline-block;
}
nav ul {
    list-style: none;
}
nav ul li {
    display: inline-block;
    margin: 10px;
}
nav ul li a{
    color: #636b6f;
     padding: 0 25px;
     font-size: 13px;
     font-weight: 600;
     letter-spacing: .1rem;
     text-decoration: none;
     text-transform: uppercase;
}
        </style>
    </head>
    <body>
       
        <header>
        <div id="logo"><img src="{{url('/').'/images/'}}thatswasmystuff_logo.png" /></div>
        <nav>  
            <ul>
               
                @if (Route::has('login'))
                
                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
              
            @endif
            </ul>
        </nav>
    </header>
            <div class="content">
              <section id="pageContent">
        <main role="main">
            <article>
                <h2>Know your stuff:</h2>
                <p>With That was my stuff, you and your family get a unified, real-time view of stuff levels and inventory Know what you have and where you have it 
Give your family insight into how much you have and who owns it.</p>
            </article>
            <article>
                <h2>Run a lean inventory operation:</h2>
                <p>Tighter inventory management in that was my stuff means better better data for lawyer and judge, saving money and time.</p>
            </article>
            <article>
                <h2>Accountability for the whole family:</h2>
                <p>Accountability for the whole family:</h2>     
      <p>Maintain accountability across the family through that was my stuff history, pricing, and reports.</p>
            </article>
            <article>
                <h2>Better, faster, easier</h2>
                <p>With that was my stuff inventory software, you can input your family inventory faster, and reduce manual inventory taking related tasks, helping you focus on what you need to do most.</p>
            </article>
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
                <article>
               &nbsp;
            </article>
        </main>
        
    </section>  

            </div>

     
        
    </body>
</html>