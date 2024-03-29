<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Responsive CSS Only Carousel Slider Demo</title>
    <meta name="description" content="Check out this demo to create responsive carousel slider with the help of CSS only. It also support multiple items and images." />
    <meta name="author" content="Frontendscript" />
   
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        
/* ******************************************************
	Author URI: https://frontendscript.com
	Demo Purpose Only - May not require to add.
	font-family: 'Work Sans', sans-serif;
*********************************************************/

@import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');

html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

article, header, section, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
body {
    background:#f0e190 none repeat scroll 0 0;
    color: #222;
    font-family: "Raleway",sans-serif;
    font-size: 100%;
    line-height: 24px;
    margin: 0;
	padding:0;

}
a{
	font-family: "Raleway",sans-serif;
	text-decoration: none;
	outline: none;
}
a:hover, a:focus {
	color: #373e18;
}
section {
    float: left;
    width: 100%;
	 margin-top:3em;
	 margin-bottom:2em;
}
h2 {
    color: #1a0e0e;
    font-size: 26px;
    font-weight: 700;
    line-height: normal;
	text-transform:uppercase;
}
h2 span {
    display: block;
    padding: 0;
    font-size: 18px;
    opacity: 0.7;
    margin-top: 5px;
	text-transform:uppercase;
}

#float-right{
	float:right;	
}

/* ******************************************************
	Header
*********************************************************/

.ScriptTop {
    background: #fff none repeat scroll 0 0;
    float: left;
    font-size: 0.69em;
    font-weight: 600;
    line-height: 2.2;
    padding: 12px 0;
    text-transform: uppercase;
    width: 100%;
}

/* To Navigation Style 1*/
.ScriptTop ul {
    margin: 24px 0;
    padding: 0;
    text-align: left;
}
.ScriptTop li{
	list-style:none;	
	display:inline-block;
}
.ScriptTop li a {
    background: #6a4aed none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    padding: 5px 18px;
    text-decoration: none;
    text-transform: capitalize;
}
.ScriptTop li a:hover{
	background:#000;
	color:#fff;
}


/* Header*/
.ScriptHeader {
    float: left;
    width: 100%;
    padding-top: 3em;
}
.rt-heading {
	text-align:center;
    padding-bottom: 10px;
    margin: 0 auto;
}

.ScriptHeader h1{
    color: #e4bb0d;
    font-size: 26px;
    font-weight: 700;
    margin: 0;
    line-height: normal;

}
.ScriptHeader h2 {
    color: #726943;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0 0;
    line-height: normal;

}

.ScriptHeader h1 span {
    display: block;
    padding: 0;
    font-size: 22px;
    opacity: 0.7;
    margin-top: 5px;

}
.ScriptHeader span {
    display: block;
    padding: 0;
    font-size: 22px;
    opacity: 0.7;
    margin-top: 5px;
}




/* ******************************************************
	Live Demo
*********************************************************/





/* ******************************************************
	Responsive Grids
*********************************************************/

.rt-container {
	margin: 0 auto;
	padding-left:12px;
	padding-right:12px;
}
.rt-row:before, .rt-row:after {
  display: table;
  line-height: 0;
  content: "";
}

.rt-row:after {
  clear: both;
}
[class^="col-rt-"] {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;
  padding: 0 15px;
  min-height: 1px;
  position: relative;
}


@media (min-width: 768px) {
  .rt-container {
    width: 750px;
  }
  [class^="col-rt-"] {
    float: left;
    width: 49.9999999999%;
  }
  .col-rt-6, .col-rt-12 {
    width: 100%;
  }
  
}

@media (min-width: 1200px) {
	.rt-container {
		width: 1170px;
	}
	.col-rt-1 {
		width:16.6%;
	}
	.col-rt-2 {
		width:30.33%;
	}
	.col-rt-3 {
		width:50%;
	}
	.col-rt-4 {
		width: 67.664%;
	}
	.col-rt-5 {
		width: 83.33%;
	}
	

}

@media only screen and (min-width:240px) and (max-width: 768px){
	 .ScriptTop h1, .ScriptTop ul {
		text-align: center;
	}
	.ScriptTop h1{
		margin-top:0;
		margin-bottom:15px;
	}
	.ScriptTop ul{
		 margin-top:12px;		
	}
	
	.ScriptHeader h1,
	.ScriptHeader h2, 
	.scriptnav ul{
		text-align:center;	
	}
	.scriptnav ul{
		 margin-top:12px;		
	}
	#float-right{
		float:none;	
	}
	
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.carousel {
  min-width: 900px;
  max-width: 1236px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 48px;
  padding-right: 48px;
  position: relative;
}

.carousel__activator {
  display: none;
}

.carousel__controls {
  display: none;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  top: 0;
  right: 16px;
  left: 16px;
  bottom: 0;
}
.carousel__controls:first-of-type {
  justify-content: flex-end;
}
.carousel__controls:last-of-type {
  justify-content: flex-start;
}

.carousel__control {
  cursor: pointer;
  display: flex;
  align-items: center;
  background-color: #fff;
  color: #3d414a;
  border-radius: 100%;
  box-shadow: 0 2px 10px 0 rgba(33, 34, 36, 0.3);
  font-size: 24px;
  height: 48px;
  justify-content: center;
  transition: 0.3s all;
  width: 48px;
  z-index: 1;
}
.carousel__control:hover {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}

.carousel__activator:nth-of-type(1):checked
~ .carousel__controls:nth-of-type(1) {
  display: flex;
}

.carousel__activator:nth-of-type(1):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(0%);
          transform: translateX(0%);
}

.carousel__activator:nth-of-type(2):checked
~ .carousel__controls:nth-of-type(2) {
  display: flex;
}

.carousel__activator:nth-of-type(2):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.carousel__activator:nth-of-type(3):checked
~ .carousel__controls:nth-of-type(3) {
  display: flex;
}

.carousel__activator:nth-of-type(3):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-200%);
          transform: translateX(-200%);
}

.carousel__activator:nth-of-type(4):checked
~ .carousel__controls:nth-of-type(4) {
  display: flex;
}

.carousel__activator:nth-of-type(4):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-300%);
          transform: translateX(-300%);
}

.carousel__activator:nth-of-type(5):checked
~ .carousel__controls:nth-of-type(5) {
  display: flex;
}

.carousel__activator:nth-of-type(5):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-400%);
          transform: translateX(-400%);
}

.carousel__activator:nth-of-type(6):checked
~ .carousel__controls:nth-of-type(6) {
  display: flex;
}

.carousel__activator:nth-of-type(6):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-500%);
          transform: translateX(-500%);
}

.carousel__activator:nth-of-type(7):checked
~ .carousel__controls:nth-of-type(7) {
  display: flex;
}

.carousel__activator:nth-of-type(7):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-600%);
          transform: translateX(-600%);
}

.carousel__activator:nth-of-type(8):checked
~ .carousel__controls:nth-of-type(8) {
  display: flex;
}

.carousel__activator:nth-of-type(8):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-700%);
          transform: translateX(-700%);
}

.carousel__activator:nth-of-type(9):checked
~ .carousel__controls:nth-of-type(9) {
  display: flex;
}

.carousel__activator:nth-of-type(9):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-800%);
          transform: translateX(-800%);
}

.carousel__activator:nth-of-type(10):checked
~ .carousel__controls:nth-of-type(10) {
  display: flex;
}

.carousel__activator:nth-of-type(10):checked
~ .carousel__screen
.carousel__track {
  -webkit-transform: translateX(-900%);
          transform: translateX(-900%);
}

.carousel__screen {
  overflow: hidden;
  margin-left: -16px;
  margin-right: -16px;
}

.carousel__track {
  font-size: 0;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.carousel__item {
  display: inline-flex;
  padding-left: 16px;
  padding-right: 16px;
  vertical-align: top;
  white-space: normal;
}

.carousel__item--desktop-in-1 {
  width: 100%;
}

.carousel__item--desktop-in-2 {
  width: 50%;
}

.carousel__item--desktop-in-3 {
  width: 33.3333333333%;
}

.carousel__item--desktop-in-4 {
  width: 25%;
}

.carousel__item--desktop-in-5 {
  width: 20%;
}



.demo-content {
  color: #fff;
  display: flex;
  font-family: Helvetica;
  font-weight: 100;
  align-items: center;
  justify-content: center;
  text-transform: uppercase;
  border-radius: 3px;
  font-size: 56px;
  height: 250px;
  width: 100%;
}

.carousel__item:nth-child(1) .demo-content {
  background-color: #216485;
}

.carousel__item:nth-child(2) .demo-content {
  background-color: #3692b6;
}

.carousel__item:nth-child(3) .demo-content {
  background-color: #6fccc9;
}

.carousel__item:nth-child(4) .demo-content {
  background-color: #a6e3cf;
}

.carousel__item:nth-child(5) .demo-content {
  background-color: #aff0be;
}

.carousel__item:nth-child(6) .demo-content {
  background-color: #527059;
}

.carousel__item:nth-child(7) .demo-content {
  background-color: #243127;
}

@media screen and (max-width: 1023px) {
  .carousel {
    padding-left: 0;
    padding-right: 0;
  }

  .carousel__activator:nth-of-type(n):checked ~ .carousel__controls:nth-of-type(n) {
    display: none;
  }
  .carousel__activator:nth-of-type(n):checked ~ .carousel__screen .carousel__track {
    -webkit-transform: none;
            transform: none;
  }

  .carousel__screen {
    margin-left: 0;
    margin-right: 0;
  }

  .carousel__track {
    overflow-x: auto;
    width: auto;
    padding-left: 48px;
    padding-right: 48px;
  }

  .carousel__item--tablet-in-1 {
    width: 90%;
  }

  .carousel__item--tablet-in-2 {
    width: 45%;
  }

  .carousel__item--tablet-in-3 {
    width: 30%;
  }
}
@media screen and (max-width: 650px) {
  .carousel__track {
    padding-left: 0;
    padding-right: 0;
  }

  .carousel__item--mobile-in-1 {
    width: 90%;
  }

  .carousel__item--mobile-in-2 {
    width: 45%;
  }

  .carousel__item--mobile-in-3 {
    width: 30%;
  }
}

    </style>
</head>
<body>
		


<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class='demo-container'>
                  <div class='carousel'>
                    <input checked='checked' class='carousel__activator' id='carousel-slide-activator-1' name='carousel' type='radio'>
                    <input class='carousel__activator' id='carousel-slide-activator-2' name='carousel' type='radio'>
                    <input class='carousel__activator' id='carousel-slide-activator-3' name='carousel' type='radio'>
                    <div class='carousel__controls'>
                      <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-2'>
                        >
                      </label>
                    </div>
                    <div class='carousel__controls'>
                      <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-1'>
                        <
                      </label>
                      <label class='carousel__control carousel__control--forward' for='carousel-slide-activator-3'>
                        >
                      </label>
                    </div>
                    <div class='carousel__controls'>
                      <label class='carousel__control carousel__control--backward' for='carousel-slide-activator-2'>
                        <
                      </label>
                    </div>
                    <div class='carousel__screen'>
                      <div class='carousel__track'>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            a
                          </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            b
                          </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            c
                          </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            d
                          </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            e
                          </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            f
                          </div>
                        </div>
                        <div class='carousel__item carousel__item--mobile-in-1 carousel__item--tablet-in-2 carousel__item--desktop-in-3'>
                          <div class='demo-content'>
                            g
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
		</div>
    </div>
</section>
     
    
	</body>
</html>