
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
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
                        <?php
                        /**
                         * Copyright 2011 Facebook, Inc.
                         *
                         * Licensed under the Apache License, Version 2.0 (the "License"); you may
                         * not use this file except in compliance with the License. You may obtain
                         * a copy of the License at
                         *
                         *     http://www.apache.org/licenses/LICENSE-2.0
                         *
                         * Unless required by applicable law or agreed to in writing, software
                         * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
                         * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
                         * License for the specific language governing permissions and limitations
                         * under the License.
                         */
 

                      
                       
                        ?>



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
