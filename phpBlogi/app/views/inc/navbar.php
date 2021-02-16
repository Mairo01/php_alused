<nav class = "navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a href="<?php echo URLROOT;?>" class="navbar-brand">
        <?php echo PROJECT_NAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
        <div class = "collapse navbar-collapse" id = "navbarNav">
            <ul class = "navbar-nav mr-auto">
                <li class = "nav-item">
                    <a href="<?php echo URLROOT;?>" class="nav-link">Home</a>
                </li>
            </ul>

            <ul class = "navbar-nav ml-auto">
                <?php if(isset($_SESSION['user_id'])): ?> <!-- logout -->
                    <li class = "nav-item">
                    <?php echo $_SESSION[user_name]; ?>
                    </li>
                <li class = "nav-item">
                    <a href="<?php echo URLROOT;?>/users/register" class="nav-link">Register</a>
                </li>
                <li class = "nav-item">
                    <a href="<?php echo URLROOT;?>/users/register" class="nav-link">Login</a>
                </li>
            </ul>
            <?php endif;?>
        </div>
    </div>
</nav>