<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 container">
                <h2>Contact</h2>
                <!--<form action="index.php#contact" method="post" id="add_contact_form" name="contact-form">-->
                <form action="contact_manager/index.php" method="post" id="add_contact_form">
                    <input type="hidden" name="action" value="add_contact">
                    <input type="text" name="name" placeholder="Name" id="contact_name"><br>
                    <input type="email" name="email" placeholder="Email" id="contact_email"><br>
                    <textarea name="message" placeholder="Message" id="contact_message"></textarea><br>
                    <input type="submit" value="send" class="btn btn-default">
                    <!--<input type="submit" name="send" value="send" class="right btn btn-default" onclick="newContact()">-->
                </form>
            </div>
        </div>
    </div>
</section>