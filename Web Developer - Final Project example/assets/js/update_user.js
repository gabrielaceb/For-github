

function update_user(id){
    let name = document.getElementById("name").value;
    let study = document.getElementById('prd_brand').value;
    let tip = document.getElementById("tip_ang").value;
    let functia_c = document.getElementById("func_cond").value;
    let functia_e = document.getElementById("func_ex").value;


    $.ajax(
        {
            type: "POST",
            url: "../php/update_user.php",
            data: {ns: name,
                st : study,
                tip_ : tip,
                functia_c_ : functia_c,
                functia_e_ : functia_e,
                id_: id
            },

        });

}

function  delete_user(id){
    $.ajax(
        {
            type: "POST",
            url: "../php/delete_user.php",
            data: {
                id_: id
            },

        });
}