<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <title>Newsletter</title>
</head>
<body>
    <div class="row my-5">
    <center><h2 style="font-weight: bold;">Newsletter</h2></center>
    <h3 class="fs-4 mb-3"></h3>
    <div class="col">
    <?php
    include("connection.php");
    $sql= "SELECT * FROM subscribe";
    $data= mysqli_query($conn,$sql);
    ?>
    <table class="table bg-white rounded shadow-sm  table-hover" border="1" style="padding:30px">                  
        <thead>
        <tr>
            <th scope="col">SL.No</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sl=1;
        while($result= mysqli_fetch_assoc($data))
        {
        ?>
        <tr>
            <td><?php echo $sl;$sl++; ?></td>
            <td><?php echo $result['email'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>                   
    </div>
    </div>
</body>
</html>