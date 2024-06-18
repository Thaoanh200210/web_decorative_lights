document.getElementById("delete_button").addEventListener("click", function(event){
    event.preventDefault();
    if(confirm("Are you sure you want to delete this item?")){
        // Run the delete routine
    }
});

if(confirm("Are you sure you want to delete this item?")){
    $.ajax({
        url:"delete_script.php",
        type:"post",
        data:{
            id: item_id
        },
        success: function(response) {
            if(response=="success"){
                //Do something like removing the item from the page
            }
        }
    });
}