*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: poppins;
    text-decoration: none;
}
body{
    margin: 8%;
    background-image: url('3.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
div.login-form{
    width: 450px;
    background-color: white;
    box-shadow: 0px 5px 10px black;
}
div.login-form h2{
	text-align: center;
	background-color: #204969;
	padding: 12px 0px;
	color: white;
}
div.login-form form{
	padding:30px 60px;
}
div.login-form form div.input-field{
	display: flex;
    flex-direction: row;
    margin: 10px 0px;
}
div.login-form form div.input-filed i{
    color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;
}
div.login-form form div.input-field input{
    background-color: #f2f4f6;
    padding: 10px;
    border: none;
    width: 100%;
    padding-left: 15px;
}
div.login-form form button{
    width: 100%;
    background-color: #5bd1d7;
    padding: 8px;
    border: none;
    font-size: 16px;
    font-weight: 500;
    color: white;
    margin: 15px 0;
    transition: background-color 0.4s;
}
div.login-form form button:hover{
    background-color:#41b6e6;
    cursor: pointer;
}
div.login-form form div.extra{
    font-size: 14px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
div.login-form form div.extra a:first-child{
    color: darkgrey;
}