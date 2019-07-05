<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>ciBlog</title>
  </head>
  <body>


  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if(!$this->session->userdata('logged_in')) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                </li>
            <?php endif;?>
            <?php if($this->session->userdata('logged_in')) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                </li>
            <?php endif;?>
        </ul>
    </div>
  </nav>

  <div class="container">
    <!-- Flash messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>
