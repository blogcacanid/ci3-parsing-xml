<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Parsing Data XML Dari Feed RSS CodeIgniter 3</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Feed RSS Detik.com</h2><hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>TITLE</th>
                        <th>LINK</th>
                        <th>PUBLISH DATE</th>
                        <th>DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datalist as $row):?>
                    <tr>
                        <td><?php echo $row->title;?></td>
                        <td><?php echo $row->link;?></td>
                        <td><?php echo $row->pubDate;?></td>
                        <td><?php echo $row->description;?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>  
