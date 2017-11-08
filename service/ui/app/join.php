<?php include("service/ui/common/header.php"); ?>
      <div class="container section_wrapper">
         <div class="row">
            <div class="col-md-6">
               <div class="patient join-nw jo">

               </div>
               <img class="doctor" src="<?php echo WEB_ROOT;?>service/public/images/images/docor.png"></img>
            </div>
            <div class="col-md-6">
               <div class="patient weight">
                  <h2>Sou um novo paciente</h2>
                  <p>Encontre um médico e faça seu agendamento!
                  </p>
               </div>
               <div class="between"></div>
               <div class="between"></div>
               <div class="join now-width">
                  <a href="<?php echo WEB_ROOT;?>index.php/join/patient">
                     <h4>Entrar agora</h4>
                  </a>
               </div>
               <div class="between"></div>
               <div class="between"></div>
               <div class="patient weight">
                  <h2>Eu sou médico</h2>
                  <p>Modo mais rápido para o seu paciente agendar uma consulta. Registre-se<br>
                  
                  </p>
                  <div class=" learn">
                     <P><a href="<?php echo WEB_ROOT;?>index.php/join/learnmore">Saiba mais</P>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php include(APP_PATH."service/ui/common/footer.php"); ?>