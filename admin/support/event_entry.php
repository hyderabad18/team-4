<style>
input[type=text], select
 {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#content {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>


<div id="content">
  <form action="/action_page.php">
    <label for="ename">Event Name</label>
    <input type="text" id="ename" name="firstname" placeholder="event name..">
    <label for="edesc">Event Description</label>
    <input type="text" id="lname" name="description" placeholder="Event Description..">

    <label for="location">location</label>
    <select id="location" name="location">
      <option value="kukatpally">Kukatpally</option>
      <option value="lbnagar">LBnagar</option>
      <option value="mehdipatnam">Mehdipatnam</option>
      <option value="vanasthalipuram">Vanasthalipuram</option>
    </select>
    <label for="startdate">Start Date</label>
    <input type="text" id="sdate" name="Start Date" placeholder="Start Date..">
    <label for="enddate">End Date</label>
    <input type="text" id="edate" name="End Date" placeholder="End Date..">
    <label for="no">Number of volunteers required</label>
    <input type="text" id="no" name="no" placeholder="Number of volunteers required..">
    <input type="submit" value="Submit">
  </form>
</div>
