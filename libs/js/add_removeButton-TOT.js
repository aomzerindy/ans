$(document).ready(function () {
    var counter = 2;
  
    $("#addButton-tot").click(function () {
      if (counter > 3) {
        alert("Only 3 textboxes allow");
        return false;
      }
  
      var newRow_TOT = $(document.createElement("div")).attr(
        "class", 'row').attr("id", 'TextBox-TOT-Div' + counter);
  
  
      newRow_TOT
        .after()
        .html(
            '<div class="col-3 column-name">'+
            '</div>'+
            '<div class="col-2 column-box">'+
            '<input type="text" id="tot_id'+
            counter +
            '" name="tot_id'+
            counter+
            '" class="form-control"'+
            'maxlength="10"'+
            'placeholder="กรอกตัวเลข"'+
            'value="" />' +
            '</div>'+
            '<div class="col-3 column-box">'+
            '<input type="text" id="tot_date'+
            counter +
            '" name="tot_date'+
            counter+
            '" placeholder="dd/mm/yyyy" class="datepicker form-control"'+
            '</div>'
            
        );
  
      
  
      newRow_TOT.appendTo("#TextBoxesGroup-TOT");

      $( ".datepicker" ).datepicker();
  
      counter++;
    });
  
    $("#removeButton-tot").click(function () {
      if (counter == 1) {
        alert("No more textbox to remove");
        return false;
      }
  
      counter--;
  
      $("#TextBox-TOT-Div" + counter).remove();
    });
  
  
  
    $("#getButtonValue").click(function () {
      var msg = "";
      for (i = 1; i < counter; i++) {
        msg += "\n memo-tot-id #" + i + " : " + $("#memo-tot-id" + i).val();
      }
      alert(msg);
    });
  });
  