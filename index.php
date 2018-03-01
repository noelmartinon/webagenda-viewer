<?php
/*
webagenda-viewer (calendar viewer - ical & dav)
 
Copyright (C) 2017  Noël Martinon

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <//www.gnu.org/licenses/>.
*/
?>
<?php
	require_once('inc/config.inc');
	require_once('inc/common.inc');
?>
<!DOCTYPE html>
<!-- WebAgenda-viewer - Copyright (C) 2017  Noël Martinon -->
<html>
<head>
<meta charset='utf-8' />

<title><?php echo $title;?></title>

<!-- jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Font Awesome /!\Using fa icon in Fullcalendar need '.fc-icon-fa' css adaptation (see app.css)-->
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet" type="text/css">

<!-- Moment -->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
    
<!-- Fullalendar -->
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/locale-all.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css" rel="stylesheet" type="text/css">
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.print.min.css" rel="stylesheet" type="text/css" media="print">


<!-- jquery-scrollTo -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

<!-- qtip2 -->
<script src="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
<link href="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css" rel="stylesheet" type="text/css">

<!-- bootstrap-select -->
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-fr_FR.min.js"></script>

<!-- PNotify & Animate-->
<script src="js/pnotify.min.js"></script>
<link href="css/pnotify.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!-- Mozilla-comm/ical -->
<script src="js/ical.js"></script>

<!-- icalendar2fullcalendar -->
<script src="js/ical_events.js"></script>
<script src="js/ical_fullcalendar.js"></script>

<!-- app  -->
<script src="js/app.js"></script>
<link href="css/app.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="container">	
	<div class="page-header">
		<h1><?php echo $titleheader;?></h1>
	</div>
	<div class="row">    
		<div class="col-xs-3 col-sm-3 col-md-3">		
			<div class="form-group">
				<select id="userlist" class="selectpicker form-control" data-live-search="true" data-actions-box="true" title="Choisissez un agenda">					
				</select>
                <img id="loading-users" src="images/ajax-loader.gif"/>
			</div>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9">
			<div id="calendar">				
			</div>
			<img id="loading-calendar" src="images/ajax-loader.gif"/>				
		</div>
	</div>
</div>
</body>
</html>


