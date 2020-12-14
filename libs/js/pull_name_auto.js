$(document).ready(function(){
        
    $("#staff_pro_id").change(function(){

      $.ajax({
        url: "ajax_auto.php",
        type: "POST",
        data: 'staff_id=' +$("#staff_pro_id").val()
      })        
      .success(function(result){

        var obj = jQuery.parseJSON(result);

          if(obj == ''){
            $('input[type=text]').val('');
          }else{
            $.each(obj, function(key, inval){
              $("#staff_pro_id").val(inval["staff_id"]);
              $("#staff_pro_name").val(inval["fullname"]);
            });
          }
      });
    });
    
    $("#staff_pro_id2").change(function(){

        $.ajax({
          url: "ajax_auto.php",
          type: "POST",
          data: 'staff_id=' +$("#staff_pro_id2").val()
        })        
        .success(function(result){
    
          var obj = jQuery.parseJSON(result);
    
            if(obj == ''){
              $('input[type=text]').val('');
            }else{
              $.each(obj, function(key, inval){
                $("#staff_pro_id2").val(inval["staff_id"]);
                $("#staff_pro_name2").val(inval["fullname"]);
              });
            }
        });
    });

    $("#staff_pro_id3").change(function(){

        $.ajax({
          url: "ajax_auto.php",
          type: "POST",
          data: 'staff_id=' +$("#staff_pro_id3").val()
        })        
        .success(function(result){
    
          var obj = jQuery.parseJSON(result);
    
            if(obj == ''){
              $('input[type=text]').val('');
            }else{
              $.each(obj, function(key, inval){
                $("#staff_pro_id3").val(inval["staff_id"]);
                $("#staff_pro_name3").val(inval["fullname"]);
              });
            }
        });
    });

    $("#staff_prov_id").change(function(){

        $.ajax({
          url: "ajax_auto.php",
          type: "POST",
          data: 'staff_id=' +$("#staff_prov_id").val()
        })        
        .success(function(result){
    
          var obj = jQuery.parseJSON(result);
    
            if(obj == ''){
              $('input[type=text]').val('');
            }else{
              $.each(obj, function(key, inval){
                $("#staff_prov_id").val(inval["staff_id"]);
                $("#staff_prov_name").val(inval["fullname"]);
              });
            }
        });
    });

    $("#staff_prov_id2").change(function(){

        $.ajax({
          url: "ajax_auto.php",
          type: "POST",
          data: 'staff_id=' +$("#staff_prov_id2").val()
        })        
        .success(function(result){
    
          var obj = jQuery.parseJSON(result);
    
            if(obj == ''){
              $('input[type=text]').val('');
            }else{
              $.each(obj, function(key, inval){
                $("#staff_prov_id2").val(inval["staff_id"]);
                $("#staff_prov_name2").val(inval["fullname"]);
              });
            }
        });
    });

    $("#staff_prov_id3").change(function(){

        $.ajax({
          url: "ajax_auto.php",
          type: "POST",
          data: 'staff_id=' +$("#staff_prov_id3").val()
        })        
        .success(function(result){
    
          var obj = jQuery.parseJSON(result);
    
            if(obj == ''){
              $('input[type=text]').val('');
            }else{
              $.each(obj, function(key, inval){
                $("#staff_prov_id3").val(inval["staff_id"]);
                $("#staff_prov_name3").val(inval["fullname"]);
              });
            }
        });
    });
    
});