<?php
require_once 'hed.php';
require_once 'header.php';
?>


    <div class=" container w-100 h-100 d-flex justify-content-center align-items-center  ">
        <div class= " card d-flex flex-row justify-content-center align-items-center div-signup shadow border-0 w-100 h-75 ">

            <div class="w-50 h-100 bg-info  card border px-5 py-4 div-login" >
                <h1 class="mt-5 text-center text-white">Welcome user</h1>
                <p class="text-center text-white py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit
                    . Aut atque reprehenderit repudiandae sed neque dolorem!</p>

                    <div class="d-flex flex-column align-items-center gap-3">
                    <button type="submit" class="btn bg-white text-info rounded-pill px-3">SIGNUP WITH GOOGLE</button>
                    <button type="submit" class="btn bg-white text-info rounded-pill px-3">SIGNUP WITH Facebook</button>
                    </div>
            </div>

            <form class="card border-0 w-50 d-flex p-2 px-5">
                
                    <span class="fs-2 text-center pb-4">SIGN UP</span>

                <div class="mb-3">
                    <!-- <label for="username" class="form-label">Username</label> -->
                    <input type="name" class="form-control" id="username" placeholder="Username" aria-describedby="emailHelp">
                    
                </div>
                
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                    <input type="email" class="form-control" id="email" placeholder="Email"  aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPassword1" class="form-label">password</label> -->
                    <input type="password" class="form-control" id="password" placeholder="Password" >
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPassword1" class="form-label">verify password</label> -->
                    <input type="password" class="form-control" id="password2" placeholder="Password" >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-border-comcech ">SIGN UP</button>
                <span class="pt-3">Already have an account. <a class="text-info" href="#">SIGN IN</a>?</span>
            </form>
        </div>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">     </script>   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"     integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"     crossorigin="anonymous"></script>

</main>