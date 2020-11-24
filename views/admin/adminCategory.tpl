<div class="container">
    <div class="faq js-faq">

        {foreach $rsCategories as $item}
            <div class="faq-content">
                <p class="faq-quest">
                    {$item['name']}
                </p>
                <span class="plus js-plus-icon"></span>
                <div class="faq-answer">
                    <div action="#" class="comment-form contact-form form-customer">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-12">
                                    <label>ID</label>
                                    <input type="text" readonly="readonly" name="id" class="form-control" value="{$item['id']}">
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <label>Название</label>
                                    <input type="edit" name="itemName_{$item['id']}" id="itemName_{$item['id']}" class="form-control" value="{$item['name']}">
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <label>Родительская категория</label>
                                    <select class="form-control form-account" id="parentId_{$item['id']}" name="setNewCategoriParentId">
                                        <option value="0">Главная категория</option>
                                        {foreach $rsMainCategories as $mainitem}
                                            <option value="{$mainitem['id']}" {if $item['parent_id'] == $mainitem['id']}selected{/if}>{$mainitem['name']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        </div>
                                    <button class="btn btn-submit ver2" onclick="updateCat({$item['id']})" >Сохранить</button>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>