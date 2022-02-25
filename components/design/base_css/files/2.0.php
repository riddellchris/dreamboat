body{
    margin: 0px;
    padding: 0;
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
	-webkit-font-smoothing: antialiased;
}
html{

	    -webkit-text-size-adjust: 100%;
}


@media screen and (max-width: 812px){	li{margin-left: -20px;}}
@media screen and (max-width: 812px){	}
//input{max-width: 100vh;}
//input[type=submit]{max-width: 100vh;}
//textarea{max-width: 100vh;}



.big-div{min-height:100vh;position:relative;}


.footer{ 
	bottom:0;
	text-align:center;
	position:fixed;
	
}

//old heavy footer shadow
//.footer_shadow{box-shadow: 4px 0px 8px 4px rgba(0, 0, 0, 0.2), 6px 0px 20px 6px rgba(0, 0, 0, 0.19);}
.footer_shadow{box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);}

@media screen  and (min-width: 1090px){	.footer{	padding-top:18px; 	height:32px;	}}
@media screen and (min-height: 812px)  and (max-width: 1090px){	.footer{	padding-top:18px; 	height:32px;	}}
@media screen and (max-height: 812px)  and (max-width: 1090px){	.footer{	padding-bottom:18px;  	padding-top:18px;	}}





@media screen and (max-height: 812px) {
	.menu-div{display:none;}
	.fa{display:inline-block;}
}


.blink_me {animation: blinker 1s linear infinite;}
@keyframes blinker { 50% {opacity: 0;}}
//the two items above are used to make an item blink
//but they appear to be very very sensitive to any comments within them or above them
//20.07.20 CR 

@media screen and (max-width: 1090px) {.side_form{	width: 100%;
    //padding-top: 1vh;
    text-align: left;
    padding-left:5px;}}
@media screen and (min-width: 1090px) {.side_form{	width: 100%;
						    //padding-top: 1vh;
						    text-align: left;
						    padding-left: 25px;}}
}
.fa-question-circle{
display:inline-block;float:right;margin-right:60px;

}

select{

color:white;
font-size:18px;
border-radius:0px;

box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
    -moz-appearance:none; /* Firefox */
    -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
padding:6px;
margin:6px;
border:transparent;
text-align:center;
}

.details-font{
   height:90px;

   width:100%;
   text-align:center; 
 //  color: #007d15;
 //  font-family: fantasy;   
    padding-top: 25px;
    margin-bottom: -25px;
	}

@media screen and (min-width: 1090px){.details-font{font-size:60px;}}
@media screen and (max-width: 1090px){.details-font{font-size:35px;}}

	
	
.make-discussion-input{
color:#281e96;
outline:1px solid #281e96;
width:100%;
text-align:left;
padding:4px;
}

.make-discussion-input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
	font-family: Arial;
  color: #9badef;
  opacity: 1; /* Firefox */
}

.make-discussion-input:-ms-input-placeholder { /* Internet Explorer 10-11 */
	font-family: Arial;
  color: #9badef;
}

.make-discussion-input::-ms-input-placeholder { /* Microsoft Edge */
	font-family: Arial;
  color: #9badef;
}

#discussion_submit{background-color:#281e96;
color:white;max-width:1100px;width:100%;height: 50px;display:inline-block;padding-top:13px;text-transform:uppercase;font-family:helvetica;

}
#discussion_submit:hover{background-color:#4332ff;}	


@media screen and (max-width: 1090px){.tagline {display:none;}	}
@media screen and (min-width: 1090px){.tagline {display:block;}	}

input[type=radio]{
-webkit-appearance: radio; 

}



	.menu-div > a:first-child {margin-left:0px;}

.client-rows{margin:auto;padding-left:3%;padding-right:3%;} 






@media screen and (max-width: 480px) {

  .add-fresh{
  	display:none;
  }
	.nav-div{
		width:100%;
		margin: auto;
		text-align: left;
		height:40px;	
	} 

	.brief-nav{display:inline;}
	.wide-nav{display:none;}
	
.client_names{
    margin-left:2px;}

}

@media screen and (min-width: 480px) {
	//.client-rows{padding-left:calc(50vw - 160px);}
	.nav-div{width:100%;height:53px;margin: auto;text-align: left;}
	.brief-nav{display:none;}
	.wide-nav{display:inline;}
	
.client_names{margin-left:15px;}
}


.big-menu-icons{
padding-top:5px;
padding-left:5px;
padding-right:5px;
}



.error-message{
	font-family:Playfair Display;
	font-size:18px;
	text-shadow:2px 2px 4px grey;

	text-transform:uppercase;
	color:red;
}

@media screen and (max-height: 812px) {
	.prompt-font{
		font-family: Righteous;
		font-size:24px;
		text-transform:uppercase;
		font-size:28px;
	}
	.nav-div{
		padding-top:0px;
		position: fixed; /* Set the navbar to fixed position */
		top: 0; /* Position the navbar at the top of the page */
	 	z-index: 100;
	}
}

@media screen and (min-height: 812px) {
	.nav-div{
		position: fixed; /* Set the navbar to fixed position */
		top: 0; /* Position the navbar at the top of the page */
		z-index: 100;
	}
		
	.prompt-font{
		font-family: Righteous;
		font-size:42px;
		text-transform:uppercase;
		//font-size:28px;
	}
}

.pilots_eyes_only_font{

	font-family: Kalam;
	font-size: 1.2em;
	color: #cecece;
	

}
.landing-font{
font-family:Monda;
color:#4332ff;
font-size:36px;
font-weight:600;
}

.small-landing-font{
font-family:Monda;color:#C0C0C0;font-size:22px;font-weight:600;
}

.secure_input{
	background-color:#fff;
	
	border:none;
	padding-bottom:14px;
//	min-width:400px;
width:100%;
	box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
}


.password_input{
background-color:#a0ffce;
color:#7fceff;
border:none;

padding-bottom:14px;
}
.password_input::placeholder{
color:#4332ff;
}

.login-submit{
//	min-width:400px;
	width:100%;
	padding-top:12px;
	padding-bottom:14px;
	//padding-left: 46px;
	//padding-right: 46px;	
	font-family: Righteous;
	font-size: 16px;
	font-weight: 600;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: .1em;
	-webkit-appearance: none;
	height:52px;
	border: 0px solid #f7f7f7;
	text-align: center;
	
//	margin:6px;
    background-color: white;
    padding-left: 12px;
    padding-right: 12px;
    display: inline;
    text-decoration: none;
	box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
}
.login-submit:hover{
	//background-color: #fff;
	//border: 2px solid #fff;
	padding-top:12.02px;
	padding-bottom:14.02px;

	font-size: 15.96px;
	box-shadow: inset 0px 4px 12px rgba(0, 0, 0, 0.2); 
	
		
}


.call_buttons{
	padding-top:12px;
	padding-bottom:14px;
	padding-left: 46px;
	padding-right: 46px;	
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size: 16px;
	font-weight: 600;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: .1em;
	-webkit-appearance: none;
	height:52px;
	border: 2px solid black;
	text-align: center;
	margin:6px;
	max-width:150px;
	box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
	text-decoration:none;
	color:black;
}
.call_buttons:hover{
	//color:#fff;
	//background-color: #fff;
	//padding-top:11px;
	//padding-bottom:15px;
	font-size: 15.8px;
    -webkit-box-shadow:inset 0 0 6px 4px #000000;
       -moz-box-shadow:inset 0 0 6px 4px #000000;
            box-shadow:inset 0 0 6px 4px #000000;	
}


.green{		background-color:green;		color: #fff;}
.green:hover{	background-color:#50C878;}
.orange{	background-color:orange;	color: #fff;}
.orange:hover{	background-color:#ffb732;}
.red{		background-color:red;		color: #fff;}
.red:hover{	background-color:#f74040;}

.client_select{
	padding:13px 46px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size: 16px;
	font-weight: 600;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: .1em;
	-webkit-appearance: none;
	height:52px;
	border: 2px solid black;
	text-align: center;
	margin:6px;
	min-width:150px;
}

.feed-font{
	font-family:Playfair Display;
	font-size:28px;
	padding-left:8%;
	padding-right:8%;

}

.no-button{
	margin-top:0px;
	padding-top:0px;
	color:#ccc;
	background-color: transparent;
	border: 0px solid #fff;
	text-transform:uppercase;
	text-decoration:none;
}
.no-button:hover{
	color:#281396;
}

.login-cells{
	display:block;
}

input{
	margin: 6px 0 4px;
	font-size: 22px;
	height:38px;
	border: none;
	padding: 12px;
	line-height: normal;
	box-sizing: border-box;
	background: #fafafa;
	color: #000;
	-webkit-appearance: none;
	border-radius: 0;
}

.history-titles{
    margin-left:15px;
    font-family: Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    letter-spacing: .06em;
    text-transform: uppercase;    
    color: #D3D3D3;
     line-height: 1em;    
    text-decoration:none;
}

.nav-links.bottom-links{color: #ffffff;}

.nav-links{
    margin-left:15px;
    font-family: Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    letter-spacing: .06em;
    text-transform: uppercase;    
    color: #ffffff;
     line-height: 1em;   
    -webkit-font-smoothing: subpixel-antialiased;  
    text-decoration:none;
}

.nav-link-selected{   
    color: #fff;
}

.client_names{
    font-family: Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    letter-spacing: .06em;
    text-transform: uppercase;    
    color: #999;
    text-decoration:none;
    -webkit-font-smoothing: subpixel-antialiased;    
    line-height: 1em;
}

.client_names:hover{
	color:grey;
        font-size: 18px;
}

textarea{
    -webkit-box-shadow:0px 4px 12px rgba(0, 0, 0, 0.4);
       -moz-box-shadow:0px 4px 12px rgba(0, 0, 0, 0.4);
	box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
            padding: 4px;
    width:100%;
    max-width:1100px;
    font-size:20px;
    color: #281e96;
    text-align:center;
    font-family:Playfair Display;
 border: 0px solid #ccc;
}

.start_session{
	float:right;
color:green;
font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    letter-spacing: .06em;
    text-transform: uppercase;
}
.start_session:hover{
color: #7CFC00;
}

.start_trial{
	float:right;
	color:orange;
	font-family: Arial,Helvetica,sans-serif;
    	font-size: 14px;
    	letter-spacing: .06em;
    	text-transform: uppercase;
}
.start_trial:hover{
color: #ffc966;
}

.add-fresh{
float:right;
color:#ba1414;
font-family: Arial,Helvetica,sans-serif;    
font-size: 14px;
letter-spacing: .06em;
text-transform: uppercase;
}
    
.add-fresh:hover{
color:red;
}

.wide-button{
	width:100%;
	display:block;
	text-decoration:none;
	text-transform:uppercase;
	font-family: Arial,Helvetica,sans-serif;
	text-align:center;
	box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
}

@media screen and (max-width: 1090px) {
	.wide-button{	padding: 6px 0px;margin-bottom:20px;}
}
@media screen and (min-width: 1090px) and (min-height: 600px)  {
	.wide-button{	padding: 10px 0px;margin-bottom:20px;}
}
@media screen and (min-width: 1090px) and (max-height: 600px)  {
	.wide-button{	padding: 6px 0px;margin-bottom:8px;}
}

.green-button{			background-color:#22a522;	color:white;}
.green-button:hover{		background-color:#3a823a;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.lightest-green-button{		background-color:#58ef66;	color:#034c0a;}
.lightest-green-button:hover{	background-color:#3a823a;	color:white;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.light-green-button{		background-color:#21b72f;	color:white;}
.light-green-button:hover{	background-color:#3a823a;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.strong-green-button:hover{	background-color:#3a823a;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.strong-green-button{		background-color:#017c0d;	color:white;}

.red-button{			background-color:#ff0000;	color:white;}
.red-button:hover{		background-color:#d62c2c;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.lightest-red-button{		background-color:#ff7a7a;	color:white;}
.lightest-red-button:hover{	background-color:#d62c2c;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.light-red-button{		background-color:#ff5454;	color:white;}
.light-red-button:hover{	background-color:#d62c2c;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.strong-red-button{		background-color:#d62c2c;	color:white;}
.strong-red-button:hover{	background-color:#e50000;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}


.black-button{			background-color:black;		color:white;}
.black-button:hover{		background-color: #ff0000;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.gold-button{			background-color: #FFD700;	color: #ff0000;}
.gold-button:hover{		background-color: #ffae00;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.fixed-grey-button{		background-color:#d1cccc;	color:grey;	box-shadow: none;}
.grey-button{							color:grey;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.grey-button:hover{						color: red;}
.white-button{							color:white;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.white-button:hover{						color:#281e96;}
.light-blue-button{						color: #4f8cff;	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.4);}
.light-blue-button:hover{					color:#281e96;}