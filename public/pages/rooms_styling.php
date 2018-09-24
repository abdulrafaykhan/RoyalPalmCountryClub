@font-face
{
	font-family : Edwardian Script ITC;
	src: "fonts/EdwardianScriptITC.ttf";
}
body{background-color:#1a3611;
}
#nav
{
	border : 1px solid #ccc;
	border-width : 1px 0;
	list-style-type : none;
	margin : 0 auto;
	padding : 0;
	text-align : center;
	background-color:#333;

	width : 100%;
	border-left : 1px solid #ccc;
	border-right : 1px solid #ccc;

}
#nav li
{
	position : relative;
	display : inline;
}
#nav a
{
	display : inline-block;
	padding : 10px;
}
#nav ul
{
	position : absolute;
	left : -9999px;
	margin : 0;
	padding : 0;
	text-align : left;
	overflow : hidden;
	background-color : #333;
	
	
}
#nav ul li
{
	z-index : 1000;
	display : block;

}

#nav li:hover ul
{
	left : 0;
}
#nav li:hover a
{
	
	background-color: #111;
}
#nav li:hover ul a 
{
	background-color : #111;
}
#nav li:hover ul a:hover
{
	background-color: #111;
}
#nav ul a
{
	
	white-space : nowrap;
	display : block;
	border-bottom : 1px solid #ccc;
}
a
{
	
	color : #D7DF01;
	text-decoration : none;
	font-weight : bold;
}
a:hover
{
	background-color : #111;
}

h1{ color: #D7DF01;
    text-align: center;
	text-decoration: none;
	font-family : Edwardian Script ITC;
	font-size : 48;
}
h2{
	color:#D7DF01;
	font-family : Times New Roman;
	
	font-size : 170%;
	text-decoration : bold;
}
p
{
	color:white;
	font-family : Segoe UI;
	font-size : 105%;
}
hr 
{
	border-color : #c95062;
}
#menu table tr td p a{color:#D7DF01;}
