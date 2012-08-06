<?php
/*
 * The MIT License
 *
 * Copyright 2012 Abhijit Gaikwad <gaikwad.abhijit@gmail.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sample Facebook App + Twitter bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php include 'include_style.php';
        ?>
           </head>

    <body>

        <?php
        include 'top_header.php';
        ?>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <?php include 'left_menu.php'; ?>
                </div><!--/span-->
                <div class="span9">
                    <div class="hero-unit">
                        
                        <?php if (!$user): ?>

                            <div>
                                <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
                            </div>
                        <?php endif ?>



                        <?php if ($user): ?>
                            <h3>You</h3>
                            <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

                            <h3>Your User Object (/me)</h3>
                            <pre><?php print_r($user_profile); ?></pre>
                        <?php else: ?>
                            <strong><em>You are not Connected.</em></strong>
                        <?php endif ?>



                    </div>


                </div><!--/span-->
            </div><!--/row-->

            <hr>

            <footer>
                <?php
                include 'footer.php';
                ?>
            </footer>

        </div><!--/.fluid-container-->


        <?php
        include "js_include.php";
        ?>

    </body>
</html>
