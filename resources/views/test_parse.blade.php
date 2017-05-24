<button onclick="set_income('>2.5')"> >2.5 </button>
<button onclick="set_income('>5')"> >5 </button>
<button onclick="set_income('>10')"> >10 </button>
<button onclick="set_income('>15')"> >15 </button>
<br>
<button onclick="set_intrest('Lifestyle')"> Lifestyle </button>
<button onclick="set_intrest('Travel')"> Travel </button>
<button onclick="set_intrest('motar')"> motar </button>

<script type="text/javascript">
  var income='>2.5';
  var intrest='Lifestyle';
  function set_income(x){
    income=x;
    show_card();
  }
  function set_intrest(x){
    intrest=x;
    show_card();
  }
  function show_card(){
    console.log(income + intrest);
  }
</script>