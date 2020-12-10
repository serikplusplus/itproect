<div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page setNewCategori"  >
                    <div class="title-page">
                        <h3>Добавление Товара</h3>
                    </div>
                    <form id="addProduct" class="form-customer comment-form contact-form  newletter-form" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Название</label>
                                    <input type="text" name="itemName" id="itemName" class="form-control" value="">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>Цена</label>
                                    <input type="text" name="itemPrice" id="itemPrice" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>Категория</label>
                                    <select class="form-control form-account" id="itemCat" name="itemCat">
                                        <option value="-1">...</option>
                                        {foreach $rsCategori as $item}
                                            <option value="{$item['id']}">{$item['name']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>Фото(до 3 фото)</label>                                   
                                    <input class="form-control" id="real-file" type="file" multiple name="filename" style="display: none;">
                                    <span class="form-span" id="foto-upload">Выберите файл</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Описание</label>
                                    <textarea name="itemDesc" id="itemDesc" tabindex="2" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-check" style="text-align: center;">
                            <button type="submit" class="btn-login hover-white addNewProduct">Добавить</button> 
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div>
</div>