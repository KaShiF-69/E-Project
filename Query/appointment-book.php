      <?php
        include("connect.php");

        if(isset($_POST['sub'])){
            $name = $_POST['name'];
            $email = $_POST['mail'];
            $service = $_POST['service'];
            $date = $_POST['date'];
            $time = $_POST['time'];

            // Insert query
            $query = "INSERT INTO appointments(name,email,service,date,time)
                      VALUES('$name','$email','$service','$date','$time')";
            $run = mysqli_query($conn, $query);

            if($run){
                echo "<script>alert('Appointment Booked Successfully')</script>";

                // Get last inserted row
                $id = mysqli_insert_id($conn);
                $get = mysqli_query($conn, "SELECT * FROM appointments WHERE appointment_id='$id'");
                $row = mysqli_fetch_assoc($get);

                // Display receipt
                echo "
                <div class='card shadow-sm mt-4'>
                    <div class='card-body'>

                        <h5 class='card-title text-center mb-3'>Appointment Receipt</h5>

                        <p class='mb-1'><strong>Name:</strong> {$row['name']}</p>
                        <p class='mb-1'><strong>Email:</strong> {$row['email']}</p>
                        <p class='mb-1'><strong>Service:</strong> {$row['service']}</p>
                        <p class='mb-1'><strong>Date:</strong> {$row['date']}</p>
                        <p class='mb-2'><strong>Time:</strong> {$row['time']}</p>

                        <span class='badge bg-success mb-2'>{$row['status']}</span>

                        <hr>

                        <p class='text-center text-muted mb-0'>Thank you for booking with us!</p>
                    </div>
                </div>
                ";

            } else {
                echo "<script>alert('Failed to Book Appointment')</script>";
            }
        }
      ?>