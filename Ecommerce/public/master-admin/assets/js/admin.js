$(document).ready(function(){
    $("#current-password").keyup(function(){

        var cpass = $(this).val();
        var token =  $('input[name="csrfToken"]').attr('value')
        $.ajaxSetup({
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Csrf-Token', token);
            }
        });
        $.ajax({
            url : 'check-current-pwd',
            method:"POST",
            data :{'cpass' : cpass,"_token": "{{ csrf_token() }}"},
            success :function(response){
                if(response =="false")
                {
                    $("#check-current-password").html("<font color='red'>Current Password is incorrect </font>");
                }else if(response =="true"){
                    $("#check-current-password").html("<font color='green'>Current Password is correct </font>");
                }
            },
            error:function(){
                alert("error");
            }
        })
    });

    // section status 2021-07-01
    //$(".updateSectionStatus").click(function(){
        $(document).on('click',".updateSectionStatus", function(){
        var status = $(this).children("i").attr("status");
        var section_id = $(this).attr("section_id");
        
        $.ajax({
            type:"POST",
            url : 'update-section-status',
            data:{'status':status,'section_id' : section_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#section-"+section_id).html('<i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>');
                }else{
                    $("#section-"+section_id).html('<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>');
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    // category status 2021-07-03
    //$(".updateCategoryStatus").click(function(){
    $(document).on('click',".updateCategoryStatus", function(){
        var status = $(this).children("i").attr("status");
        var category_id = $(this).attr("category_id");
        
        $.ajax({
            type:"POST",
            url : 'update-category-status',
            data:{'status':status,'category_id' : category_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#category-"+category_id).html('<i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>');
                }else{
                    $("#category-"+category_id).html('<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>');
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    // subcategory status 2021-07-03
    //$(".updateSubCategoryStatus").click(function(){
        $(document).on('click',".updateSubCategoryStatus", function(){
        
        var status = $(this).children("i").attr("status");
        var subcategory_id = $(this).attr("subcategory_id");
        
        $.ajax({
            type:"POST",
            url : 'update-subcategory-status',
            data:{'status':status,'subcategory_id' : subcategory_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#subcategory-"+subcategory_id).html('<i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>');
                }else{
                    $("#subcategory-"+subcategory_id).html('<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>');
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    //Append Category Level Info
    $("#section_id").on('change', function(){
        var section_id = $(this).val();
        $.ajax({
            type: "POST",
            url : 'append-subcategories',
            data:{ section_id : section_id},
            success:function(response){
                $("#appendSubCategoriesLevel").html(response);
                $(".select2").select2({
                    theme: 'bootstrap4',
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder'),
                    allowClear: Boolean($(this).data('allow-clear')),
                });
            },error:function(error){
                console.log(error);
            }
        });
    });

    //Sweetalert
    //$(".confirmDelete").click(function(){
        $(document).on('click',".confirmDelete", function(){
        let record = $(this).attr("record");
        let id = $(this).attr('recordid');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
            //   Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            //   )
              window.location.href = "/admin/delete-"+record+"/"+id;
            }
          });
          //return false;
    });

    //PRODUCT  STATUS
     //$(".updateProductStatus").click(function(){
    $(document).on('click',".updateProductStatus", function(){
         updateSubCategoryStatus
        var status = $(this).text();
        var product_id = $(this).attr("product_id");
        
        $.ajax({
            type:"POST",
            url : 'update-product-status',
            data:{'status':status,'product_id' : product_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#product-"+product_id).html("<a class='updateProductStatus' href='javascript:void(0)'>Inactive</a>");
                }else{
                    $("#product-"+product_id).html("<a class='updateProductStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    // Add Product Attribute
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div> <div style="height:10px;"></div> <input type="text" name="size[]" id="size" style="width:120px;" placeholder="Size" value=""/> &nbsp;<input type="text" name="sku[]" id="sku" style="width:120px;" placeholder="SKU" value=""/>&nbsp;<input type="text" name="price[]" id="price" style="width:120px;" placeholder="Price" value=""/>&nbsp;<input type="text" name="stock[]" id="stock" style="width:120px;" placeholder="Stock" value=""/>&nbsp;<a href="javascript:void(0);" class="remove_button">Delete</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

    //ATTRIBUTES STATUS
    //$(".updateAttributeStatus").click(function(){
    $(document).on('click',".updateAttributeStatus", function(){
        var status = $(this).text();
        var attribute_id = $(this).attr("attribute_id");
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // });
        $.ajax({
            type:"post",
            url: " /admin/update-attribute-status",
            data:{'status':status,'attribute_id' : attribute_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#attribute-"+attribute_id).html("Inactive");
                }else{
                    $("#attribute-"+attribute_id).html("Active");
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    //IMAGE STATUS
    //$(".updateImageStatus").click(function(){
    $(document).on('click',".updateImageStatus", function(){
        var status = $(this).text();
        var image_id = $(this).attr("image_id");
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // });
        $.ajax({
            type:"post",
            url: " /admin/update-image-status",
            data:{'status':status,'image_id' : image_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#image-"+image_id).html("Inactive");
                }else{
                    $("#image-"+image_id).html("Active");
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    //BRAND  STATUS
    //$(".updateBrandStatus").click(function(){
    $(document).on('click',".updateBrandStatus", function(){
        //var status = $(this).text();
        var status = $(this).children("i").attr("status");
        var brand_id = $(this).attr("brand_id");
        
        $.ajax({
            type:"POST",
            url : 'update-brand-status',
            data:{'status':status,'brand_id' : brand_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#brand-"+brand_id).html('<i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>');
                }else{
                    $("#brand-"+brand_id).html('<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>');
                }
            },error:function(error){
                alert("error");
            }
        });
    });

    //  BANNER STATUS 
    $(document).on('click',".updateBannerStatus", function(){
        //var status = $(this).text();
        var status = $(this).children("i").attr("status");
        var banner_id = $(this).attr("banner_id");
        
        $.ajax({
            type:"POST",
            url : 'update-banner-status',
            data:{'status':status,'banner_id' : banner_id},
            success:function(response){
                if(response['status'] == 0)
                {
                    $("#banner-"+banner_id).html('<i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>');
                }else{
                    $("#banner-"+banner_id).html('<i class="fas fa-toggle-on" aria-hidden="true" status="Active"></i>');
                }
            },error:function(error){
                alert("error");
            }
        });
    });
});

