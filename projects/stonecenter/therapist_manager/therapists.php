
<!DOCTYPE html>
    
<html>
<head>
    <meta charset="UTF-8">
    <title>The Stone Center for Counseling & Leadership</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/therapists.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/gallery.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include '../view/header.php'; ?>
        
        <div id="therapists">
            <h2>Meet the Therapists</h2>
            <table>
                <tr>
                    <?php foreach ($therapists as $therapist) : ?>
                    <td><img src="../<?php echo $therapist['photo']; ?>" alt="<?php echo $therapist['name']; ?>'s headshot"></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <?php foreach ($therapists as $therapist) : ?>
                    <td>
                        <h3 class="title"><?php echo $therapist['name']; ?></h3>
                        <h4><?php echo $therapist['title']; ?></h4>
                    </td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <?php foreach ($therapists as $therapist) : ?>
                    <td>
                        <a href="index.php?action=show_therapist&id=<?php echo $therapist['id']; ?>">
                            <div id="button">
                                <button id="learnMore">Learn More</button>
                            </div>
                        </a>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>
            <div>
                <?php include 'therapist_info.php'; ?>
            </div>
            <p id="validate"><a href="http://validator.w3.org/check?uri=referer">Validate HTML</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a></p>
        </div>
        
    </div>
    
        <?php include '../view/footer.php'; ?>
</body>
</html>