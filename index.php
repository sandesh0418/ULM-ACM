<?php 
include 'header.php';
?>
<script type="text/javascript">
function validateForm() {
    var x = document.forms["info"]["name1"].value;
    var y = document.forms["info"]["email1"].value;
    if (x === null || x === "") {
        alert("Name must be filled out");
        return false;
    }
     if (y === null || y === "") {
        alert("Email must be filled out");
        return false;
    }
}
</script>
<!DOCTYPE html>
<html>
<body style="margin: 0px;">
	<div class="div1"
		<strong>
                    <h1>What is ACM?</h1>
                    <p> ACM is an educational and scientific society uniting the world's computing educators, researchers and professionals to inspire dialogue, share resources and address the field's challenges. 
                        IEEE is the world's largest professional association advancing innovation and technological excellence for the benefit of humanity.</p>
                            
		</strong>
                     
                     
		</div >
                <div class="div2">
                    
                        <h1>What does ACM do?</h1>
                        <p>The ACM/IEEE student chapter at ULM provides opportunities for students to interact with their peers and faculty and explore the breath and depth of the 
                            field of computer through workshops, guest speakers, programming contests and social activities.</p>
                    
                </div>
                
                 <div class="requestinformation">
<fieldset>
<legend>
	Learn More about ULM ACM
</legend>
<form name="info" action="demo_form.asp" onsubmit="return validateForm()"method="post" >
      
	<table>

		<tr>
			<td>Name:</td>
			<td>
			<input type="text" name="name1" size=30 required>
			<br>
			</td>
		</tr>
		<tr>
			<td>E-Mail:</td>
			<td>
			<input type="text" name="email1" size=30 required>
			<br>
			</td>
		</tr>
		<tr>
			<td>
			<p>
				<label>Rank</label>
				<select >
					<option>Choose Rank</option>
					<option>Freshman</option>
					<option>Sophomore</option>
					<option>Junior</option>
					<option>Seniour</option>
				</select>
			</p></td>
		</tr>

		<tr>
			<td>
			<hr>
			</td>
		</tr>

		<tr>
		<td colspan="2">
		<div >
		<input type="submit" class="rounded"> <input type="reset" value="Clear Form" class="rounded">
		</div>
		</td>
		</tr>
     
   </table>
</fieldset>
</div>

</body>
</html>


<?php include 'footer.php'; ?>