<div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page setNewCategori"  >
                    <div class="title-page">
                        <h3>Добавление категории</h3>
                    </div>
                    <form method="post" class="form-customer form-login" id="setCategories">
                        <div class="form-group">
                            <label for="setNewCategoriName">Имя новой категории</label>
                            <input type="text" class="form-control form-account" id="setNewCategoriName" name="setNewCategoriName">
                        </div>
                        <div class="form-group">
                            <label for="setNewCategorieParentId">Является подкатегорией для</label>
                            <select class="form-control form-account" id="setName" name="setNewCategoriParentId">
                                <option value="0">Главная категория</option>
                                {foreach $rsCategories as $item}
                                    <option value="{$item['id']}">{$item['name']}</option>
                                {/foreach}
                            </select>
                        </div>                        
                        <div class="form-check">
                            <button type="submit" class="btn-login hover-white setNewCategories">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div>
</div>
