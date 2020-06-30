$(document).ready(function(){
    $("#button").click(function(){
        let name = $("#content").val();
        // alert(name);
        $.ajax({
            url:"content.php",
            type:"POST",
            catch:false,
            data:{n:name},
            error:function(jqXHR,textStatus,errorTHrown){
                alert(textStatus+"or"+errorTHrown)
            },
            success:function(data){
                $(".show").html(data);
             
            }
        })
    })

    $(".subfile").click(function(){
     var file = $(".subfile").val();
   
      $.ajax({
       url:"content2.php",
       type:"POST",
       catch:false,
       data:{f:file},
       success:function(data){
        $(".show").html(data);
       }



      })





    })

//   $("#Showall").click(function(){
//         let name = $("#content").val();
//         // alert(name);
//         $.ajax({
//             url:"content2.php",
//             type:"POST",
//             data:{n:name},
//             error:function(jqXHR,textStatus,errorTHrown){
//                 alert(textStatus+"or"+errorTHrown)
//             },
//             success:function(data){
//                 $(".show").html(data);
//             }
//         })
//     })
})
