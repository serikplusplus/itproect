<div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page settings"  >
                    <div class="title-page">
                        <h3>Личные данные</h3>
                    </div>
                    <form method="post" class="form-customer form-login" id="updateUser">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email адрес</label>
                            <input type="email" class="form-control form-account" id="setEmail" name="setEmail" value="{$arUser['email']}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" class="form-control form-account" id="setName" name="setName" value="{$arUser['name']}">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Номер телефона</label>
                            <input type="phone" class="form-control form-account" id="setPhone" name="setPhone" value="{$arUser['phone']}">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Адрес</label>
                            <input type="text" class="form-control form-account" id="setAdress" name="setAdress" value="{$arUser['adress']}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Новый пароль</label>
                            <input type="password" class="form-control form-account" id="setPasswordNew" name="setPasswordNew">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Повтор пароля</label>
                            <input type="password" class="form-control form-account" id="setPasswordNew2" name="setPasswordNew2">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Текущий пароль</label>
                            <input type="password" class="form-control form-account" id="setPassword" name="setPassword">
                        </div>
                        <div class="form-check">
                            <button type="submit" class="btn-login hover-white updateUser">Изменить</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div>