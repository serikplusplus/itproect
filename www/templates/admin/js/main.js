jQuery(document).ready(function ($) {
    
    $(".js-menubar li .js-plus-icon").on("click", function () {
        $(this).toggleClass('minus');
        $(this).parent().find(".dropdown-menu").slideToggle(function () {
            $(this).next().stop(true).toggleClass('open', $(this).is(":visible"));
        });
    });
    
     $(".js-faq .faq-content .js-plus-icon").on("click", function() {
        $(this).toggleClass('minus');
        $(this).parent().find(".faq-answer").slideToggle(function() {
            $(this).next().stop(true).toggleClass('open', $(this).is(":visible"));
        });
    });

    //Получение данных с формы
    function getData(obj_form)
    {
        var hData = {};
        $('input, textarea, select', obj_form).each(function ()
        {
            if ((this.name && this.value) != "")
            {
                hData[this.name] = this.value;
                //console.log('hData[' + this.name + '] = ' + hData[this.name]);
            }

        });
        return hData;
    };
    
    
    
   //Добавление новой категории товаров 
    $('.setNewCategories').on("click", function (evt)
    {
        evt.preventDefault();
        var postData = getData('#setCategories');
        $.ajax({
            type: 'POST',
            async: false,
            url: "/admin/addnewcat/",
            data: postData,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });

    });
    
    
    //Обновление категорий
 function updateCat(itemId)
    {
       var parentId = $('#parentId_'+ itemId).val();
       var newName = $('#itemName_'+ itemId).val();
       var postDate = {itemId: itemId,parentId:parentId,newName:newName};
       
       
        $.ajax({
            type: 'POST',
            async: false,
            url: "/admin/updatecategory/",
            data: postData,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });

    }
    
    
});


//Обновление категории
function updateCat(itemId)
    {
       var parentId = $('#parentId_'+ itemId).val();
       var newName = $('#itemName_'+ itemId).val();
       var postData = {itemId: itemId,parentId:parentId,newName:newName};
       
       
        $.ajax({
            type: 'POST',
            async: false,
            url: "/admin/updatecategories/",
            data: postData,
            dataType: 'json',
            success: function (data)
            {
                if (data['success'])
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data['message'],
                    })
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: data['message'],
                    })

                }
            }
        });

    };