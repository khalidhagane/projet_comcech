<?php
require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>


    <div class=" container w-75 pt-5 d-flex justify-content-center align-items-center  ">
        
        <div class= " card d-flex flex-row justify-content-center align-items-center div-signup shadow border-0 w-100 vh-75 mt-3  ">

            <div class=" d-none  d-md-block  w-50 h-100 bg-info  card border px-5 py-4 div-login   d-none d-md-block " style="width: 50px;" >
                <h1 class="mt-5 text-center text-white ">Welcome user</h1>
                <p class="text-center text-white py-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Aut atque reprehenderit repudiandae sed neque dolorem!
                </p>
                    <div class="d-flex flex-column align-items-center gap-3">
                    <button type="submit" class="btn bg-white text-info rounded-pill px-3">SIGNIN WITH GOOGLE</button>
                    <button type="submit" class="btn bg-white text-info rounded-pill px-3">SIGNIN WITH Facebook</button>
                    </div>
            </div>
            

            <form method="POST" action="<?= URLROOT ?>/LoginController/signin" class="card border-0 w-50 form-signup d-flex p-2  px-md-5">
            
                    <span class="fs-2 text-center pb-4">SIGN IN</span>
                    <?php
                    if(isset($_SESSION['error_empty'])){
                        echo "<div class='alert alert-danger alert-dismissible fade show ' role='alert'>".$_SESSION['error_empty']."
    
    
                                <button type='button' class='btn-close m-auto' data-bs-dismiss='alert'>
                                </button>
                        </div>";
                        unset($_SESSION['error_empty']);
                    }
                    if(isset($_SESSION['error_wrong'])){
                        echo "<div class='alert alert-danger alert-dismissible fade show ' role='alert'>".$_SESSION['error_wrong']."
    
    
                                <button type='button' class='btn-close m-auto' data-bs-dismiss='alert'>
                                </button>
                        </div>";
                        unset($_SESSION['error_wrong']);
                    }  
                    ?>
                
                <div class="mb-3">
                    <input type="text" name="email_phone" class="form-control" id="text" placeholder="Email ou Telephone"  >
                    
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox"  name="remember" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <input type="submit" name="submit" value="SIGN IN" class="btn btn-border-comcech " >
                <span class="pt-3">Already have an account. <a class="text-info" href="<?=URLROOT?>/pages/signup">SIGN UP</a>?</span>
            </form>
        </div>
    </div>
    
</main>


<?php
require_once APPROOT.'/views/inc/footer_script.php';
?>