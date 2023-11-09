<!DOCTYPE html>
<html lang="en">
<head>
  <title>PWEB C Tooltip</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <br>
  <h3 style="color: rgb(1, 1, 149);">Designing a Sustainable Campus Area, ITS Team Wins at FUCAD Malaysia</h3>
  <p>The head of ITS Arapaima Team, Muhammad Farhan, explained that FUCAD is a design competition to build a 
    futuristic campus area using new design concepts. “In this case (FUCAD, red), participants are challenged to 
    create innovative and inspiring designs, including site selection, structural systems, sustainability and 
    environmental performance as well as functions and operations,” he added.</p>
  <!-- # agar tidak bisa diklik ke link lain -->
  <a href="#" data-toggle="tooltip" data-placement="top" title="Visualization of the design of a student residential area consisting of four main buildings designed by the ITS Arapaima Team">Ini atas</a>
  <a href="https://www.its.ac.id/news/en/2023/08/25/designing-a-sustainable-campus-area-its-team-wins-at-fucad-malaysia/" data-toggle="tooltip" data-placement="bottom" title="Visualization of the design of a student residential area consisting of four main buildings designed by the ITS Arapaima Team" target="_blank">Ini bawah</a>
  <a href="#" data-toggle="tooltip" data-placement="left" title="Visualization of the design of a student residential area consisting of four main buildings designed by the ITS Arapaima Team">Ini kiri</a>
  <a href="https://www.its.ac.id/news/en/2023/08/25/designing-a-sustainable-campus-area-its-team-wins-at-fucad-malaysia/" data-toggle="tooltip" data-placement="right" title="Visualization of the design of a student residential area consisting of four main buildings designed by the ITS Arapaima Team">Ini kanan</a>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>
