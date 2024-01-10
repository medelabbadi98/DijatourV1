<div id="bookingengine_div">
    @csrf
    <iframe id='ifr' src={{ URL::asset('//vwayaj.com/iframe/b4b4ad2a78929f40ff088c673211fdf6');}} width="1043px" height="260.667px"> </iframe>
</div>
    
{{-- 
<script type="text/javascript" src={{ URL::asset('//vwayaj.com/iframe/b4b4ad2a78929f40ff088c673211fdf6/js/');}}>
 
  
</script> --}}
<script>
    const sfg = document.getElementById('bookingengine_frame');
   function changst(){
       const iff = sfg.contentWindow;
       const ghg = iff.contentDocument;
       console.log(ghg);
   }
</script>
 