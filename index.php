<?php

include_once('nNdbCon/nnCon.php'); 

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
   <head>
      <script src="js/color-modes.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.112.5">
      <title>Registration form</title>
      <link rel="canonical" href="#">
      <script src="js/jquery.min.js"></script>
      <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="img/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="img/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="js/manifest.json">
      <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#712cf9">
      <link rel="icon" href="img/favicon.ico">
      <meta name="theme-color" content="#712cf9">
      <style>
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
         .b-example-divider {
         width: 100%;
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
         }
         .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
         }
         .bi {
         vertical-align: -.125em;
         fill: currentColor;
         }
         .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
         }
         .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
         }
         .btn-bd-primary {
         --bd-violet-bg: #712cf9;
         --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
         --bs-btn-font-weight: 600;
         --bs-btn-color: var(--bs-white);
         --bs-btn-bg: var(--bd-violet-bg);
         --bs-btn-border-color: var(--bd-violet-bg);
         --bs-btn-hover-color: var(--bs-white);
         --bs-btn-hover-bg: #6528e0;
         --bs-btn-hover-border-color: #6528e0;
         --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
         --bs-btn-active-color: var(--bs-btn-hover-color);
         --bs-btn-active-bg: #5a23c8;
         --bs-btn-active-border-color: #5a23c8;
         }
         .bd-mode-toggle {
         z-index: 1500;
         }
      </style>
      <!-- Custom styles for this template -->
      <link href="css/checkout.css" rel="stylesheet">
   </head>
   <body class="bg-body-tertiary">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
         <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
         </symbol>
         <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
         </symbol>
         <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
         </symbol>
         <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
         </symbol>
      </svg>
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
         <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
               <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#sun-fill"></use>
                  </svg>
                  Light
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#moon-stars-fill"></use>
                  </svg>
                  Dark
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#circle-half"></use>
                  </svg>
                  Auto
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
         </ul>
      </div>
      <div class="container">
         <main>
            <div class="py-5 text-center">
               <!--<img class="d-block mx-auto mb-4" src="img/bootstrap-logo.svg" alt="" width="72" height="57">-->
               <h2>Registration form</h2>
            </div>
            <div class="col-md-7 col-lg-8">
               <h4 class="mb-3">Add Your Details</h4>
               <form class="needs-validation" action="indexnN.php"  method="POST" novalidate>
                  <div class="row g-3">
                     <div class="col-sm-12">
                        <label for="nNidNumber" class="form-label">Id number</label>
                        <input type="text" class="form-control" name="nNidNumber" id="nNidNumber" placeholder="" value="" maxlength="12" required>
                        <div id="id_result"></div>
                        <div class="invalid-feedback">
                           Valid Id number is required.
                        </div>
                     </div>
                     <script>
                        //javascript function
                        
                        $(document).ready(function() {
                          
                            $('#nNidNumber').on('keyup',
                                function() { //function is run with the keyup of the keyboard
                                    var idNumber = $(this).val().trim();
                                    if (idNumber != '') {
                                        $.ajax({
                                            url: 'indexIDajaxnN.php',
                                            type: 'post',
                                            data: {
                                              idNumber: idNumber
                                            },
                                            success: function(response) {
                                                $('#id_result').html(response);
                                            }
                                        });
                                    } else {
                                        $("#id_result").html("");
                                    }
                                });
                        });
                     </script>
                     <div class="col-sm-12">
                        <label for="nNsalutation" class="form-label">Salutation</label>
                        <input type="text" class="form-control" name="nNsalutation" id="nNsalutation" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid salutation is required.
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label for="nNfirstName" class="form-label">First name</label>
                        <input type="text" class="form-control" name="nNfirstName" id="nNfirstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid first name is required.
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label for="nNlastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="nNlastName" id="nNlastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid last name is required.
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <label for="nNdob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="nNdob" id="nNdob" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid date of birth is required.
                        </div>
                     </div>
                     <div class="col-md-5">
                        <label for="nNGender" class="form-label">Gender</label>

                        <select class="form-select" name="nNGender" id="nNGender" required>
                           <option value="">Select...</option>
                           <?php
                           $userGender="SELECT * FROM emp_set_gender";
                           $userSelectGenderExe=mysqli_query($nnConnString,$userGender);
                           if(mysqli_num_rows($userSelectGenderExe)>0){
                              while($rowGender=mysqli_fetch_assoc($userSelectGenderExe)){
                              echo "<option value='".$rowGender["gen_rwId"]."'>".$rowGender["gen_nme"]."</option>";
                           }
                     
                        }
                           ?>
                        </select>
                        <div class="invalid-feedback">
                           Please select a gender.
                        </div>
                     </div>
                     <div class="col-md-4">
                        <label for="nNMarriedUnmarry" class="form-label">Marital Status</label>
                        <select class="form-select" name="nNMarriedUnmarry" id="nNMarriedUnmarry" required>
                        <option value="">Select...</option>
                           <?php
                           $userGender="SELECT * FROM emp_set_mrtlsts";
                           $userSelectGenderExe=mysqli_query($nnConnString,$userGender);
                           if(mysqli_num_rows($userSelectGenderExe)>0){
                              while($rowGender=mysqli_fetch_assoc($userSelectGenderExe)){
                              echo "<option value='".$rowGender["mrtl_rwId"]."'>".$rowGender["mrtl_nme"]."</option>";
                           }
                     
                        }
                           ?>
                        </select>
                        <div class="invalid-feedback">
                           Please provide a valid state.
                        </div>
                     </div>
                     <div class="col-md-3">
                        <label for="nNBloodGroup" class="form-label">Blood Group</label>
                        <select class="form-select" name="nNBloodGroup" id="nNBloodGroup" required>
                        <option value="">Select...</option>
                           <?php
                           $userGender="SELECT * FROM emp_set_bld";
                           $userSelectGenderExe=mysqli_query($nnConnString,$userGender);
                           if(mysqli_num_rows($userSelectGenderExe)>0){
                              while($rowGender=mysqli_fetch_assoc($userSelectGenderExe)){
                              echo "<option value='".$rowGender["Bld_RwId"]."'>".$rowGender["Bld_Nme"]."</option>";
                           }
                     
                        }
                           ?>
                        </select>
                        
                     </div>
                     <div class="col-md-4">
                        <label for="nNrel" class="form-label">Religion</label>
                        <input type="text" class="form-control" name="nNrel" id="nNrel" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid Hobbies required.
                        </div>
                     </div>
                     <div class="col-md-4">
                        <label for="nNnationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" name="nNnationality" id="nNnationality" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid Hobbies required.
                        </div>
                     </div>
                     <div class="col-md-4">
                        <label for="nNhobbies" class="form-label">Hobby</label>
                        <input type="text" class="form-control" name="nNhobbies" id="nNhobbies" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           Valid Hobbies required.
                        </div>
                     </div>
                  </div>
                  </br>
                  </br>

                  <div class="row">
                  <div class="col-sm-12">
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Add Details</button>
                  </div></div>

                     
                  </br>
               </form>
              
                     


                     </br>

               <div class="row">
               <div class="col-sm-4">
               <a href="nnViewData.php"><button class="w-90 btn btn-primary btn-lg" type="submit" >View All Details</button></a>
                     </div>
                  <div class="col-sm-4">
                  <a href="update.php"><button class="w-90 btn btn-primary btn-lg" type="submit">&nbsp;&nbsp;&nbsp;Edit Details&nbsp;&nbsp;&nbsp;</button></a>
                     </div>
                     <div class="col-sm-4">
                     <a href="records-table.php"><button class="w-90 btn btn-primary btn-lg" type="submit" >&nbsp;&nbsp;&nbsp;Delete Details&nbsp;&nbsp;&nbsp;</button></a>
                     </div></div>






      </div>
      </main>
      <footer class="my-5 pt-5 text-body-secondary text-center text-small">
         <p class="mb-1">&copy; 2023 Navindya Denipitiya</p>
      </footer>
      </div>
      <script src="js/bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <script src="js/checkout.js"></script>
   </body>
</html>
