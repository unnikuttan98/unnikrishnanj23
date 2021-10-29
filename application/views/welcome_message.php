
	<style type="text/css">
	body {
		background-color: #fff;
		margin: 0px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.form_body .form_name{
		margin-left:10px;   
	}
	.form_body .form_name label{
		font-family: normal Helvetica, Arial, sans-serif;
		font-size:150%;
	}
	.form_body .form-title label{
		font-family: normal Helvetica, Arial, sans-serif;
		font-size:150%;
	}
	.form_body .form-content label{
		font-family: normal Helvetica, Arial, sans-serif;
		font-size:150%;
	}
	.form_body .form-id label{
		font-family: normal Helvetica, Arial, sans-serif;
		font-size:150%;
	}
	.form_body .form-title{
		margin-left:10px;
	}
	.form_body .form-content{
		margin-left:10px;
	}
	.form_body .form-id{
		margin-left:10px;
	}
	 .form_body .form_name input{
	margin-left:30px;
	margin-bottom:5px;
	width:200%;
	height:200%;
	border:none;
	}
	.form_body .form-title input{
	margin-left:45px;
	margin-bottom:5px;
	width:200%;
	height:200%;
	border:none;
	}
	.form_body .form-content input{
	margin-left:37px;
	margin-bottom:5px;
	width:200%;
	height:200%;
	border:none;
	}
	.form_body .form-id input{
	margin-left:15px;
	margin-bottom:5px;
	width:200%;
	height:200%;
	border:none;
	}
	.form_body .form-submit input{
      border:none;
	  font-family:normal Helvetica, Arial, sans-serif;
	  background-color:grey;
	  color:white;
	  font-size:150%;
	  height:200%;
	  width:100%;
	  margin-left:0px;
	}
	.return{
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		padding-bottom:10px;
	}
	.return h3{
		font-size:150%;
		font-family:normal Helvetica, Arial, sans-serif;
	}
	.return strong{
		font-size:150%;
		font-family:normal Helvetica, Arial, sans-serif;
	}
	button#users{
	  border:none;
	  font-family:normal Helvetica, Arial, sans-serif;
	  background-color:grey;
	  color:white;
	  font-size:150%;
	  height:200%;
	  width:100%;
	  margin-left:10px;
	}
	select{
		border:2px solid grey;
		margin-left:10px;
		height:200%;
		width:70%;
		font-family:normal Helvetica, Arial, sans-serif;
		font-size:140%;
	}
	select#name_select{
		border:2px solid grey;
		margin-left:10px;
		height:200%;
		width:70%;
		font-family:normal Helvetica, Arial, sans-serif;
		font-size:140%;
	}
	#container label#results{
		border:none;
		background-color:white;
		font-size:100%;
		margin-bottom:3px;
		padding:5px;
		width:20%;
	}
	table,tr,td{
		border-collapse:collapse;
		border-left:1px solid grey;
		padding:8px;
		padding-left:0px;
	}
	</style>
	<div id="container">
		<div class="header">
			<h1 style='margin-left:10px'>USER FORM</h1><hr>
			<h2 style='margin-left:10px'>User Names</h2><hr>
</div>

<table>
	<tr><td>
	<select name="" id="num_id">
			<option value="">select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
		</select>
	</td>
<td>	
<label id='results'>display names</label>
</td>
</tr>
<tr><td><button id="users" onclick="FetchUser()">Fetch User</button></td><td></td></tr>
</table>
			<hr>
		<script>
			function FetchUser() {
				var num=document.getElementById('num_id').value;
				fetch('https://jsonplaceholder.typicode.com/users/'+ num)
			.then(function(data){
				 return data.json()
			})
			.then(function(data){
				var results = document.getElementById('results')
				results.innerHTML =`Names:${data.name}`
				console.log(data)
			})
			.catch(function(error){
				document.getElementById('results').innerHTML=error
			})
			}
		</script>
		<div class="form_body">
			<h1 style='margin-left:10px'>Post Validation Form</h1><hr>
			<form method='post' autocomplete='off'>
        <!-- <div class="form_name">
			<label for="">Name:</label>
			<input type="text" name="name" id="">
		</div> -->
		<div class="form_name">
			<table>
				<tr><td><label class='add_label'><b>Select an user</b></label></td>
				<td>	
			<select name="name" id="name_select">
				<option value="">Select</option>
				<option value="Akhil">Akhil</option>
				<option value="Ravi">Ravi</option>
				<option value="Manu">Manu</option>
				<option value="Rahul">Rahul</option>
				<option value="Anandhu">Anandhu</option>
			</select>
				</td></tr>
		</div>
		<div class="form_name">
			<tr>
				<td><label class="add_label"><b> Select user id</b></label></td>
				<td>
				<select name="user_id" id="">
				<option value="">Select</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
				</td>
			</tr>
		</div>
		<tr>
			<td><label class="add_label"><b>Title:</b></label></td>
			<td><input type="text" class="add_input"  name="new_title" placeholder='Add new title' required></td>
		</tr>
        <div class="form-title">
		</div>
        <div class="form-content">
			<tr>
				<td><label class="add_label"><b>Body:</b></label></td>
			    <td><input type="text" class="add_input"  name="new_body" placeholder='Add new body' required></td>
		</tr>
           
		   <tr><td><div class="form-submit"><input type='submit'id="add_btn2"  name='submit' value='Submit'></div></td><td></td></tr>
</form>

		</div>
	</div>
