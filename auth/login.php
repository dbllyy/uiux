<!DOCTYPE html>
<html>
<head>
	<title>Task Management</title>
	<link rel="stylesheet" type="text/css" href="slide_navbar_style.css">
	<link rel="stylesheet" href="fonts.css"> <!-- Assuming you saved Google Fonts in this file -->
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: 'Jost', sans-serif; /* Ensure this font is available in fonts.css */
        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    }
    .main {
        width: 350px;
        height: 500px;
        background: red;
        overflow: hidden;
        background: url("background-image.jpg") no-repeat center/cover; /* Use a local image file */
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
    }
    #chk {
        display: none;
    }
    .signup {
        position: relative;
        width: 100%;
        height: 100%;
        font-size: 0.9rem;
    }
    label {
        color: #fff;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 50px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }
    input {
        width: 60%;
        height: 10px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 12px;
        border: none;
        outline: none;
        border-radius: 5px;
    }
    button {
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background: #573b8a;
        font-size: 1em;
        font-weight: bold;
        margin-top: 30px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }
    button:hover {
        background: #6d44b8;
    }
    .login {
        height: 460px;
        background: #eee;
        border-radius: 60% / 10%;
        transform: translateY(-180px);
        transition: .8s ease-in-out;
    }
    .login label {
        color: #573b8a;
        transform: scale(.6);
        font-size: 2.3em;
    }
    #chk:checked ~ .login {
        transform: translateY(-500px);
    }
    #chk:checked ~ .login label {
    transform: scale(1) translateY(10px); /* Geser 5px ke bawah */
    font-size: 1.7em;
}
    #chk:checked ~ .signup label {
        transform: scale(.6);
    }
</style>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label style="text-align: center;" for="chk" aria-hidden="true">Selamat Datang</label>
                <img src="../images/services.svg" alt="Gambar Layanan" style="display: block; margin: 20px auto; max-width: 75%;  margin-top: -40px;">
            </form>
        </div>


			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login Di Sini</label>
					<input type="user" name="user" placeholder="User" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>
