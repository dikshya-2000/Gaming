<!--<html>
    <body>
        <div class="container">
            <div class="table">
                <div class="table-header">
                <div class="header__item"><a id="sl_no" class="filter__link filter__link--number" href="#">Sl.No.</a></div>
                <div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
			<div class="header__item"><a id="email" class="filter__link" href="#">Email</a></div>
			<div class="header__item"><a id="password" class="filter__link filter__link--number" href="#">Password</a></div>
            <div class="header__item"><a id="action" class="filter__link">Action</a></div>
		</div>
		<div class="table-content">	
			<div class="table-row">		
				<div class="table-data"><?php echo $sl;$sl++; ?></div>
				<div class="table-data"><?php echo $result['name'] ?></div>
				<div class="table-data"><?php echo $result['email'] ?></div>
				<div class="table-data"><?php echo $result['password'] ?></div>
				<div class="table-data"><a class="btn btn-danger" href="delete.php?userid1=<?php echo $result['user_id']?>">Delete</a></div>
			</div>
</div>
</div>
</div>
            

    <tr>
    <td><div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#"><?php echo $sl;$sl++; ?></a></td>
    <td><div class="header_item"><a id="name" class="filter_link" href="#"><?php echo $result['name'] ?></a></td>
    <td><div class="header_item"><a id="name" class="filter_link" href="#"><?php echo $result['email'] ?></a></td>
    <td><div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#"><?php echo $result['password'] ?></a</td>
    <td><a class="btn btn-danger" href="delete.php?userid1=<?php echo $result['user_id']?>">Delete</a></td>
  </tr>
</body>
</html>-->

<tr>
    <td><?php echo $sl;$sl++; ?></td>
    <td><?php echo $result['name'] ?></td>
    <td><?php echo $result['email'] ?></td>
    <td><?php echo $result['password'] ?></td>
    <td><a class="btn btn-danger" href="delete.php?userid1=<?php echo $result['user_id']?>">Delete</a></td>
  </tr>