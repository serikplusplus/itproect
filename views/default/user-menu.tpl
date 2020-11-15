<div class="pushmenu pushmenu-left cart-box-container">
    <div class="cart-list">
        <span class="close-left js-close">x</span>


        {if isset($arUser) }         
            <div class="customer-page userBox">                
                <div class="title-page">
                    <h3>Личный кабинет</h3>
                </div>
                <a href="/user/settings/" class="btn link-button create-account hover-black ">Личные данные</a>
                <a href="/user/logout/" class="btn link-button create-account hover-black" id="logout">Выход</a>
            </div>
        {else}
            <div class="customer-page userBox" style="display: none;">                
                <div class="title-page">
                    <h3>Личный кабинет</h3>
                </div>
                <a href="/user/settings/" class="btn link-button create-account hover-black ">Личные данные</a>
                <a href="/user/logout/" class="btn link-button create-account hover-black " id="logout">Выход</a>
            </div>

            <div class="customer-page login "  >
                <div class="title-page">
                    <h3>Вход</h3>
                </div>
                <form method="post" class="form-customer form-login" id="loginUser">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username or email address *</label>
                        <input type="email" class="form-control form-account" id="loginEmail" name="loginEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password *</label>
                        <input type="password" class="form-control form-account" id="loginPassword" name="loginPassword">
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn-login hover-white loginUser">Login</button>
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <span>Remember me</span>
                        </label>
                        <a href="" class="lost-password">Lost your password?</a>
                    </div>
                </form>
                <span class="divider"></span>
                <a href="" class="btn link-button create-account hover-black click-create">Create an account</a>
            </div>


            <div class="customer-page register"  style="display: none;">
                <div class="title-page">
                    <h3>Регистрация</h3>
                </div>
                <form method="post" class="form-customer form-register" id="registerUser">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address *</label>
                        <input type="email" class="form-control form-account" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password1">Password *</label>
                        <input type="password" class="form-control form-account" id="password1" name="password1">
                    </div>           
                    <div class="form-group">
                        <label for="password2">Password *</label>
                        <input type="password" class="form-control form-account" id="password2" name="password2">
                    </div>  
                    <div class="form-check">
                        <button type="submit" class="btn-login btn-register hover-white registerNewUser">Register</button>
                    </div>
                </form>
                <span class="divider"></span>
                <a href="" class="btn link-button create-account hover-black click-login" >Вход</a>
            </div>
        {/if}
    </div>
</div>
