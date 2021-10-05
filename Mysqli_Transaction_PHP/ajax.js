$(document).ready(function()
{
    $("#submit").click(function(e){
        e.preventDefault();
        var name=$('#name').val();
        var email=$('#email').val();
        $.ajax({
            type:"POST",
            url:'insert.php',
            data:{
                name:name,
                email:email
            }
        }).done(function(msg)
        {
            $("#result1").html(msg);
        }).fail(function(msg)
        {   
            $("#result2").html(msg);
        })
    });
});



//for paginatipn
$(document).ready(function()
{
    load_data();
    function load_data(page)
    {
        $.ajax({
            url:'read.php',
            method:'POST',
            data:{
                page:page
            },
            success:function(data)
            {
                $("#pagination-data").html(data);
            }
        })
    }
    $(document).on('click','.pagination_link',function()
{
    var page=$(this).attr("id");
    load_data(page);
    // console.log(page);
});
});

