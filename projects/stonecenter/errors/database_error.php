<?php $loc = $_SERVER['DOCUMENT_ROOT'] . '/projects/stonecenter'; ?>
<header class="row">
    <?php include $loc . '/view/header.php'; ?>
</header>
<div id="error">
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>Error message: <?php echo $error_message; ?></p>
</div>
<?php include $loc . '/view/home.php'; ?>
<?php include $loc . '/view/about.php'; ?>
<?php include $loc . '/view/projects.php'; ?>
<?php include $loc . '/view/contact.php'; ?>

<footer class="row">
    <?php include $loc . '/view/footer.php'; ?>
</footer>

