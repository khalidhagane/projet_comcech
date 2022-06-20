
<?php
require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

<div class=" container w-75 pt-5  d-flex justify-content-center align-items-center  ">
        <div class= " card d-flex flex-row justify-content-center align-items-center div-signup shadow border-0 w-100 h-75   ">

            <div class=" d-none  d-md-block  w-50 h-100 bg-info  card border px-5 py-5 div-login    " style="width: 50px;" >
                <h1 class="mt-5 text-center text-white ">Welcome user</h1>
                <p class="text-center text-white py-3 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Aut atque reprehenderit repudiandae sed neque dolorem!
                </p>
                    <div class="d-flex flex-column align-items-center gap-3">
                    <button type="submit" class="btn bg-white text-info rounded-pill px-3">SIGNUP WITH GOOGLE</button>
                    <button type="submit" class="btn bg-white text-info rounded-pill px-3">SIGNUP WITH Facebook</button>
                    </div>
            </div>

            <form method="POST"  action="<?= URLROOT ?>/LoginController/addclient_signup" class="card border-0 w-50 form-signup d-flex p-2 px-md-5">
                    <span class="fs-2 text-center pb-4">SIGN UP</span>

                <div class="mb-3 ">
                    <input type="text" name="username" class="form-control  " id="username" placeholder="Username" >
                </div>
                
                <div class="mb-3">
                    <input type="text" name="email_phone" class="form-control" id="text" placeholder="Email ou telephone" >
                    
                </div>
                <div class="mb-3">
                    <input type="password1" name="password1" class="form-control" id="password1" placeholder="Password" >
                </div>
                <div class="mb-3">
                    <input type="password2" name="password2" class="form-control" id="password2" placeholder=" Password" >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <input type="submit" class="btn btn-border-comcech " value="SIGN UP">
                <span class="pt-2">Already have an account. <a class="text-info" href="<?=URLROOT?>/pages/signin">SIGN IN</a>?</span>
            </form>
        </div>
    </div>
    

</main>

<?php
require_once APPROOT.'/views/inc/footer_script.php';
?>