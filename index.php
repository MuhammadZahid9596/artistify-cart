<script type="text/javascript">
 function validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == null || username == "") {
                alert("Please enter the username.");
                return false;
            }
            if (password == null || password == "") {
                alert("Please enter the password.");
                return false;
            }
            alert('Login successful');
            
        } 
  </script>
<?php

echo '<html>
<body>
<form id="form1" runat="server">
    <div class="container">
        <div class="main">
            <h2>
                Javascript Login Form Validation</h2>
            <form id="form_id" method="post" name="myform">
            <label>
                User Name :</label>
            <input type="text" name="username" id="username" />
            <br><br>
            <label>
                Password :</label>
            <input type="password" name="password" id="password" />
            <input type="button" value="Login" id="submit" onclick="validate();" />
            </form>
        </div>
    </div>
    </form>
</html>
</body>';

?>