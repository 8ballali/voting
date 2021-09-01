$(".slider").owlCarousel({
    margin: 20,
    loop: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        }
    }
});

$('.brand-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 3
        },

        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }
});

$('#click').on('click', function () {
    console.log($(this).val())
    Swal.fire({
        title: 'Masukkan kode pemilihan',
        input: 'text'
    }).then(function (text) {
        console.log(text.value)
        console.log('oke')
        if (text.value) {
            $.ajax({
                type: "POST",
                url: "/e-vote/user/validate",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    candidate_id: $('#candidate_id').val(),
                    reg_id: text.value,
                },
                success: function (data) {

                    console.log(data);
                    if (data == 0) {
                        Swal.fire({
                            title: 'Kode Yang Dimasukkan Salah',
                            icon: 'warning'
                        })
                    } else if (data == 1) {
                        Swal.fire({
                            title: 'Anda Sudah Memilih',
                            icon: 'info'
                        })
                    } else if (data == 3) {
                        Swal.fire({
                            title: 'Poling Belum dimulai',
                            icon: 'warning'
                        })
                    } else if (data == 4) {
                        Swal.fire({
                            title: 'Poling Sudah Selesai',
                            icon: 'warning'
                        })
                    } else if (data == 2) {
                        Swal.fire({
                            title: 'Voting anda telah masuk',
                            icon: 'success'
                        })
                    } else {
                        Swal.fire({
                            title: 'Kode Salah',
                            icon: 'warning'
                        })
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Anda belum masukan kode");
                }
            })
        } else {
            Swal.fire({
                title: 'Data masih kosong',
                icon: 'warning'
            })
        }

    })
});

$(document).ready(function () {
    $('select').selectize({
        sortField: 'text'
    });
});

//Reference:
//https://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
;
(function ($) {

    // Browser supports HTML5 multiple file?
    var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
        isIE = /msie/i.test(navigator.userAgent);

    $.fn.customFile = function () {

        return this.each(function () {

            var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
                $wrap = $('<div class="file-upload-wrapper">'),
                $input = $('<input type="text" class="file-upload-input" />'),
                // Button that will be used in non-IE browsers
                $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
                // Hack for IE
                $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Select a File</label>');

            // Hide by shifting to the left so we
            // can still trigger events
            $file.css({
                position: 'absolute',
                left: '-9999px'
            });

            $wrap.insertAfter($file)
                .append($file, $input, (isIE ? $label : $button));

            // Prevent focus
            $file.attr('tabIndex', -1);
            $button.attr('tabIndex', -1);

            $button.click(function () {
                $file.focus().click(); // Open dialog
            });

            $file.change(function () {

                var files = [],
                    fileArr, filename;

                // If multiple is supported then extract
                // all filenames from the file array
                if (multipleSupport) {
                    fileArr = $file[0].files;
                    for (var i = 0, len = fileArr.length; i < len; i++) {
                        files.push(fileArr[i].name);
                    }
                    filename = files.join(', ');

                    // If not supported then just take the value
                    // and remove the path to just show the filename
                } else {
                    filename = $file.val().split('\\').pop();
                }

                $input.val(filename) // Set the value
                    .attr('title', filename) // Show filename in title tootlip
                    .focus(); // Regain focus

            });

            $input.on({
                blur: function () {
                    $file.trigger('blur');
                },
                keydown: function (e) {
                    if (e.which === 13) { // Enter
                        if (!isIE) {
                            $file.trigger('click');
                        }
                    } else if (e.which === 8 || e.which === 46) { // Backspace & Del
                        // On some browsers the value is read-only
                        // with this trick we remove the old input and add
                        // a clean clone with all the original events attached
                        $file.replaceWith($file = $file.clone(true));
                        $file.trigger('change');
                        $input.val('');
                    } else if (e.which === 9) { // TAB
                        return;
                    } else { // All other keys
                        return false;
                    }
                }
            });

        });

    };

    // Old browser fallback
    if (!multipleSupport) {
        $(document).on('change', 'input.customfile', function () {

            var $this = $(this),
                // Create a unique ID so we
                // can attach the label to the input
                uniqId = 'customfile_' + (new Date()).getTime(),
                $wrap = $this.parent(),

                // Filter empty input
                $inputs = $wrap.siblings().find('.file-upload-input')
                .filter(function () {
                    return !this.value
                }),

                $file = $('<input type="file" id="' + uniqId + '" name="' + $this.attr('name') + '"/>');

            // 1ms timeout so it runs after all other events
            // that modify the value have triggered
            setTimeout(function () {
                // Add a new input
                if ($this.val()) {
                    // Check for empty fields to prevent
                    // creating new inputs when changing files
                    if (!$inputs.length) {
                        $wrap.after($file);
                        $file.customFile();
                    }
                    // Remove and reorganize inputs
                } else {
                    $inputs.parent().remove();
                    // Move the input so it's always last on the list
                    $wrap.appendTo($wrap.parent());
                    $wrap.find('input').focus();
                }
            }, 1);

        });
    }

}(jQuery));

$('input[type=file]').customFile();

function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
    };
};

//Countdown
// Create Countdown
<<<<<<< HEAD
var Countdown = {

    // Backbone-like structure
    $el: $('.countdown'),

    // Params
    countdown_interval: null,
    total_seconds: 0,

    // Initialize the countdown
    init: function() {
      var Today           = new Date();
      var Todayday        = Today.getDate(); // getDay() is an integer corresponding to the day of the week: 0 for Sunday, 1 for Monday, 2 for Tuesday, and so on.
      var Todayhours      = Today.getHours();
      var Todayminutes    = Today.getMinutes();
      var Todayseconds    = Today.getSeconds();

      var DeadLine        = new Date();
      var DeadLineday     = DeadLine.getDate();
      var DeadLinehours   = DeadLine.getHours(); // I'm not sure why getHours() here is "loaded jangá"
      var DeadLineminutes = DeadLine.getMinutes();
      var DeadLineseconds = DeadLine.getSeconds();

      // DOM
      this.$ = {
        days:     this.$el.find('.bloc-time.days .figure'),
        hours:    this.$el.find('.bloc-time.hours .figure'),
        minutes:  this.$el.find('.bloc-time.min .figure'),
        seconds:  this.$el.find('.bloc-time.sec .figure')
      };

      // Init countdown values
      this.values = {
        days:     DeadLineday - Todayday,
        hours:    DeadLinehours - Todayhours,
        minutes:  DeadLineminutes - Todayminutes,
        seconds:  DeadLineseconds - Todayseconds
      };

      // Initialize total seconds
      // this.total_seconds = ((this.values.days * 24) + (this.values.hours * 60 * 60 + (this.values.minutes * 60))) + this.values.seconds;
      this.total_seconds = this.values.seconds + (this.values.minutes * 60) + (this.values.hours * 60 * 60) + (this.values.days * 24 * 60 * 60);

      // Animate countdown to the end
      this.count();
    },

    count: function() {

      var that = this,
        $day_1  = this.$.days.eq(0),
        $day_2  = this.$.days.eq(1),
        $hour_1 = this.$.hours.eq(0),
        $hour_2 = this.$.hours.eq(1),
        $min_1  = this.$.minutes.eq(0),
        $min_2  = this.$.minutes.eq(1),
        $sec_1  = this.$.seconds.eq(0),
        $sec_2  = this.$.seconds.eq(1);

      this.countdown_interval = setInterval(function() {

        if (that.total_seconds > 0) {

          --that.values.seconds;

          if (that.values.minutes >= 0 && that.values.seconds <= 0) {

            that.values.seconds = 59;
            --that.values.minutes;
          } // end if

          if (that.values.hours >= 0 && that.values.minutes <= 0) {

            that.values.minutes = 59;
            --that.values.hours;
          } // end if

          if (that.values.days >= 0 && that.values.hours <= 0) {

            that.values.hours = 24;
            --that.values.days;
          } // end if

          // Update DOM values
          // Days
          that.checkDay(that.values.days, $day_1, $day_2);

          // Hours
          that.checkDay(that.values.hours, $hour_1, $hour_2);

          // Minutes
          that.checkDay(that.values.minutes, $min_1, $min_2);

          // Seconds
          that.checkDay(that.values.seconds, $sec_1, $sec_2);
=======
>>>>>>> ef7d4a8dd3d5014f9088c6fef8f68dd561c398e3

$.ajax({
    type: "GET",
    url: "/e-vote/admin/poling",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
})

<<<<<<< HEAD
    checkDay: function(value, $el_1, $el_2) {

      var val_1 = value.toString().charAt(0),
        val_2 = value.toString().charAt(1),
        fig_1_value = $el_1.find('.top').html(),
        fig_2_value = $el_2.find('.top').html();

      if (value >= 10) {

        // Animate only if the figure has changed
        if (fig_1_value !== val_1) this.animateFigure($el_1, val_1);
        if (fig_2_value !== val_2) this.animateFigure($el_2, val_2);
      } else {

        // If we are under 10, replace first figure with 0
        if (fig_1_value !== '0') this.animateFigure($el_1, 0);
        if (fig_2_value !== val_1) this.animateFigure($el_2, val_1);
      }
    }
  };
  // Let's go !
  Countdown.init();
=======
>>>>>>> ef7d4a8dd3d5014f9088c6fef8f68dd561c398e3
