function  change(nc){
    $.ajax(
        {
            type: "POST",
            url: "http://localhost/assets/php/show_users.php?nm="+nc,
            data: {
                nm: nc
            },

        });
}