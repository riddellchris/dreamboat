	<select name = 'type_of_person'  onchange='this.form.submit()' style='width:100%;' >
	  <option <?php if($selected == 'business_owner'){echo 'selected';} 		?> value="business_owner"	>Business Owner</option>
	  <option <?php if($selected == 'freelancer_contractor'){echo 'selected';} 	?> value="freelancer_contractor">Freelancer/Contractor</option>	
	  <option <?php if($selected == 'sales_person'){echo 'selected';} 		?> value="sales_person"		>Sales Person</option>	    
	  <option <?php if($selected == 'staff_member'){echo 'selected';} 		?> value="staff_member"		>Staff Member</option>
	</select>
