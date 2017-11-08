<?php
include(APP_PATH."service/ui/common/home_header.php");
?>

<style>

</style>
   <div class="schedule">
      <div class="schedulein">

         <div class="scheduleinner">
            <div class="free"><p>É Grátis!</p></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="col-md-8">
                        <div class="form">
                        <h2>Encotre um médico e agende sua consulta</h2>
                        </div>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>


               <div class="row">
                  <div class="form">
                     <h3>Iniciar</h3>
                  </div>
               </div>

               <form style="margin-top:15px;" id="findDoctor-form">
                  <div class="row">

                     <div class="col-md-4 col-sm-4 col-xs-11">
                        <fieldset class="home_search">
                           <label></label>
                              <div class="place-select">
                                 <select name="docSpeciality" id="docSpeciality" class="spciality_search">
                                    <optgroup label="All">
                                       <option value="" style="text-transform:unset;">Selecione a especialidade</option>
                                       <?php
                                       $condition = 'category_id = 1';
                                       $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                    </optgroup>
                                    <optgroup label="Therapists / Counselors">
                                       <?php
                                       $condition = 'category_id = 2';
                                       $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                    </optgroup>
                                    <optgroup label="Dental">
                                       <?php
                                       $condition = 'category_id = 3';
                                       $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                    </optgroup>
                                    <optgroup label="Veterinary">
                                       <?php
                                       $condition = 'category_id = 4';
                                       $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                                    </optgroup>
                                 </select>
                              </div>
                           <label>in</label>
                           <input type="text" placeholder="Cep" name="docZip" id="doc-zip">
                        </fieldset>
                     </div>

                     <div class="col-md-4 col-sm-4 col-xs-11">
                        <fieldset class="home_search">
                           <label></label>
                           <div class="place-select">
                              <select class="input-block-level" name="insuranceSelect" id="insuranceSelect">
                                 <option value="">Plano de Saúde</option>
                                 <?php $scad->listbox('insurance','id','name','`parent_id`=0','`name` ASC',$selected=NULL); ?>
                              </select>
                           </div>
                           <div id="subInsurance" style="display:none;background:transparent;margin-top:25px">
                           <div class='place-select'>

                           <select class="input-block-level" name="subInsuranceSelect" id="subInsuranceSelect"></select>
                           </div>
                           </div>
                           <label></label>
                           <div class="place-select">
                              <select id="srchReason" name="srchReason" class="select2_dr">
                                 <option value="0" class="parent-346">Razão da visita</option>
                                 <option class="parent-346" value="other">Outros </option>
                              </select>
                              <div class="srchReason_other">
                                 <div class="col-md-8 col-sm-8 col-xs-8 padding-0">
                                    <input type="text" style="" name="srchReason1" id="srchReasontxt" placeholder="Reason for visit">
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="smalbut" style="display: block;">Opções</div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </div>

                     <div class="col-md-4 col-sm-4 col-xs-11">
                        <fieldset class="home_search">
                           <label></label>
                           <div class="place-select">
                              <select id="srchLanguage" name="language" class="select2_dr">
                                 <option value="0">Selecione Idioma</option>
                                 <?php $scad->listbox('languages','id','name',$condition=NULL,'`name` ASC',$selected=NULL);?>
                              </select>
                           </div>
                           <label></label>
                           <div class="place-select">
                              <select class="select2_dr" name="gender" id="gender">
                                 <option value="0">Genero do Médico</option>
                                 <option value="1">Homem</option>
                                 <option value="2">Mulher</option>
                              </select>
                           </div>
                        </fieldset>
                     </div>

                  </div>
                  <div class="row">
                     <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12">
                        <div class="finddoc" id="findDoctorBtn" style='cursor:pointer'>
                           <h4>Buscar</h4>
                        </div>
                     </div>
                  </div>
               
               </form>
            </div>


         </div>
      </div>
   </div>
<div class="banner">

</div>

<div class="container">
<div class="healthcare">
<h1>CUIDADOS MÉDICOS À SUA DEMANDA!</h1>
<p>Encontre um médico ou dentista nas proximidades e reserve uma consulta instantaneamente. E é grátis! </p>
<h2>CARACTERÍSTICAS</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<ul>
<li><a>Veja um mapa de médicos em seu plano de sáude.</a></li>
<li><a>Leia as avaliações dos pacientes para ajudá-lo a escolher o médico certo.</a></li>
<li><a>Veja os horários disponíveis de qualquer médico e clique para reservar!</a></li>

</ul>
<h2>FAÇA O DOWNLOAD DO APP</h2>
</div>
</div>

<div class="mobilehand">
<img src="<?php echo WEB_ROOT?>service/public/images/images/mobilehand.jpg" style="width:100%;background-size:cover;background-position:100%;">
<div class="container">

</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="apple">
<div class="apple-1">
<a href="#"><img src="<?php echo WEB_ROOT?>service/public/images/images/apple.png"></a>
</div>
<div class="apple-2">
<a href="#"><img src="<?php echo WEB_ROOT?>service/public/images/images/google_play.png"></a></div>
</div>
</div> 
<div class="col-md-8"></div>
</div>  

<?php include(APP_PATH."service/ui/common/footer.php"); ?>
