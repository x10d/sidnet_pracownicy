<html>
    <head>
        <title><?php if(isset($_title)) echo $_title; ?></title>
        <?php
            foreach ($script as $key => $value) {
                echo HTML::script($value);
            }
                
            foreach ($style as $key => $value) {
                echo HTML::style($value);
            }
            ?>
    </head>
    <body>
        <div id="box">
            <div id="header">
                <?php if (isset($header)) echo $header ?>
            </div>
            <div id="menu">
                    <span><?php echo HTML::anchor('/', 'Home') ?></span>
                    <span><?php echo HTML::anchor('longList', 'Lista pracowników') ?></span>
                    <span><?php echo HTML::anchor('szukaj', 'Szukaj pracownika') ?></span>
                    <span><?php echo HTML::anchor('masonryPix', 'Zdjęcia-Masonry') ?></span>
                <?php if (Auth::instance()->logged_in()) { ?>
                    <span><?php echo HTML::anchor('wyloguj', 'Wyloguj się') ?></span>
                    <span><?php echo HTML::anchor('haslo', 'Zmień hasło') ?></span>
                <?php } else { ?>
                    <span>
                        <?php echo HTML::anchor('login', 'Zaloguj się') ?>
                        <?php echo HTML::anchor('zarejestruj', 'Zarejestruj się') ?>
                    </span>
                <?php } ?>
                    <span><?php echo HTML::anchor('searchMovie', 'Wyszukaj film') ?></span>
            </div>
            <div id="content">
                <?php if (isset($content)) echo $content ?>
            </div>
            <div id="footer">
                <?php if (isset($footer)) echo $footer ?>
            </div>
        </div> 
    </body>
</html>
