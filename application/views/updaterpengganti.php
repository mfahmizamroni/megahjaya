<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="refresh" content="300" />
	    <!-- This will refresh page in every 5 seconds, change content= x to refresh page after x seconds -->
	    <style type="text/css">
	    	h5, h6, .indicator {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%) scale(2);
			}
			h5 {
				font-family: 'Trebuchet MS', Helvetica, sans-serif; 
				top: 53%; 
				font-size: 10px; 
				color: #888888;
			}
			h6 {
				font-family: 'Trebuchet MS', Helvetica, sans-serif; 
				top: 56%; 
				font-size: 8px; 
				color: #888888;
			}
			.indicator svg polyline {
			  fill: none;
			  stroke-width: 2;
			  stroke-linecap: round;
			  stroke-linejoin: round;
			}
			.indicator svg polyline#back {
			  stroke: rgba(59,211,171,0.3);
			}
			.indicator svg polyline#front {
			  stroke: #3bd3ab;
			  stroke-dasharray: 12, 36;
			  stroke-dashoffset: 48;
			  animation: dash 1s linear infinite;
			}
			.cta {
			  position: fixed;
			  bottom: 20px;
			  right: 30px;
			  color: #222;
			  font-weight: bold;
			}
			@-moz-keyframes dash {
			  62.5% {
			    opacity: 0;
			  }
			  to {
			    stroke-dashoffset: 0;
			  }
			}
			@-webkit-keyframes dash {
			  62.5% {
			    opacity: 0;
			  }
			  to {
			    stroke-dashoffset: 0;
			  }
			}
			@-o-keyframes dash {
			  62.5% {
			    opacity: 0;
			  }
			  to {
			    stroke-dashoffset: 0;
			  }
			}
			@keyframes dash {
			  62.5% {
			    opacity: 0;
			  }
			  to {
			    stroke-dashoffset: 0;
			  }
			}

	    </style>
	</head>
	<body>
		<!-- https://dribbble.com/shots/3376812-Abstract-Activity-Indicator -->

		<div class="indicator"> 
		  <svg width="16px" height="12px">
		    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
		    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
		  </svg>
		</div>
		<h5>Updating Scanlog Pengganti</h5>
		<h6><?= $pengganti->nama_matkul ?> - <?= $pengganti->jam_pengganti ?></h6>
	</body>
</html>