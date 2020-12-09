$(document).ready(function () {
  var counter = 2;

  $("#addButton-refer").click(function () {
    if (counter > 3) {
      alert("Only 3 textboxes allow");
      return false;
    }

    var newRow_Refer = $(document.createElement("div")).attr(
      "class", 'row').attr("id", 'TextBox-Refer-Div' + counter);


    newRow_Refer
      .after()
      .html(
          '<div class="col-3 column-name">'+
          '</div>'+
          '<div class="col-2 column-box">'+
          '<input type="text" id="refer_id'+
          counter +
          '" name="refer_id'+
          counter+
          '" class="form-control"'+
          'maxlength="10"'+
          'placeholder="กรอกตัวเลข"'+
          'value="" />' +
          '</div>'+
          '<div class="col-2 column-box">'+
          '<select class="form-control" id="refe_year'+
          counter+
          '" name="refer_year'+
          counter+
          '"><br>'+
          '<option value="2560">2560</option><br>'+
          '<option value="2561">2561</option><br>'+
          '<option value="2562">2562</option><br>'+
          '<option value="2563">2563</option><br>'+
          '<option value="2564">2564</option><br>'+
          '<option value="2565">2565</option><br>'+
          '<option value="2566">2566</option><br>'+
          '<option value="2567">2567</option><br>'+
          '<option value="2568">2568</option><br>'+
          '<option value="2569">2569</option><br>'+
          '<option value="2570">2570</option><br>'+
          '</select>'+
          '</div>'+
          '<div class="col-3 column-box">'+
            '<input type="text" id="refer_date'+
            counter +
            '" name="refer_date'+
            counter+
            '" placeholder="dd/mm/yyyy" class="datepicker form-control"'+ 
            '</div>'
          
      );

    

    newRow_Refer.appendTo("#TextBoxesGroup-Refer");
    $( ".datepicker" ).datepicker();

    counter++;
  });

  $("#removeButton-refer").click(function () {
    if (counter == 1) {
      alert("No more textbox to remove");
      return false;
    }

    counter--;

    $("#TextBox-Refer-Div" + counter).remove();
  });



  $("#getButtonValue").click(function () {
    var msg = "";
    for (i = 1; i < counter; i++) {
      msg += "\n memo-ans-id #" + i + " : " + $("#memo-ans-id" + i).val();
    }
    alert(msg);
  });
});
