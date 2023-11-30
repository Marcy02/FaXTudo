<footer class="footer">

   <div class="credit">&copy; copyright @ 2023 by <span>| todos os direitos reservado!</span></div>

</footer>

<!-- footer section termina -->


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>

<!-- customização js file link  -->
<script src="../js/script.js"></script>
<script src="../js/pesquisa.js"></script>

<script>

let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');

dropdown_items.forEach(items =>{
   items.onclick = () =>{
      items_parent = items.parentElement.parentElement;
      let output = items_parent.querySelector('.output');
      output.value = items.innerText;
   }
});

</script>