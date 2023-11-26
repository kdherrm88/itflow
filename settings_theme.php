<?php
require_once "inc_all_settings.php";
 ?>

    <div class="card card-dark">
        <div class="card-header py-3">
            <h3 class="card-title"><i class="fas fa-fw fa-paint-brush mr-2"></i>Theme</h3>
        </div>
        <div class="card-body">
            <form action="post.php" method="post" autocomplete="off">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">

                <label>Select a Theme</label>
                <div class="form-row">

                    <?php

                    foreach ($colors_array as $color) {

                        ?>

                        <div class="col-3 text-center mb-3">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio<?php echo $color; ?>" name="theme" value="<?php echo $color; ?>" <?php if ($config_theme == $color) { echo "checked"; } ?>>
                                    <label for="customRadio<?php echo $color; ?>" class="custom-control-label">
                                        <i class="fa fa-fw fa-6x fa-circle text-<?php echo $color; ?>"></i>
                                        <br>
                                        <?php echo $color; ?>
                                    </label>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>

                <hr>

                <button type="submit" name="edit_theme_settings" class="btn btn-primary text-bold"><i class="fa fa-check mr-2"></i>Set Theme</button>

            </form>
        </div>
    </div>

<?php
require_once "footer.php";

