$(document).ready(function () {
  var counter = 2;

  $("#addButton-ans").click(function () {
    if (counter > 3) {
      alert("Only 3 textboxes allow");
      return false;
    }

    var newRow_ANS = $(document.createElement("div")).attr(
      "class", 'row').attr("id", 'TextBox-ANS-Div' + counter);


    newRow_ANS
      .after()
      .html(
          '<div class="col-3 column-name">'+
          '</div>'+
          '<div class="col-2 column-box">'+
          '<input type="text" id="ans_id'+
          counter +
          '" name="ans_id'+
          counter+
          '" class="form-control"'+
          'maxlength="10"'+
          'placeholder="กรอกตัวเลข"'+
          'value="" />' +
          '</div>'+
          '<div class="col-3 column-box">'+
            '<input type="text" id="ans_date'+
            counter +
            '" name="ans_date'+
            counter+
            '" placeholder="dd/mm/yyyy" class="datepicker form-control"'+ 
            '</div>'
          
      );

    

    newRow_ANS.appendTo("#TextBoxesGroup-ANS");
    $( ".datepicker" ).datepicker();

    counter++;
  });

  $("#removeButton-ans").click(function () {
    if (counter == 1) {
      alert("No more textbox to remove");
      return false;
    }

    counter--;

    $("#TextBox-ANS-Div" + counter).remove();
  });



  $("#getButtonValue").click(function () {
    var msg = "";
    for (i = 1; i < counter; i++) {
      msg += "\n memo-ans-id #" + i + " : " + $("#memo-ans-id" + i).val();
    }
    alert(msg);
  });
});
