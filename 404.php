<!doctype html>
<html>
        <title>Page not found - Pine</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/styles/common.css" />
    </head>
    <body>
        <?php
        $selected='none';
        include 'parts/navbar.php'
        ?>
        <div id="main" class="center-col">
            <div class="center size-l base-semibold ink-black" id="txt">
          The page you’re looking for can’t be found.
        </div>
         <div id="links">
             <div class="ink-black size-m base-regular">Navigate</div>
             <div id="menuGrid" class="ink-blue size-s">
                    <div><a href="/">Home ></a></div>
                    <div><a href="/apps">Apps ></a></div>
                    <div><a href="/airsync">AirSync ></a></div>
                    <div><a href="/downloads">Downloads ></a></div>
                    <div>Contact us ></div>
                  </div>
         </div>
        </div>
        <?php
        include 'parts/footer.html'
        ?>
     
    </body>
</html>
<style>
    #links{
        display: block;
    text-align: left;
    width: 100%;
    }
    #menuGrid{
    padding-left: 0.5rem;
}
    #main{
        min-height: 100vh;
        padding:1rem;
    }
#txt{
    padding:6rem 0rem;
    max-width: 30rem;
}
</style>
