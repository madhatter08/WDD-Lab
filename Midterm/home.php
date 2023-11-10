<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<?php include('session.php'); ?>
<body>
    <div class="nav">
        <div class="logo">
            <a href="home.php"><p>Home</p></a>
        </div>
        <div class="right-links">
            <a href="edit.html">Change Profile</a>
            <a href="logout.php"><button class="btn">Log Out</button> </a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <img width="50" height="50"
                    <?php
                        $result = mysqli_query($con,$image_query);
                        if($result->num_rows>0){
                            while($data = mysqli_fetch_assoc($result)){
                                ?>
                                    <img src="./images/<?php echo $data['picture']; ?>">
                                <?php
                            }
                        }
                    ?>
                    <p>Hello <b><?php echo $fullname; ?></b>, Welcome!</p>
                </div>
                <div class="box"">
                    <p>Today's date is: <br> <b>November 10, 2023</b></p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p style={text-align="center"}>User Information</p>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Full Name</th><th>Email</th><th>Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $retrieve = mysqli_query($con,"select * from users");
                                $ctr = 1;
                                while ($rows=mysqli_fetch_array($retrieve)){ ?>
                                    <tr id="<?php echo $rows['id']; ?>">
                                        <td><?php echo $rows['fullname']; ?></td>
                                        <td><?php echo $rows['email']; ?></td>
                                        <td><?php echo $rows['reg_date']; ?></td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                    <?php 
                                    $ctr++;
                                }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>