<html>
    <head>
        <title><?php if(isset($_title)) echo $_title; ?></title>
        <?php
        foreach ($script as $key => $value)
            echo Html::script($value);

        foreach ($style as $key => $value)
            echo Html::style($value);
        ?>
    </head>
    <body>
        <div id = "box">
            <div id = "header">
                <?php if(isset($header)) echo $header ?>
            </div>
            <div id = "content">
                <?php if(isset($content)) echo $content ?>
            </div>
            <div id = "footer">
                <?php if(isset($footer)) echo $footer ?>
            </div>
        </div> 
    </body>
</html>
