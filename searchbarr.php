 <div class="filter-search">
        <div class="container ">
            <form class="filter-form" action="findpro.php" method="GET">
                <div class="location">
                    <p>Location</p>
                    <select name="location" class="filter-location">
                        <option value="Borivali">Borivali</option>
                        <option value="Kandivali">Kandivali</option>
						<option value="Malad">Malad</option>
                        <option value="Mira road">Mira road</option>
						<option value="Dahisar">Dahisar</option>
						<option value="Dahisar">Ville Parle</option>
						<option value="Andheri">Andheri</option>
						<option value="Churchgate">Churchgate</option>
						<option value="Dadar">Dadar</option>
						<option value="Bandra">Bandra</option>
						<option value="Goregaon">Goregaon</option>
						<option value="Khar road">Khar road</option>
						<option value="Mahim">Mahim</option>
						<option value="Matunga">Matunga</option>
						<option value="Jogeshwari">Jogeshwari</option>
						
                    </select>
                </div>
                <div class="search-type">
                    <p>Property Type</p>
                    <select name="propertytype" class="filter-property">
                        <!--<option value="Owner">Owner</option>-->
                        <option value="Builder">Builder</option>
						<option value="Rent">Rent</option>
                        <option value="PG">PG</option>
                    </select>
                </div>
				<script>
			/*	$(document).ready(function(){
      // everything here will be executed once index.html has finished loading, so at the start when the user is yet to do anything.
      $("#select1").change(loadcontent()); //this translates to: "when the element with id='select1' changes its value execute load_new_content() function"
});

function loadcontent(){
     var selected_option_value=$("#select1 option:selected").val(); //get the value of the current selected option.

     $.post("findpro.php", {option_value: selected_option_value},
         function(data){ //this will be executed once the `script_that_receives_value.php` ends its execution, `data` contains everything said script echoed.
              $("#price").html(data);
              alert(data); //just to see what it returns
         }
     );
} 
				 $.post("findpro.php", {option_value: selected_option_value},
      function(data){ //this will be executed once the `script_that_receives_value.php` ends its execution, `data` contains everything said script echoed.
          $("#price").html(data);
      }
  );*/
  
  </script>
				<?php
				
    /* $selected_option=$_POST['option_value'];

     //Do what you need with this value, then echo what you want to be returned.

     echo "you have selected the option with value=$selected_option";*/
?>
				
				<div class="search-type">
                    <p>Price</p>		
					<a id="price"></a>
                    <select name="select1" id="select1" onchange="loadcontent()" class="filter-property">
                        <option value="low to high">low to high</option>
                        <option value="high to low">high to low</option>
                    </select>
                </div>

              <!--  <div class="price-range">
                    <p>Price</p>
                    <div class="range-slider">
                        <div id="slider-range">
                            <span tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default slider-left">50k</span>
                            <span tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default slider-right">300k</span>
                        </div>
                    </div>
                </div>-->
                <div class="bedrooms">
                    <p>Bedrooms</p>
                    <div class="room-filter-pagi">
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-1">
                            <label for="room-1">1</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-2">
                            <label for="room-2">2</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-3">
                            <label for="room-3">3</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="room" id="room-4">
                            <label for="room-4">4+</label>
                        </div>
                    </div>
                </div>
                <div class="bathrooms">
                    <p>Bathrooms</p>
                    <div class="room-filter-pagi">
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-1">
                            <label for="bathroom-1">1</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-2">
                            <label for="bathroom-2">2</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-3">
                            <label for="bathroom-3">3</label>
                        </div>
                        <div class="bf-item">
                            <input type="radio" name="bathroom" id="bathroom-4">
                            <label for="bathroom-4">4+</label>
                        </div>
                    </div>
                </div>
                <div class="search-btn">
                    <button type="submit"><i class="flaticon-search"></i>Search</button>
                </div>
            </form>
        </div>
    </div>