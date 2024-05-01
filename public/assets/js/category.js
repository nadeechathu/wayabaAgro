// Add new category scripts ============================

function getMainCategories(id) {

    let categoryLevel = document.getElementById('category_level' + id).value;
    console.log('val === ', categoryLevel);
    let categorySelector = document.getElementById('categories' + id);
    let categorySelectorDiv = document.getElementById('category_for_sub_category' + id);

    if (categoryLevel !== "1") {

        let url = '';

        if (categoryLevel == "2") {
            url = "/admin/category/main-categories";
        } else {
            url = "/admin/category/sub-categories";
        }

        $.ajax({
            type: "post",
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                categoryLevel: categoryLevel
            },
            success: function(res) {

                console.log(res);
                let html = '';
                if (res.status) {
                    console.log("aaaaaa");

                    if (categoryLevel == "2") {

                        for (let i = 0; i < res.categories.length; i++) {
                            html = html + "<option value='" + res.categories[i].id + "'>" +
                                res.categories[i].category_name + "</option>";
                        }

                    } else {

                        for (let i = 0; i < res.categories.length; i++) {
                            html = html + "<option value='" + res.categories[i].id + "'>" +
                                res.categories[i].sub_category_name + "</option>";
                        }

                    }




                    categorySelector.innerHTML = html;
                    categorySelectorDiv.style.display = 'block';

                } else {
                    categorySelector.innerHTML = '';
                    categorySelectorDiv.style.display = 'none';
                }

            },
            error: function(data) {
                // console.log('Error:', data);
                toastr.error(data);
            }
        });
    } else {
        categorySelector.innerHTML = '';
        categorySelectorDiv.style.display = 'none';
    }


}

//end
var x = 1;

function validateImage(id, event) {
    let imagePreview = document.getElementById('img-result-output' + id);

    if (imagePreview != null) {

        imagePreview.remove();
    }

    let validationError = document.getElementById('img-validation-result' + id);
    validationError.innerHTML = '';

    var isValid = (/\.(gif|jpe?g|png)$/i).test(event.target.value);
    if (!isValid) {
        validationError.innerHTML = "Only gif, jpg, jpeg, png image types are allowed."
    } else {
        let image = document.getElementById('image' + id);

        if (image != null) {
            var output = document.createElement('img');
            output.id = 'img-result-output' + id;
            output.style.cssText = 'width:100%';
            output.src = URL.createObjectURL(event.target.files[0]);
            image.after(output);
        }

    }
}
//end add new category scripts ============================