<?php
session_start();
include("service/ui/common/header.php"); 
 $_SESSION['userID'];
?>

      <div class="container section_wrapper">
         <div class="row">
            <div class="col-md-6">
               <section class="register">
                  <h3>Entrar agora</h3>
                  <div id="patient_error" style="margin-top:20px;display:none;" class="alert alert-error">E-mail ja existe.</div>
                  <div id="patient_success" style="margin-top:20px;display:none;" class="alert alert-success">Registrado com sucesso .<br/>Verifique sua conta. (Verifique seu e-mail)</div>
                  <form  style="margin-top:20px;" id="patient-form" name="patient-form">
                  <div class="reg_section personal_info">
                     <label>E-mail</label>
                     <input type="text" name="email" data-type="email" data-trigger="change" data-required="true" value="" placeholder="Endereço de e-mail">
                     <label>Criar uma senha</label>
                     <input type="password" name="password" value="" data-minlength="6" data-trigger="change" data-required="true" id="password" placeholder="Senha">
                  </div>
                  <div class="reg_section password">
                     <label>Nome</label>
                     <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="Primeiro nome" name="firstname" id=""  style='margin-bottom:5px' >
                       <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="Sobrenome" name="lastname" id="" >
                  </div>
                  <label>Data de Nascimento</label> 
                  <input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" data-beatpicker-format="['DD','MM',YYYY']" name="dob" id="dob" placeholder="DD-MM-AAAA"  />   
                  <label>Sexo</label> 
                  <div class="clearBoth"></div>
                  <div class="rad-but">
                     <input id="male" name="gender" value="1" data-required="true"   type="radio"> Masculino
                     &nbsp;&nbsp;
                     <input id="female" name="gender" value="2" data-required="true" type="radio"> Feminino
                     <div class="clearBoth"></div>
                  </div>
                  <div class="reg_section password">
                  </div>
                  <div>
                    <p class="terms">
                       <label>
                       &nbsp; <input data-trigger="change" data-required="true" name="privacy" name="privacy" type="checkbox">
                       <i><a href="<?php echo WEB_ROOT;?>index.php/terms">Eu concordo com os Termos de Serviço</a></i>
                       </label>
                    </p>
                  </div>

                  <div class="findDoctors submission" type="image" id="continue"><h4>Continue</h4></div>
                  </form>
               </section>
            </div>
            <div class="col-md-6">
               <div class="doc">
                  <img src="<?php echo WEB_ROOT;?>service/public/images/images/doctorr.png">
               </div>
               <div class="patient weight time">
                  <h2>AgendaMais é totalmente grátis.</h2>
                  <p>
                  </p>
               </div>
            </div>
         </div>
      </div>

<?php include("service/ui/common/footer.php"); ?>