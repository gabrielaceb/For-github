function add_pr() {

    let name = document.getElementById("name").value;
    let price = document.getElementById("price").value;

    let description = document.getElementById('description').value;


    let categories = document.getElementById("categories").value;
    let brands = document.getElementById("brands").value;

    let key_words = document.getElementById("key_words").value;
    let image = document.getElementById("image-uploadify");

    $.ajax(
        {
            type: "POST",
            url: "../admin_area/includes/db.php",
            data: {name_: name,
                    price_: price,
                    description_ : description,
                    categories_: categories,
                    brands_ : brands,
                    key_words_:key_words

                    },
            success: function(data) { // data is the response from your php script
                // This function is called if your AJAX query was successful
                alert("Response is: " + data);
                window.open("/admin_area/productlist.php","_self")
            },
            error: function() {
                // This callback is called if your AJAX query has failed
                alert("Error!");
            }

        });


}

function del_pro(prd_id){

    $.ajax(
        {
            type: "POST",
            url: "assets/php/delete_product.php",
            data: {id_: prd_id

            },
            success: function(data) { // data is the response from your php script
                // This function is called if your AJAX query was successful
                alert("Deleted" );
                window.open("/admin_area/productlist.php","_self")
            },
            error: function() {
                // This callback is called if your AJAX query has failed
                alert("Error!");
            }

        });

}