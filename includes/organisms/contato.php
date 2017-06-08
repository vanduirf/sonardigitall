<!--Contact Section-->
    <section id="contato">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<h2 class="section-heading">Entre em Contato</h2>
    				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, autem.</h3>
    			</div>
    		</div>
    		<div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post" action="mail/contact_me.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group warning">
                                    <input type="email" class="form-control" placeholder="Seu E-mail *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu Telefone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envie</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    	</div>
    </section>