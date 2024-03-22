$(document).ready(function() {
    $("#load-data").click(function() {
      // Clear existing table data
      $('#data-body').empty();
  
      $.ajax({
        type: "GET",
        url: "data.xml",
        dataType: "xml",
        success: function(xml) {
          var tbody = $('#data-body');
          $(xml).find('table_data').find('item').each(function() {
            var title = $(this).find('title').text();
            var description = $(this).find('description').text();
            var row = '<tr><td>' + title + '</td><td>' + description + '</td></tr>';
            tbody.append(row);
          });
          
          var hiddenText = $(xml).find('hidden_text').text();
          var hiddenTextElement = $("#hidden-text");
          
          if (hiddenTextElement.is(":visible")) {
            hiddenTextElement.hide();
          } else {
            hiddenTextElement.text(hiddenText).show();
          }
        },
        error: function(xhr, status, error) {
          console.error("Error:", status, error);
        }
      });
    });
  });
  