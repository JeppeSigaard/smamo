<!-- -->
<?php define('WP_USE_THEMES', false); require '../../../../wp-load.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">
</head>
<body>
 
<!-- -->

<div class="modal-meeting">
    <div class="inner">
        <form action="<?php admin_url('admin-ajax.php'); ?>" method="post" class="modal-meeting-form">
            <div class="inner">
                <input type="hidden" name="action" value="book-meeting">
                <div>
                   <input type="text" name="">
                   <label for=""></label>
                </div>
                <div>
                   <a class="button" class="form-submit">Send</a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- -->
   
</body>
</html>


<!-- -->