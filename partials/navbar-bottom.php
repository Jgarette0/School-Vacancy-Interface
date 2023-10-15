
    <!--
      *A navagation bar at the bottom
      *a navagation bar handles home, list and settings
      *lord icon- is an open source icons
    -->

    <!--
      Kani nga bottom navbar kay maghandle sa radio: Home (default)
      Vacants: makita unsay bakante na mga classroom
      Setting || undecided.

      purpose: dali ra maka access sa uban feature ug page

      !pede rani maremove na feature kay dili mani priority
    -->
<nav class="navbarBottom">
<div class="radio-container">
<div class="radio-inputs">
		<label>
			<input class="radio-input" type="radio" name="engine">
				<span class="radio-tile">
					<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
              src="https://cdn.lordicon.com/dycatgju.json"
              trigger="click"
              colors="primary:#171717"
              state="hover-2"
              style="width:32px;height:32px; margin-bottom: 4px">
            </lord-icon>
					<span class="radio-label">Settings</span>
				</span>
		</label>
    <label>
			<input checked="" class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
       
        <lord-icon
      src="https://cdn.lordicon.com/slduhdil.json"
      trigger="click"
      colors="primary:#171717"
      state="hover-3"
      style="width:32px;height:32px; margin-bottom: 4px">
    </lord-icon>
				<span class="radio-label">Home</span>
			</span>
		</label>
    
		<label>
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
      <a href="show-vacants/vacants.php">
				<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <lord-icon
          src="https://cdn.lordicon.com/zncllhmn.json"
          trigger="click"
          colors="primary:#171717"
          state="hover"
          style="width:32px;height:32px; margin-bottom: -5px">
        </lord-icon>
    <span class="radio-label">Vacants</span>	
    </a>
			</span>
		</label>

</div>
  </div>
</nav>
<style>
      a{
        margin: none;
        padding: none;
        text-decoration: none;
      }
    </style>
