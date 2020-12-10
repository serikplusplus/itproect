<div class="main-content space-padding-tb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="customer-page settings"  >
                    <div class="title-page">
                        <h3>Изминение продукта</h3>
                    </div>
                    <form id="changeProduct" class="form-customer comment-form contact-form  newletter-form" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control form-account" id="itemName" name="itemName" value="{$rsProduct['name']}">
                            <input type="hidden" class="form-control form-account" id="itemId" name="itemId" value="{$rsProduct['id']}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input type="text" class="form-control form-account" id="itemPrice" name="itemPrice" value="{$rsProduct['price']}">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea class="form-control form-account" id="itemDesc" name="itemDesc" >{$rsProduct['description']}</textarea>
                        </div> 
                        <div class="form-group">
                            <label for="real-file">Главное фото</label>
                            <input class="form-control" id="real-file" type="file"  name="filename1" style="display: none;">
                            <p class='img-changeproduct'><img src="/images/products/{$rsProduct['image']}" alt="photo" class="img-reponsive"></p>
                            <span class="form-span" id="foto-upload">Выберите файл</span>
                        </div>
                        <div class="form-group">
                            <label for="real-file2">Фото 1</label>
                            <input class="form-control" id="real-file2" type="file"  name="filename2" style="display: none;">
                            <p class='img-changeproduct'><img src="/images/products/{$rsProduct['image1']}" alt="photo" class="img-reponsive"></p>
                            <span class="form-span" id="foto-upload2">Выберите файл</span>
                        </div>
                        <div class="form-group">
                            <label for="real-file3">Фото 2</label>
                            <input class="form-control" id="real-file3" type="file"  name="filename3" style="display: none;">
                            <p class='img-changeproduct'><img src="/images/products/{$rsProduct['image2']}" alt="photo" class="img-reponsive"></p>
                            <span class="form-span" id="foto-upload3">Выберите файл</span>
                        </div> 
                        <div class="form-check">
                            <button type="submit" class="btn-login hover-white updateProduct">Изменить</button>
                            <button type="submit" class="btn-login hover-white deleteProduct">Удалить</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
</div>