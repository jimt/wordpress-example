var $ = jQuery;

$(function() {
  var qn = 1;

  function multiple_choice($q) {
    var i,
        mix = false,
        rand = [[],[]];
    $q.children('ul')
      .addClass('weQquestion').wrap('<form></form>')
      .children('li').addClass('weQquestion')
      .children('ul').addClass('weQoption')
      .children('li').addClass('weQoption')
      .children('ul').addClass('weQresponse')
      .children('li').addClass('weQresponse');
    $qs = $('li.weQquestion', $q);
    // for each of the questions
    if (mix == 'true'){
       for (i=0; i<$qs.length; ++i) {
         rand.push([]);
         $('li.weQoption', $qs[i]).each(function(ix) {
           var nqn = qn + '_' + i;
           rand[i][ix]='<li class="weQoption"><input type="radio" name="' + nqn + '" id="' + nqn + '_' + ix + '"><label for="' + nqn + '_' + ix + '">' + $(this).html() + '</label></li>';
          });
       }
      for (i=0; i<$qs.length; ++i) {
         rand[i].sort(function(){return Math.random() - 0.5});
         $('li.weQoption', $qs[i]).each(function(iy) {
           $(this).replaceWith(rand[i][iy]);
          });
       }
    } else {
      for (i=0; i<$qs.length; ++i) {
        $('li.weQoption', $qs[i]).each(function(ix) {
          var nqn = qn + '_' + i;
          $(this).replaceWith('<li class="weQoption"><input type="radio" name="' + nqn + '" id="' + nqn + '_' + ix + '"><label for="' + nqn + '_' + ix + '">' + $(this).html() + '</label></li>');
          });
       }
    }
    $('li.weQoption', $q).click(function() {
      $(this).find('ul').show('fast');
      });
  }

  // cloze
  function check(q, n) {
    var all = true;
    var caution = '<!--{$caution|escape:html|default:false}-->'.toLowerCase();
    $('#'+q).find('.' + n).each(function() {
        if ($(this).val() === '') {
          all = false;
        }
      }
    );
    if (all) {
      $('#' + q).find('.' + n).each(function() {
        if ((caution == 'true') && ($.trim($(this).val().toLowerCase()).length < $(this).attr("qword").length)) {
           $(this).css('background', '#FFCC00');
        } else {
          if ($.trim($(this).val().toLowerCase()) == $(this).attr("qword")) {
            $(this).css('background', 'LightGreen');
            $(this).attr('disabled', true).unbind('blur');
          } else {
            $(this).css('background', 'LightPink');
          }
        } 
      });
    }
  }

  function checkID(q, n) {
    var all = true;
    var caution = '<!--{$caution|escape:html|default:false}-->'.toLowerCase();
    $('#'+q).find('.' + n).each(function() {
        if ($(this).val() === '') {
          all = false;
        }
      }
    );
    if (all) {
      $('#' + q).find('.' + n).each(function() {
        if ((caution == 'true') && ($.trim($(this).val().toLowerCase()).length < $(this).attr("qword").length)) {
           $(this).css('background', '#FFCC00'); 
        } else {
          if ($.trim($(this).val().toLowerCase()) == $(this).attr("qword")) {
            $(this).css('background', 'LightGreen');
            $(this).attr('disabled', true).unbind('blur'); 
          } else {
            $(this).css('background', 'LightPink');
          }
        } 
      });
    }
  }
  function cloze($q) {
    $q.children('ul').addClass('weQquestion').wrap('<form></form>');
    var $us = $q.find('u').each(function(i) {
        var s = $(this).text().replace(/^\s*/, '').replace(/\s*$/, '').split(/\s+/);
        var r = '';
        var id = qn + '_' + i;
        for (var j=0; j<s.length; ++j) {
          r += '<input type="text" size=10 class="' + id + '" qword="' + s[j].toLowerCase() + '" id="' + id + '_' + j + '"> ';
        }
        $(this).replaceWith(r);
    });
    $q.find('input').blur(function(e) {
      var id = e.target.id,
          $input = $('#' + id),
          ans = $.trim($input.val().toLowerCase()),
          correct = $.trim($input.attr('qword').toLowerCase());
      if (ans === '') {
        $input.css('background', 'white');
      } else {
        if (ans === correct) {
          $input.css('background', 'LightGreen')
                .attr('disabled', true);
        } else {
          $input.css('background', 'LightPink');
        }
      }
    });
  }

  //FIXME determine quiz type by nesting of lists
  //  cloze: single ul list
  //  multiple choice: ul inside ul
  $('.weQuiz').each(function(i) {
    var $ul = $(this).find('ul');
    qn = i;
    if ($ul.find('ul').length >= 1) {
      multiple_choice($(this));
    } else {
      cloze($(this));
    }
  });
});
