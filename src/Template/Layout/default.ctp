<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Telemaque | e-shop home';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <!-- Bootstrap Core CSS -->
        <?= $this->Html->css('bootstrap/css/bootstrap.min.css') ?>

        <!-- Custom CSS -->
        <?= $this->Html->css('bootstrap/css/shop-homepage.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?= $this->Html->css('base.css'); ?>
        <?= $this->Html->css('blue.css'); ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
            <!-- Navigation -->
            <div class="container">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Start Bootstrap</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                            <div class="nav navbar-custom-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown messages-menu">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="">Login</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div style="position: relative; overflow: hidden; width: 400px; height: 250px;" class="slimScrollDiv">
                                                    <ul style="overflow: hidden; width: 100%; height: 100%; padding-left: 0px" class="menu">
                                                        <li>
                                                            <div class="container" style="width: 80%; height: 90%;">
                                                                <form class="form-signin">
                                                                    <h2 class="form-signin-heading">Please sign in</h2>
                                                                    <label for="inputEmail" class="sr-only">Email address</label>
                                                                    <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
                                                                    <label for="inputPassword" class="sr-only">Password</label>
                                                                    <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input value="remember-me" type="checkbox"> Remember me
                                                                        </label>
                                                                    </div>
                                                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                                                </form>
                                                            </div> <!-- /container -->
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    <li>
                                        <?= $this->Html->tag('li',
                                            $this->Html->link('Register', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]),
                                            ['escape' => false]);
                                        ?>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>
            </div>
            <!-- /.container -->
            <div id="content">
                <?= $this->Flash->render() ?>

                <div class="row">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>
            <!-- jQuery -->
            <?= $this->Html->script('bootstrap/js/jquery.js'); ?>
            <!-- Bootstrap Core JavaScript -->
            <?= $this->Html->script('bootstrap/js/bootstrap.min.js'); ?>
    </body>
</html>
