<?php include("service/ui/common/header.php"); ?>
<div class="container section_wrapper">
         <div class="row">
            <div class="col-md-8">
               <div class="signlog padding-lft-20">
                  <h3>Login</h3>
               </div>
               <div id="payment_error" style="margin-top:20px;display:none;" class="alert alert-error">Sua conta expirou.<a href="<?php echo WEB_ROOT?>index.php/payment_package" >click here</a> to subscribe.</div>
               <div id="email_error" style="margin-top:20px;display:none;" class="alert alert-error">Email não verificado</div>
               <div id="signin_error" style="margin-top:20px;display:none;" class="alert alert-error">Login inválido.</div>
               <form id="signin-form" name="signin-form">
               
                  <fieldset class="account-text accotxt">
                     <label>
                     E-mail<br>
                     <input type="email" placeholder="E-mail" data-type="email" data-trigger="change" data-required="true" class="input-block-level"  name="email"  id="email">
                     </label>
                     <label>
                     Senha<br>
                     <input type="password" placeholder="Senha" data-trigger="change" data-required="true" id="password" name="password" class="input-block-level">
                     </label>
                  </fieldset>
                  <div class="forgot">
                     <P><a href="#">Esqueceu sua senha?</P>
                     </a>
                  </div>
                  <div class="between"></div>
                  <div id="signinBtn" class="findDoctors join jo">Login</div>
               </form>
               <div class="between"></div>
               <div class="patient">
                  <h2>Sou um novo paciente</h2>
                  <p>Inscreva-se no AgendaMais para poder agendar uma consulta<br>
                     agora!   <span class="underline underline"><a href="<?php echo WEB_ROOT;?>index.php/join">Entrar agora</a></span>
                  </p>
                  <br>
               </div>
               <div class="col-md-4"></div>
            </div>
         </div>
      </div>


<?php include("service/ui/common/footer.php"); ?>