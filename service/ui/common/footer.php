<style>
.find_foot{
	cursor:pointer;
	}
	.zip_foot{
	cursor:pointer;
	}
	.spcl_foot{
	cursor:pointer;
	}


</style>
<div class="load_modal"><!-- Place at bottom of page --></div>
<div class="footer">
       <!--   <div class="col-md-2">
                    <h2 class="heading">AGENDA MAIS</h2>
                      <div class="bookmy">
                    <ul>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/abouttt.png"><a href="<?php echo WEB_ROOT?>index.php/About">SOBRE</a></li>
                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/man.png"><a href="<?php echo WEB_ROOT?>index.php/Contact">CONTATO</a></li>
                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/carer.png"><a href="<?php echo WEB_ROOT?>index.php/Careers">CARRERAS</a></li>
                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/ans.png"><a href="<?php echo WEB_ROOT?>index.php/terms">TERMOS</a></li>
                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/question.png"><a>FAQS</a></li>
                          <li><img src="<?php echo WEB_ROOT?>service/public/images/images/bloge.png"><a>BLOG</a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/doc.png"><a>BLOG MÉDICO</a></li>
                    </ul>
                </div> 
                  </div>-->
                    <form style="margin-top:15px;display:none" id="hiddenform">
                  <div class="styled-selected">
                     <select name="docSpeciality" id="docSpeciality_foot">
                        <optgroup label="All">
                           <option value="" style="text-transform:unset;">Selecione especialidade</option>
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
                  <div class="hme_txtfm"> Em </div>
                  <input type="text" placeholder="Enter your Zip" name="docZip" id="doc-zip-foot" class="input-block-level" style="min-height:30px;" >
                  <div class="hme_txtfm"> Quem participa </div>
                  <div class="styled-selected">
                     <select class="input-block-level" name="insuranceSelect" id="insuranceSelect">
                        <option value="">Plano de saúde</option>
                        <?php $scad->listbox('insurance','id','name','`parent_id`=0','`name` ASC',$selected=NULL); ?>
                     </select>
                  </div>
                  <div id="loading" style="display: none;    height: 30px;    margin: 11px 0 7px;"><img style=""  src="<?php echo WEB_ROOT?>service/public/images/loading.gif" /></div>
                  <div id="subInsurance" class="styled-selected" style="display:none;">
                     <select class="input-block-level" name="subInsuranceSelect" id="subInsuranceSelect"></select>
                  </div>
                  <div class="styled-selected">
                     <select id="srchReason" name="srchReason" class="select2_dr">
                        <option value="0" class="parent-346">Razão da visita</option>
                        <option value="1" class="parent-346">Problemas Auditivos </option>
                        <option value="2" class="parent-346">Doença de Orelha</option>
                        <option value="3" class="parent-346">Tonturas / Vertigem</option>
                        <option value="4" class="parent-346">Infecção de Ouvido</option>
                        <option value="5" class="parent-346">Avaliação para Implante Coclear</option>
                        <option value="6" class="parent-346">Teste auditivo</option>
                        <option value="7" class="parent-346">Esclerose Multipla</option>
                        <option value="8" class="parent-346">História familiar de perda auditiva</option>
                        <option value="9" class="parent-346">Audiologia Pediatrica</option>
                        <option value="10" class="parent-346">Problema de equilíbrio</option>
                        <option value="11" class="parent-346">Problema com o aparelho auditivo</option>
                        <option value="12" class="parent-346">Acidente vascular encefálico</option>
                        <option value="13" class="parent-346">Audição de Ataque de Tumor (Neuroma Acústico, Meningioma, Astrocytoma)</option>
                     </select>
                  </div>
                  <div class="styled-selected">
                     <select id="srchLanguage" name="language" class="select2_dr">
                  <option value="0">Idioma</option>
                  <?php $scad->listbox('languages','id','name',$condition=NULL,'`name` ASC',$selected=NULL);?>
                     </select>
                  </div>
                  <div class="styled-selected">
                     <select class="select2_dr" name="gender" id="gender">
                        <option value="0">Genero Médico</option>
                        <option value="1">Homem</option>
                        <option value="2">Mulher</option>
                     </select>
                  </div>
                  <div  id="findDoctorBtn" class="findDoctors">Buscar </div>
               </form>
            <div class="col-md-5">
                     <h2 class="heading1">NOSSA LOCALIZAÇÃO</h2>
                <div class="footer-list">
                
                        
                       <p>Faça agendamentos em qualquer lugar, a partir do</p>
                        <p>seu smartphone, com o nosso aplicativo móvel de pontuação.</p>
                    
                    <div class="footer-list2">
                        <ul>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/letterbox.png">    <a>E-MAIL: comercial@girodesenvolvimento.com</a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/phonee.png">   <a>TELEFONE: (46) 98412 1475 </a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/homme.png">    <a>ENDEREÇO: 121, Av. Tupy, Pato Branco -PR </a></li>
                    </ul>
                    </div>
                </div>
                     
                  </div>
            <div class="col-md-3">
                     <h2 class="heading">BUSCAR POR</h2>
                <div class="footer-list">
                    <ul>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/searchBy-name">Nome do Médico</a></li>
                        <li><a href="#">Nome da prática</a></li>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/Procedures">Procedimento</a></li>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/Languages">Idioma</a></li>
                        <li><a  href="<?php echo WEB_ROOT;?>index.php/location">Localização</a></li>
                        <li><a class="find_foot">Hospital</a></li>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/insurance">Plano de saúde</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                     <h2 class="heading">Cidades</h2>
                <div class="footer-list">
                    <ul>
                        <li><a class="zip_foot" id="32701">Pato Branco</a></li>
                        <li><a class="zip_foot" id="32703">Curitiba </a></li>
                      <!--  <li><a class="zip_foot" id="32707">Casselberry </a></li>
                        <li><a class="zip_foot" id="34747">Celebration </a></li>
                        <li><a class="zip_foot" id="33755">Clearwater </a></li>
                        <li><a class="zip_foot" id="34711">Clermont </a></li>
                        <li><a class="city_more1" id="">more... </a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="52801">Davenport </a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32114">Daytona Beach </a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32713">Debary </a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32730">Fern Park</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="33301">Fort Lauderdale</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="34741">Kissimmee</a></li>


                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32746">Lake Mary</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="20175">Leesburg</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32750">Longwood</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32751">Maitland</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32901">Melbourne</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="92093">Ocoee</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="34761">Orange City</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32801">Orlando</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="34758">Poinciana</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32771">Sanford</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="56301">St. Cloud</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="34216">St. Petersburg, Sarasota</a></li>

                        <li class="hi_city1"><a class="zip_foot hi_city1" id="33601">Tampa</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="34777">Winter Garden</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="33880">Winter Haven</a></li>
                        <li class="hi_city1"><a class="zip_foot hi_city1" id="32789">Winter Park</a></li>
                        <li class="hi_city1"><a class="city_less1" id="" style="display:none;cursor:pointer;">less... </a></li>
                        -->
                        </ul>
                </div>
                     
                  </div>
                  <?php
              $result=$scad->getAllData("speciality");
              /*echo "<pre>";
              print_r($result);*/
              $len=count($result);
              ?>
             <div class="col-md-2">
                     <h2 class="heading">ESPECIALIDADES</h2>
                 <div class="footer-list">
                     <ul>
                 <?php
                  for($i=0;$i<$len;$i++){
                     if($i<6){
                     ?>
                        <li><a class="spcl" id='<?php echo $result[$i]['id']; ?>'><?php echo $result[$i]['name']; ?></a></li>
                        <?php }
                  elseif($i==6){?>
                        <li><a class=" more_specl1" id=''>e mais...</a></li>
                  <?php
                        }
                  
                  else{
                     ?>
                     <li class="hi_specl1"><a class="spcl hi_specl1" id='<?php echo $result[$i]['id']; ?>'><?php echo $result[$i]['name']; ?></a></li>
                     <?php }
                     if($i==($len-1)){
                        ?>
                        <li class="less_specl1"><a class=" hi_specl1 less_specl1" id='' style="cursor:pointer">less...</a></li>
                        <?php 
                        }
                  } ?>
                </ul>
                 </div>
                     
                  </div>
        </div>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<!-- blueimp Gallery script -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/main.js"></script>
<!--
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/multiple_resolution.js"></script>
--></body>
</html>

<script>
  $body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});

// Create a clone of the menu, right next to original.

</script>