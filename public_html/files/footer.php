<footer class="page-footer">
    <div id="contact-error" class="modal">
        <div class="modal-content">
            <h4>Sorry</h4>
            We had a problem sending your message. Would you like to try again?
        </div>
        <div class="modal-footer">
            <a id="nope" class="modal-action modal-close left btn-flat btn waves-effect waves-red">Nope</a>
            <a id="sure" class="modal-close teal lighten-1 modal-action btn btn waves-effect waves-light">Sure</a>
        </div>
    </div>

    <div id="contact" class="modal modal-fixed-footer">
        <form id="contact-form" action="/files/php/send.php" method="POST">
            <div class="modal-content grey darken-3 white-text">
                <h4>Shoot me a message</h4>

                <div class="row">
                    <div class="input-field col s12 m4 l6">
                        <input pattern="\w+\s\w+.*" id="name" type="text" class="validate" name="name" required>
                        <label for="name" data-error="Full name, please">Name</label>
                    </div>
                    <div class="input-field col s12 m8 l6">
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email" data-error="That doesn&apos;t look right" data-success="I&apos;ll send you a
                         copy">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="message" class="materialize-textarea validate" name="message" required></textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="input field col s12">
                        <div class="g-recaptcha" data-sitekey="6LddJhUTAAAAAKmG64hNG_QhqUqn0emEq09MSkdO"></div>
                    </div>
                </div>-->

                <!-- For Cross-site request forgery protection -->
                <input type="hidden" name="CSRFName" value="contact" />
                <input type="hidden" name="CSRFToken" value="<?php echo csrfguard_generate_token("contact"); ?>" />
            </div>
            <div class="modal-footer">
                <button class="left red darken-1 btn waves-effect modal-action modal-close" type="button"
                        name="cancel">
                    <span class="hide-on-small-and-down">Never mind</span>
                    <i class="material-icons hide-on-med-and-up">not_interested</i>
                    <i class="material-icons right hide-on-small-and-down">not_interested</i>
                </button>
                <button class="teal lighten-1 btn waves-effect waves-light modal-action" type="submit"
                        name="submit">Send
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form> <!-- end #contact-form -->
    </div> <!-- end #contact -->

    <ul id="social-links" class="row container">
        <li class="col s3 center">
            <a class="btn-flat waves-effect white-text" target="_blank" href="https://www.linkedin.com/in/ryanfrowe" title="LinkedIn">
                <i class="fa fa-linkedin"></i></a>
        </li>
        <li class="col s3 center">
            <a class="btn-flat waves-effect white-text" target="_blank" href="https://github.com/rfrowe" title="GitHub">
                <i class="fa fa-code-fork"></i>
            </a>
        </li>
        <li class="col s3 center">
            <a class="btn-flat waves-effect white-text" target="_blank" href="https://facebook.com/ryanroweboat" title="Facebook">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li class="col s3 center">
            <a class="btn-flat waves-effect white-text modal-trigger contact-us" href="#contact" title="Email">
                <i class="fa fa-envelope"></i>
            </a></li>
    </ul>

    <div class="footer-copyright">
        <div class="container">
            &copy; <?= date("Y"); ?> Ryan Rowe
            <div class="right" id="with-love">
                Made with <i class="fa fa-heart-o"></i> in Seattle
            </div>
        </div>
    </div>
</footer>
