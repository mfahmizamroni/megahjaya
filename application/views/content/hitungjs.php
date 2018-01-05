<script type="text/javascript">
  $(function() {
    for(i=1; i < document.getElementById('table1').rows.length+1; i++){
      var sakit = 0;
      var izin = 0;
      var alpha = 0;
      $('#table1 tr:nth-child('+i+') td').each(function () {
        if($(this).html() == "S"){
          sakit++;
        } else if($(this).html() == "I"){
          izin++;
        } else if($(this).html() == "A"){
          alpha++;
        }
      });
      var a = '#a'+i;
      var s = '#s'+i;
      var iz = '#izin'+i;
      $(a).html(alpha);
      $(s).html(sakit);
      $(iz).html(izin);
    }
  });
</script>