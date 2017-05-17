

<form action="" method="POST">

	სახელი <input type="text" name="firstname">
	<br><br>
	გვარი <input type="text" name="lastname">
	<br><br>
	სქესი <select name="gender">
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select><br><br>
	დაბადების დღე/თვე/წელი
	<select name="dateNumber">
		<option value='01'>01</option>
		<option value='02'>02</option>
		<option value='03'>03</option>
		<option value='04'>04</option>
		<option value='05'>05</option>
		<option value='06'>06</option>
		<option value='07'>07</option>
		<option value='08'>08</option>
		<option value='09'>09</option>
		<option value='10'>10</option>
		<option value='11'>11</option>
		<option value='12'>12</option>
		<option value='13'>13</option>
		<option value='14'>14</option>
		<option value='15'>15</option>
		<option value='16'>16</option>
		<option value='17'>17</option>
		<option value='18'>18</option>
		<option value='19'>19</option>
		<option value='20'>20</option>
		<option value='21'>21</option>
		<option value='22'>22</option>
		<option value='23'>23</option>
		<option value='24'>24</option>
		<option value='25'>25</option>
		<option value='26'>26</option>
		<option value='27'>27</option>
		<option value='28'>28</option>
		<option value='29'>29</option>
		<option value='30'>30</option>
		<option value='31'>31</option>
	</select>
		<select name="dateMonth">
			<option value='01'>იანვარი</option>
			<option value='02'>თებერვალი</option>
			<option value='03'>მარტი</option>
			<option value='04'>აპრილი</option>
			<option value='05'>მაისი</option>
			<option value='06'>ივნისი</option>
			<option value='07'>ივლისი</option>
			<option value='08'>აგვისტო</option>
			<option value='09'>სექტემბერი</option>
			<option value='10'>ოქტომბერი</option>
			<option value='11'>ნოემბერი</option>
			<option value='12'>დეკემბერი</option>
	</select>
		<input type="text" name="year">

	<br><br>
	მოკლე ბიოგრაფია <textarea name="bio" cols="30" rows="10"></textarea>
	<br><br>
	<input type="checkbox" name="checked" value="1"> მოსანიშნი whatever<br><br>

	<button type="submit">Submit</button>

</form>