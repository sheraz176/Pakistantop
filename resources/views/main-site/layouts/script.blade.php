<script>
    function show_menu_mobile() {
      document.getElementById("nav_wrap").className += ' show_mob_menu';
      document.getElementById("menu_hndlr").innerHTML = '<i onClick="hide_menu_mob();" class="fa fa-times"></i>';
  }

  function hide_menu_mob() {
      document.getElementById("nav_wrap").classList.remove("show_mob_menu");
      document.getElementById("menu_hndlr").innerHTML = '<i onClick="show_menu_mobile();" class="fa fa-bars"></i>';
  }
</script>
<script>
  console.log('session',{{ session()->get('toggle_check')}});
     if ({{ session()->get('toggle_check')}} == '1') {
       document.getElementById("body-start").classList.add("dark");
  }

</script>
<script>
  const checkbox = document.getElementById('checkbox');
  checkbox.addEventListener('change', () => {


      var session_id = 0;
      const element = document.querySelector('#body-start');
      if (element.matches('.dark')) {
          $("#checkbox").attr('checked', false);
          $('#body-start').removeClass("dark");
      }
      else{
         $("#checkbox").attr('checked', true);
         $('#body-start').addClass("dark");
         session_id = 1;
      }

      $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url: "{{ route('session.set') }}",
        data: {'session_id': session_id},
        type: 'post',
        success: function(response){
            console.log(response);
        }
      });


      // document.body.classList.toggle('dark');
  })



</script>
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
      showSlides(slideIndex += n);
  }

  function currentSlide(n) {
      showSlides(slideIndex = n);
  }

  function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {
          slideIndex = 1
      }
      if (n < 1) {
          slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script>
<script>
  // Farbe aus ColorPicker auslesen
  var theInput = document.getElementById("kb_selected_color");
  var theColor = theInput.value;
  theInput.addEventListener("input", function() {
      // Farcode (Hex) schreiben
      document.getElementById("hex").innerHTML = theInput.value;
      // Farbvariable schreiben
      document.documentElement.style.setProperty('--kb-color', theInput.value);
      document.documentElement.style.setProperty('--kb-color-333', theInput.value);
      document.documentElement.style.setProperty('--kb-color-111', theInput.value);
  }, false);
</script>

@stack('scripts')
