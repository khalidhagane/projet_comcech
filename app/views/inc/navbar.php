<main >
    <nav class="navbar navbar-expand-lg py-0 color_comcech navbar-light bg-light">

        <div class="container-fluid   ">
            <a class="navbar-brand w-90" href="<?=URLROOT?>/pages/index">
                <img src="<?= URLROOT;?>/img/images/log.png" alt="brand" style=" height: 45px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark hover-navbar" aria-current="page" href="#"><i class="fas fa-home me-1"></i>Home</a>
                    </li> -->
                   
                    <li class="nav-item ">
                        <a class="nav-link text-dark hover-navbar " href="<?=URLROOT?>/pages/panier"><i class="fas fa-shopping-cart me-1 "></i>Panier</a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link  dropdown-toggle text-dark hover-navbar " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class=" fas fa-list-alt me-1"></i>Produits</a>

                        <ul class="dropdown-menu drop-navbar  " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="<?=URLROOT?>/pages/produits_glopale">Produits</a></li>
                            <li><a class="dropdown-item fw-bolder text-white hover-drop" href="#">Outélle de soudage</a></li>
                            <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="#">Moteur éléctrogéne</a></li>
                            <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="#">Aire compréseure</a></li>
                            <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="#">Les échelle</a></li>
                            <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="#">Echafoudage metalique</a></li>
                            <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="#">Outille de massonié</a></li>

                            <!-- <li><a class="dropdown-item fw-bolder text-white hover-drop" href="#">traveux public</a></li> -->
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">traveux public</a></li> -->
                        </ul>
                        <?php 
                        
                        if(empty($_SESSION['username']))
                        {
                           echo' <li class="nav-item dropdown ">
                                <a class="nav-link  dropdown-toggle text-dark hover-navbar " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user me-1"></i>Login</a>
                                <ul class="dropdown-menu drop-navbar  " aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item  fw-bolder text-white hover-drop" href="'.URLROOT.'/pages/signin"> <i class="far fa-sign-in"></i> Signin</a></li>
                                    <li><a class="dropdown-item fw-bolder text-white hover-drop" href="'.URLROOT.'/pages/signup"> <i class="far fa-user-plus"></i> Signup</a></li>
                                </ul>   
                            </li>';
                        }
                        ?>
                    </li>
                    <li class="nav-item ">
                        <?php 
                        
                        if(isset($_SESSION['username']))
                        {
                            echo '<a class="nav-link text-dark hover-navbar" aria-current="page" href="'.URLROOT.'/LoginController/logout">  <i class="fas fa-sign-out-alt"></i> Logout</a>';
                        }
                       ?>
                    </li>
                </ul>

            </div>
        </div>
    </nav>