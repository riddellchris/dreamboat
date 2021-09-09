	<select name = 'what_clients_are_called' onchange='this.form.submit()' style='width:100%;'>
	  <option <?php if($selected == 'clients'){	echo 'selected';} ?> value="clients"	>Clients</option>
	  <option <?php if($selected == 'customers'){	echo 'selected';} ?> value="customers"	>Customers</option>
	  <option <?php if($selected == 'users'){	echo 'selected';} ?> value="users"	>Users</option>
	</select>
