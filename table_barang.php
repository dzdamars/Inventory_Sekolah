<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bahan/css/tab_barang.css">
  <link rel="stylesheet" type="text/css" href="bahan/css/datatables.min.css">
  <script type="text/javascript" src="bahan/js/datatables.min.js"></script>
</head>
<body>
<h2>Responsive Table with DataTables</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <caption class="text-center">An example of a responsive table based on <a href="https://datatables.net/extensions/responsive/" target="_blank">DataTables</a>:</caption>
        <thead>
          <tr>
            <th>Type</th>
            <th>Total</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Argentina</td>
            <td>Spanish (official), English, Italian, German, French</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" class="text-center">Data retrieved from <a href="http://www.infoplease.com/ipa/A0855611.html" target="_blank">infoplease</a> and <a href="http://www.worldometers.info/world-population/population-by-country/" target="_blank">worldometers</a>.</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<p class="p">Demo by George Martsoukos. <a href="http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions" target="_blank">See article</a>.</p>

</body>
</html>