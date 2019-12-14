(function() {
    $(function() {
      var collapseMyMenu, expandMyMenu, hideMenuTexts, showMenuTexts;
      expandMyMenu = function() {
        return $("nav.sidebar").removeClass("sidebar-menu-collapsed").addClass("sidebar-menu-expanded");
      };
      collapseMyMenu = function() {
        return $("nav.sidebar").removeClass("sidebar-menu-expanded").addClass("sidebar-menu-collapsed");
      };
      showMenuTexts = function() {
        return $("nav.sidebar ul a span.expanded-element").show();
      };
      hideMenuTexts = function() {
        return $("nav.sidebar ul a span.expanded-element").hide();
      };
      return $("#justify-icon").click(function(e) {
        if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-collapsed")) {
          expandMyMenu();
          showMenuTexts();
          $(this).css({
            color: "#000"
          });
        } else if ($(this).parent("nav.sidebar").hasClass("sidebar-menu-expanded")) {
          collapseMyMenu();
          hideMenuTexts();
          $(this).css({
            color: "#FFF"
          });
        }
        return false;
      });
    });

    // start toggle of left and down arrow

    $('#change-icon1').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('.child-menu1').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('.child-menu1').slideUp(500);
      }
    });

    $('#change-icon2').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('.child-menu2').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('.child-menu2').slideUp(500);
      }
    });

    $('#change-icon3').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('.child-menu3').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('.child-menu3').slideUp(500);
      }
    });

    $('#change-icon4').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('.child-menu4').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('.child-menu4').slideUp(500);
      }
    });

    $('#change-icon5').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('.child-menu5').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('.child-menu5').slideUp(500);
      }
    });
    $('#change-icon6').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('.child-menu6').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('.child-menu6').slideUp(500);
      }
    });

    $('.all-icon').click(function() {
      if($(this).hasClass('fa-angle-left')) {
        $(this).removeClass('fa-angle-left').addClass('fa-angle-down');
        $('#all-list').slideDown(500);
      }
      else{
        $(this).removeClass('fa-angle-down').addClass('fa-angle-left');
        $('#all-list').slideUp(500);
      }
    });

    // start Questions(Listen-Read)radio buttons
    $('#gridRadios1').click(function() {
      if($(this).attr('checked' , 'checked')) {
        $('.question-read').slideDown(500);
        $('.question-listen').slideUp(500);
        $('.question-file').slideUp(500);
      }   });

      $('#gridRadios2').click(function() {
        if($(this).attr('checked' , 'checked')) {
          $('.question-listen').slideDown(500);
          $('.question-file').slideDown(500);
          $('.question-read').slideUp(500);
        }   });
        
        
        if($('#gridRadios2').is(':checked')){
    
          $('.question-file').removeClass('hide');
        }
        if($('#gridRadios1').is(':checked')){
          $('.question-read').removeClass('hide');
          }
    // end Radio buttons  
  
  }).call(this);



   function yesnoCheck()
  {

    if (document.getElementById('a-option').checked) 
    {
      document.getElementById('listen').style.display = 'none';
    }
    if (document.getElementById('b-option').checked) 
    {
      document.getElementById('listen').style.display = 'inline';
    }

  }

  $('#inputGroupFile02').on('change',function(){
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })

  // for validating mp3 file 
  
  $('#inputGroupFile02').change(function () {
          var imgPath = $(this)[0].value;
          var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          if (ext == "mp3" || ext == "ogg")
              readURL(this);
          else
              alert("Please Select MP3 File.");
      });
// For Selest All Button
  var activateOption = function(collection, newOption) {
    if (newOption) {
        collection.find('li.selected').removeClass('selected');

        var option = $(newOption);
        option.addClass('selected');
    }
};

$(document).ready(function() {
    $('.select_all').material_select();
    $('.test-input > .select-wrapper > .select-dropdown').prepend('<li class="toggle selectall"><span><label></label>Select all</span></li>');
    $('.test-input > .select-wrapper > .select-dropdown').prepend('<li style="display:none" class="toggle selectnone"><span><label></label>Select none</span></li>');
    $('.test-input > .select-wrapper > .select-dropdown .selectall').on('click', function() {
        selectAll();
        $('.test-input > .select-wrapper > .select-dropdown .toggle').toggle();
    });

});



function selectAllDiffs() {
    $('.select_allDiffs option:not(:disabled)').not(':selected').prop('selected', true);
    $('.dropdown-content.multiple-select-dropdown input[type="checkbox"]:not(:checked)').not(':disabled').prop('checked', 'checked');
    //$('.dropdown-content.multiple-select-dropdown input[type="checkbox"]:not(:checked)').not(':disabled').trigger('click');
    var values = $('.dropdown-content.multiple-select-dropdown input[type="checkbox"]:checked').not(':disabled').parent().map(function() {
        return $(this).text();
    }).get();
    $('input.select-dropdown').val(values.join(', '));
    console.log($('select').val());
};

function selectAllLevels() {
    $('.select_allLevels option:not(:disabled)').not(':selected').prop('selected', true);
    $('.dropdown-content.multiple-select-dropdown input[type="checkbox"]:not(:checked)').not(':disabled').prop('checked', 'checked');
    //$('.dropdown-content.multiple-select-dropdown input[type="checkbox"]:not(:checked)').not(':disabled').trigger('click');
    var values = $('.dropdown-content.multiple-select-dropdown input[type="checkbox"]:checked').not(':disabled').parent().map(function() {
        return $(this).text();
    }).get();
    $('input.select-dropdown').val(values.join(', '));
    console.log($('select').val());
};
// End Select All

// Export as Word File
function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }

 

  