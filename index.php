<?php include 'inc/head.php'; ?>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <?php include 'inc/preloader.php'; ?>
    <!-- end of preloader -->

    <!-- Navbar -->
    <?php include 'inc/navbarhome.php'; ?>
    <!-- end of navbar -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTATO</div>
                        <h2>ENTRE EM CONTATO CONOSCO, SERÁ UM PRAZER ATENDÊ-LO!</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"></i>Nosso time irá entrar em contato mais rapido póssivel</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">(11) xxxx-xxxx</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">contato@xxxxxx.com.br</a></li>
                        </ul>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/imanancial12/">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/imanancial12/">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <span class="hexagon"></span>
                                <i class="fab fa-whatsapp fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                <!-- Contact Form -->
                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Nome</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">E-mail</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control-input" id="ctel" required>
                        <label class="label-control" for="ctel">Celular</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="cselect" for="cselect" name="cselect" style="color: #787976;font: 400 0.875rem/1.375rem 'Open Sans', sans-serif;padding-left: 22px">
                            <option class="select-option">Assunto</option>    
                            <option class="select-option" value="Diretoria">Diretoria</option>
                            <option class="select-option" value="Gerencia">Gerencia</option>
                            <option class="select-option" value="Surpervisão">Surpervisão</option>
                            <option class="select-option" value="Diretoria">RH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Digite sua mensagem aqui...</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">ENVIAR</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </form>
            <!-- end of contact form -->
                
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Footer -->
    <?php include 'inc/footer.php'; ?>
    <!-- end of copyright -->

    <!-- Scripts -->
    <?php include 'inc/scriptsJS.php'; ?>
    <!-- Scripts -->
</body>
</html>