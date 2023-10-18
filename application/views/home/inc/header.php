<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php if (isset($title)) {echo $title;}else{echo"Book Your Data";}?></title>
	<meta name="description" content="<?php if (isset($description)) {echo $description;}else{echo"Book Your Data";}?>">
 	<meta name="keywords" content="<?php if (isset($keywords)) {echo $keywords;}else{echo"Book Your Data";}?>">
  	<meta name="author" content="Rsm Monaem">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/home/images/favicon.ico">
	 <link rel="stylesheet" href="<?= base_url() ?>assets/home/fonts/remixicon.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/home/css/main.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/home/style.css">

</head>

<body>
<style id="intercom-lightweight-app-style" type="text/css">
	@keyframes intercom-lightweight-app-launcher {
	  from {
		opacity: 0;
		transform: scale(0.5);
	  }
	  to {
		opacity: 1;
		transform: scale(1);
	  }
	}
  
	@keyframes intercom-lightweight-app-gradient {
	  from {
		opacity: 0;
	  }
	  to {
		opacity: 1;
	  }
	}
  
	@keyframes intercom-lightweight-app-messenger {
	  0% {
		opacity: 0;
		transform: scale(0);
	  }
	  40% {
		opacity: 1;
	  }
	  100% {
		transform: scale(1);
	  }
	}
  
	.intercom-lightweight-app {
	  position: fixed;
	  z-index: 2147483001;
	  width: 0;
	  height: 0;
	  font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif;
	}
  
	.intercom-lightweight-app-gradient {
	  position: fixed;
	  z-index: 2147483002;
	  width: 500px;
	  height: 500px;
	  bottom: 0;
	  right: 0;
	  pointer-events: none;
	  background: radial-gradient(
		ellipse at bottom right,
		rgba(29, 39, 54, 0.16) 0%,
		rgba(29, 39, 54, 0) 72%);
	  animation: intercom-lightweight-app-gradient 200ms ease-out;
	}
  
	.intercom-lightweight-app-launcher {
	  position: fixed;
	  z-index: 2147483003;
	  padding: 0 !important;
	  margin: 0 !important;
	  border: none;
	  bottom: 20px;
	  right: 20px;
	  max-width: 48px;
	  width: 48px;
	  max-height: 48px;
	  height: 48px;
	  border-radius: 50%;
	  background: #0059ff;
	  cursor: pointer;
	  box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06), 0 2px 32px 0 rgba(0, 0, 0, 0.16);
	  transition: transform 167ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
	  box-sizing: content-box;
	}
  
  
	.intercom-lightweight-app-launcher:hover {
	  transition: transform 250ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
	  transform: scale(1.1)
	}
  
	.intercom-lightweight-app-launcher:active {
	  transform: scale(0.85);
	  transition: transform 134ms cubic-bezier(0.45, 0, 0.2, 1);
	}
  
  
	.intercom-lightweight-app-launcher:focus {
	  outline: none;
  
	  
	}
  
	.intercom-lightweight-app-launcher-icon {
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 48px;
	  height: 48px;
	  transition: transform 100ms linear, opacity 80ms linear;
	}
  
	.intercom-lightweight-app-launcher-icon-open {
	  
		  opacity: 1;
		  transform: rotate(0deg) scale(1);
		
	}
  
	.intercom-lightweight-app-launcher-icon-open svg {
	  width: 24px;
	  height: 24px;
	}
  
	.intercom-lightweight-app-launcher-icon-open svg path {
	  fill: rgb(255, 255, 255);
	}
  
	.intercom-lightweight-app-launcher-icon-self-serve {
	  
		  opacity: 1;
		  transform: rotate(0deg) scale(1);
		
	}
  
	.intercom-lightweight-app-launcher-icon-self-serve svg {
	  height: 44px;
	}
  
	.intercom-lightweight-app-launcher-icon-self-serve svg path {
	  fill: rgb(255, 255, 255);
	}
  
	.intercom-lightweight-app-launcher-custom-icon-open {
	  max-height: 24px;
	  max-width: 24px;
  
	  
		  opacity: 1;
		  transform: rotate(0deg) scale(1);
		
	}
  
	.intercom-lightweight-app-launcher-icon-minimize {
	  
		  opacity: 0;
		  transform: rotate(-60deg) scale(0);
		
	}
  
	.intercom-lightweight-app-launcher-icon-minimize svg path {
	  fill: rgb(255, 255, 255);
	}
  
	.intercom-lightweight-app-messenger {
	  position: fixed;
	  z-index: 2147483003;
	  overflow: hidden;
	  background-color: white;
	  animation: intercom-lightweight-app-messenger 250ms cubic-bezier(0, 1, 1, 1);
	  transform-origin: bottom right;
	  
		  width: 400px;
		  height: calc(100% - 104px);
		  max-height: 704px;
		  min-height: 250px;
		  right: 20px;
		  bottom: 84px;
		  box-shadow: 0 5px 40px rgba(0,0,0,0.16);
		
  
	  border-radius: 16px;
	}
  
	.intercom-lightweight-app-messenger-header {
	  height: 64px;
	  border-bottom: none;
	  background: #0059ff
  
	  
	}
  
	.intercom-lightweight-app-messenger-footer{
	  position:absolute;
	  bottom:0;
	  width: 100%;
	  height: 80px;
	  background: #fff;
	  font-size: 14px;
	  line-height: 21px;
	  border-top: 1px solid rgba(0, 0, 0, 0.05);
	  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.05);
	  
	}
  
	@media print {
	  .intercom-lightweight-app {
		display: none;
	  }
	}
</style>
