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

#heading{

    
}
#form-layout {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<div id="form-layout">
  <form action="/action_page.php">
    <label for="ename"> Name</label>
    <input type="text" id="ename" name="firstname" placeholder="event name..">

    <label for="edesc">Contact</label>
    <input type="text" id="lname" name="contact" placeholder="Contact">

    <label for="edesc">Email Id</label>
    <input type="text" id="lname" name="email" placeholder="Email Id">

    <label for="edesc">Age</label>
    <input type="text" id="lname" name="age" placeholder="Age">

    <label for="edesc">Profession</label>
    <input type="text" id="lname" name="profession" placeholder="Profession">

    <label for="edesc">Pass Key</label>
    <input type="text" id="lname" name="passkey" placeholder="Pass Key">

    
  
    <input type="submit" value="Submit">
  </form>
</div>